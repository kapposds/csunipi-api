<?php

namespace App\Providers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //custom validation rule: empty_with:
        Validator::extendImplicit('empty_with', function($attribute, $value, $parameters, $validator) {

            $empty_parameters_count = 0;
            foreach ($parameters as $parameter)
            {
//            dd(empty(Input::get($parameter)));
                if ( empty(Input::get($parameter))) //or Input::get($parameter)==""
                {
                    $empty_parameters_count++;
                }
            }

            if ($value && $empty_parameters_count==count($parameters)){ //if current field is not empty AND other fields are empty --> NO ERROR
                return true;
            }
            else if(!$value){ //if current field is empty ---> NO ERROR
                return true;
            }
            else{
               return false;  //failure, return error
            }

        });

        //string replace for custom rule's 'empty_with" message
        Validator::replacer('empty_with', function ($message, $attribute, $rule, $parameters) {

            //fields :other replacement in message
            $parameters = app('App\Http\Controllers\Web\HelperFunctionsController')->normalizeFieldNames($parameters);

            return str_replace([':other', ':value'], $parameters, $message);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
