<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\UpdateUser;
use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    //show logged in user's profile
    public function edit()
    {
        $current_user =Auth::user();

        return view('auth.profile',compact('current_user'));
    }

    //update logged in user's profile
    public function update(UpdateUser $request)
    {
        //gets authenticated user
        $current_user =$request->user();

        //if password field is empty dont patch it
        if (Input::get ('password') == '') {
            $current_user->update (Input::except ('password'));
        }
        else {
            $request->merge(['password' => Hash::make($request->password)]);
            $current_user->update($request->all());
        }
        //xreiazetai olo afto?
//        $validator = Validator::make($request->all(),$request->rules(1),$request->messages());
//        if ($validator->fails()) {
//
//            return back()
//                ->withErrors($validator)
//                ->withInput(Input::except('password','password_confirmation'));
//
//        }

        session()->flash('flash_message','Το προφίλ σας ενημερώθηκε επιτυχώς!');

        return redirect('/home');
    }
}
