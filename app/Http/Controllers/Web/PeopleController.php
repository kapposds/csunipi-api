<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\StoreUpdatePerson;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Person;
use App\Page;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

use App\Http\Controllers\Web\HelperFunctionsController;

class PeopleController extends Controller
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
            $people=Person::where('divider','=','0') //only not dividers
//            ->orderBy('rank','asc')
            ->orderBy('created_at','desc')
                ->paginate(10); //makes automatic pagination with limit 10 and offset +10 every time
        }
        else         //search filtered index
        {
            $search_input = Str::lower($search_input); //convert input to lowercase to prevent case sensitive issues
            $search_input = preg_split('/\s+/', $search_input, null, PREG_SPLIT_NO_EMPTY);// split on 1+ whitespace & ignore empty (eg. trailing space)

            $people = Person::where('divider','=','0') //only not dividers
            ->where(function($query) use ($search_input)
            {//and where  (for every $input)
                foreach($search_input as $input)
                {
                    $query->where(function($q) use($input)
                    {//try to match something of the following (or)
                        $q->where('fullname','like','%'.$input.'%')
                            ->orWhere('alias','like','%'.$input.'%')
                            ->orWhere('tags','like','%'.$input.'%')
                            ->orWhere('email','like','%'.$input.'%');
                    });
                }
            })
                //            ->orderBy('rank','asc')
                ->orderBy('created_at', 'desc')
                ->paginate(10); //makes automatic pagination with limit 10 and offset +10 every time
        }

        $search = Input::get('search'); //for the view

        return view('pages.people',compact('people','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //category normalization
        $pages_with_people = Page::has('people')->get();

        //ranks normalization
        $enums = Person::getPossibleRanks();

        return view('pages.people_create',compact('pages_with_people','enums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdatePerson $request)
    {
        $person = new Person;

        //if there will be an upload generate unique filename. if no upload keep the same
        if ($request->file != '') {
            //get new name (so it matches the new file's filename), the same value will be returned by file store!
            $new_filename = $this->PictureControllerContext->handleDuplicateFilename($request->avatar , 'people');
        }
        else {
            $new_filename = $request->avatar;
            }


        //if avatar is empty dont use the input (in order to use the default field in database: default.jpg, otherwise it would be empty)
        if ($request->avatar == '') {
//            $person->create($request->except('avatar'));
            $request->merge(['avatar' => 'default.jpg']);
        }
        else{
            $request->merge(['avatar' => $new_filename]);
        }

        //auto slug generate
        $slugified_alias = Str::slug($request->alias);
        $slugified_alias=$this->HelperFunctionsContext->handleDuplicateAlias($slugified_alias, app('App\Person'));

        $request->merge(['alias' => Str::slug($slugified_alias)]);

        $person->create($request->all());

        //upload file if there is one after successful create
        if ($request->file != '') {
            $this->PictureControllerContext->store($request, 'people');
        }

        session()->flash('flash_message','Το άτομο "'.$request->fullname.'" καταχωρήθηκε επιτυχώς!');
        return redirect('/people');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $person = Person::find($id);

        //for dividers , return unauthorized error
        if($person->divider =='1')
        {
            return response()->view('errors.401', [], 401);
        }
        return view('pages.people_show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::find($id);

        //category normalization
        $pages_with_people = Page::has('people')->get();

        //rank normalization
        $enums = Person::getPossibleRanks();


        return view('pages.people_edit',compact('person','pages_with_people','enums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdatePerson $request, Person $person)
    {
        //if there will be an upload generate unique filename. if no upload keep the same
        if ($request->file != '') {
            //get new name (so it matches the new file's filename), the same value will be returned by file store!
            $new_filename = $this->PictureControllerContext->handleDuplicateFilename($request->avatar , 'people');
        }
        else {
            $new_filename = $request->avatar;
        }

        //if avatar is empty dont use the input (in order to use the default field in database: default.jpg, otherwise it would be empty)
        if ($request->avatar == '') {
//            $person->create($request->except('avatar'));
            $request->merge(['avatar' => 'default.jpg']);
        }
        else{
            $request->merge(['avatar' => $new_filename]);
        }

        //update person alias only if request value is different than models (if it is edited)
        if ($request->alias != $person->alias){
            //auto slug generate
            $slugified_alias = Str::slug($request->alias);
            $slugified_alias=$this->HelperFunctionsContext->handleDuplicateAlias($slugified_alias, app('App\Person'));

            $request->merge(['alias' => Str::slug($slugified_alias)]);
        }

        $person->update($request->all());

        //upload file if there is one after successful update
        if ($request->file != '') {
            $this->PictureControllerContext->store($request, 'people');
        }

        session()->flash('flash_message','Το άτομο "'.$person->fullname.'" ενημερώθηκε επιτυχώς!');

        return redirect('/people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Person $person) // could be $id and then find person with that id (@show)
    {
        $person->delete();

        session()->flash('flash_message','Το άτομο "'.$person->fullname.'" διαγράφηκε επιτυχώς!');

        return back();
    }

}
