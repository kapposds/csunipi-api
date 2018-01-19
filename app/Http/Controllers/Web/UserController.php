<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $search_input = Input::get('search', false);

        if ($search_input == false)        //index without search
        {
            $users=User::orderBy('created_at','desc')->paginate(10); //paginate makes automatic pagination with limit 10 and offset +10 every time

        }
        else         //search filtered index
        {
            $search_input = Str::lower($search_input); //convert input to lowercase to prevent case sensitive issues
            $search_input = preg_split('/\s+/', $search_input, null, PREG_SPLIT_NO_EMPTY);// split on 1+ whitespace & ignore empty (eg. trailing space)

            $users = User::where(function($query) use($search_input) //nested $query needed to use for outside of $q
            {
                foreach($search_input as $input)//compare every input word using AND
                {
                    $query->where(function($q) use ($input)
                    {   //title or alias or content must match with input (nested OR in ANDs)
                        $q->where('name','like','%'.$input.'%')
                            ->orWhere('email','like','%'.$input.'%');
                    });
                }
            })
                ->orderBy('created_at', 'desc')
                ->paginate(10); //makes automatic pagination with limit 10 and offset +10 every time
        }

        $search = Input::get('search'); //for the view


        return view('pages.users',compact('users','search'));
    }


    public function create()
    {
        return view('pages.users_create');
    }



    public function store(StoreUser $request)
    {
        $user = new User;

        $request->merge(['password' => Hash::make($request->password)]);

        $user->create($request->all());

        session()->flash('flash_message','Ο χρήστης "'.$request->name.'" καταχωρήθηκε επιτυχώς!');
        return redirect('/users');
    }

    public function edit($id)
    {
        $user = User::find($id);

        //if edited user is super admin , return unauthorized error
        if($user->super_admin =='1')
        {
            return response()->view('errors.401', [], 401);
        }
        return view('pages.users_edit',compact('user'));
    }

    public function update(UpdateUser $request, User $user)
    {
        //if password field is empty dont patch it
        if (Input::get ('password') == '') {
            $user->update (Input::except ('password'));
        }
        else {
            $request->merge(['password' => Hash::make($request->password)]);
            $user->update($request->all());
        }

        //if edited user is super admin , return unauthorized error
        if($user->super_admin =='1')
        {
            return response()->view('errors.401', [], 401);
        }

        session()->flash('flash_message','Ο χρήστης "'.$user->name.'" ενημερώθηκε επιτυχώς!');

        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        //if edited user is super admin , return unauthorized error
        if($user->super_admin =='1')
        {
            return response()->view('errors.401', [], 401);
        }

        session()->flash('flash_message','Ο χρήστης "'.$user->name.'" διαγράφηκε επιτυχώς!');

        return back();
    }
}
