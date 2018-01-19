<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\UpdatePage;
use App\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    private $HelperFunctionsContext='';

    public function __construct()
    {
        $this->HelperFunctionsContext = app('App\Http\Controllers\Web\HelperFunctionsController');
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
            $pages=Page::orderBy('created_at','desc')->paginate(10);
        }
        else         //search filtered index
        {
            $search_input = Str::lower($search_input); //convert input to lowercase to prevent case sensitive issues
            $search_input = preg_split('/\s+/', $search_input, null, PREG_SPLIT_NO_EMPTY);// split on 1+ whitespace & ignore empty (eg. trailing space)

            $pages = Page::where(function($query) use($search_input) //nested $query needed to use for outside of $q
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
        return view('pages.pages',compact('pages','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);

        return view('pages.pages_show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);

        return view('pages.pages_edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePage $request, $id)
    {
        $page = Page::find($id);

        //viewtitle handle: depends on title
        $request->merge(['viewtitle' => $request->title]);

        //update page alias only if request value is different than models (if it is edited)
        if ($request->alias != $page->alias) {
            //alias handle: auto slug generate (for update)
            $slugified_alias = Str::slug($request->alias);
            $slugified_alias = $this->HelperFunctionsContext->handleDuplicateAlias($slugified_alias, app('App\Page'));

            $request->merge(['alias' => Str::slug($slugified_alias)]);
        }

        //request->content is forbidden
        $request->merge(['content' => $request->ckeditor_content]);

        $page->update($request->all());

        session()->flash('flash_message','Η σελίδα "'.$request->title.'" ενημερώθηκε επιτυχώς!');
        return redirect('/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
