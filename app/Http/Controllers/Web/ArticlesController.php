<?php

namespace App\Http\Controllers\Web;

use App\Article;
use App\Http\Requests\StoreUpdateArticle;
use App\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    private $HelperFunctionsContext='';
    private $PictureControllerContext='';

    public function __construct()
    {
        $this->HelperFunctionsContext = app('App\Http\Controllers\Web\HelperFunctionsController');
        $this->PictureControllerContext = app('App\Http\Controllers\Web\PictureController');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search_input = Input::get('search', false);

        if ($search_input == false)        //index without search
        {
            $articles=Article::orderBy('created_at','desc')->paginate(10);
        }
        else         //search filtered index
        {
            $search_input = Str::lower($search_input); //convert input to lowercase to prevent case sensitive issues
            $search_input = preg_split('/\s+/', $search_input, null, PREG_SPLIT_NO_EMPTY);// split on 1+ whitespace & ignore empty (eg. trailing space)

            $articles = Article::where(function($query) use($search_input) //nested $query needed to use for outside of $q
            {
                foreach($search_input as $input)//compare every input word using AND
                {
                    $query->where(function($q) use ($input)
                    {   //title or alias or content must match with input (nested OR in ANDs)
                        $q->where('title','like','%'.$input.'%')
                            ->orWhere('alias','like','%'.$input.'%')
                            ->orWhere('viewtitle','like','%'.$input.'%')
                            ->orWhere('content','like','%'.$input.'%');
                    });
                }
            })
                ->orderBy('created_at', 'desc')
                ->paginate(10); //makes automatic pagination with limit 10 and offset +10 every time
        }

        $search = Input::get('search'); //for the view
        return view('pages.articles',compact('articles','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //category normalization
        $pages_with_articles = Page::has('articles')->whereDoesntHave('people')->get();
        $pages_without_articles = Page::whereDoesntHave('articles')->whereDoesntHave('people')->get();

        return view('pages.articles_create',compact('pages_with_articles', 'pages_without_articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateArticle $request)
    {
        $article = new Article;

        //category handle: merge with request the filled that has a value instead of the empty one
        if($request->category_with_articles == ''){
            $request->merge(['category' => $request->category_without_articles]);
        }
        else{
            $request->merge(['category' => $request->category_with_articles]);
        }

        //viewtitle handle: depends on category
        $new_viewtitle = $this->HelperFunctionsContext->handleViewtitle($request->category);
        $request->merge(['viewtitle' => $new_viewtitle]);


        //filename handle: if there will be an upload generate unique filename. if no upload keep the same
        if ($request->file != '') {
            //get new name (so it matches the new file's filename), the same value will be returned by file store!
            $new_filename = $this->PictureControllerContext->handleDuplicateFilename($request->thumbnail , 'thumbnails');
        }
        else {
            $new_filename = $request->thumbnail;
        }

            //if thumbnail is empty dont use the input
        if ($request->thumbnail != '') {
            $request->merge(['thumbnail' => $new_filename]);
        }

        //alias handle: auto slug generate
        $slugified_alias = Str::slug($request->alias);
        $slugified_alias=$this->HelperFunctionsContext->handleDuplicateAlias($slugified_alias, app('App\Article'));
        $request->merge(['alias' => Str::slug($slugified_alias)]);

        //content handle
        $final_content = $this->handleArticleContent($request->attachement, $request->ckeditor_content, $request->attachement_url, $request->title);
        $request->merge(['content' => $final_content]);


        $article->create($request->all());

        //upload file if there is one after successful create
        if ($request->file != '') {
            $this->PictureControllerContext->store($request, 'thumbnails');
        }

        session()->flash('flash_message','Το άρθρο "'.$request->title.'" καταχωρήθηκε επιτυχώς!');

        //call push notification function


        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('pages.articles_show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);

        //category normalization
        $pages_with_articles = Page::has('articles')->whereDoesntHave('people')->get();
        $pages_without_articles = Page::whereDoesntHave('articles')->whereDoesntHave('people')->get();

        return view('pages.articles_edit',compact('article','pages_with_articles', 'pages_without_articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateArticle $request, $id)
    {
        $article = Article::find($id);

        //category handle: merge with request the filed that has a value instead of the empty one
        if($request->category_with_articles == ''){
            $request->merge(['category' => $request->category_without_articles]);
        }
        else{
            $request->merge(['category' => $request->category_with_articles]);
        }

        //viewtitle handle: depends on category
        $new_viewtitle = $this->HelperFunctionsContext->handleViewtitle($request->category);
        $request->merge(['viewtitle' => $new_viewtitle]);


        //filename handle: if there will be an upload generate unique filename. if no upload keep the same
        if ($request->file != '') {
            //get new name (so it matches the new file's filename), the same value will be returned by file store!
            $new_filename = $this->PictureControllerContext->handleDuplicateFilename($request->thumbnail , 'thumbnails');
        }
        else {
            $new_filename = $request->thumbnail;
        }

        //if thumbnail is empty dont use the input
        if ($request->thumbnail != '') {
            $request->merge(['thumbnail' => $new_filename]);
        }

        //update article alias only if request value is different than models (if it is edited)
        if ($request->alias != $article->alias) {
            //alias handle: auto slug generate (for update)
            $slugified_alias = Str::slug($request->alias);
            $slugified_alias = $this->HelperFunctionsContext->handleDuplicateAlias($slugified_alias, app('App\Article'));

            $request->merge(['alias' => Str::slug($slugified_alias)]);
        }
        //content handle
        $final_content = $this->handleArticleContent($request->attachement, $request->ckeditor_content, $request->attachement_url, $request->title);
        $request->merge(['content' => $final_content]);


        $article->update($request->all());

        //upload file if there is one after successful create
        if ($request->file != '') {
            $this->PictureControllerContext->store($request, 'thumbnails');
        }

        session()->flash('flash_message','Το άρθρο "'.$request->title.'" ενημερώθηκε επιτυχώς!');
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();

        session()->flash('flash_message','Το άρθρο "'.$article->title.'" διαγράφηκε επιτυχώς!');

        return back();
    }

    //if there is attachement, content will be a link with href $attachement_url and title $title. if there is no attachement content will be what ckeditor contains
    public function handleArticleContent($attachement, $ckeditor_content, $attachement_url, $title)
    {
        if($attachement==1)
        {
            $final_content = '<a href="'.$attachement_url.'">'.$title.'</a>';
        }
        else
        {
            $final_content = $ckeditor_content;
        }

        return $final_content;
    }
}
