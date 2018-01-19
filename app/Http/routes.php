<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//----------------------------API routes------------------------------------------------------
Route::group(['middleware' => ['api']], function () {

    //default api route. used from frontend apps to check if they can access api
    Route::get('/api', function () {
    return response()->json(['cs unipi api responded' => 'true']);
    });

	// menuitems
	Route::get('/api/menuitems', 'Api\menuitemsController@index');
				//route ,     folder\controllerFile@method
	//submenuitems
	Route::get('/api/submenuitems/{category}', 'Api\submenuitemsController@show_category');

	//pages
	Route::get('/api/pages/{page}', 'Api\pagesController@show');
	Route::patch('/api/pages/{page}', 'Api\pagesController@update');

	//articles
	Route::get('/api/articles/{category}{results?}', 'Api\articlesController@show_category');
	Route::get('/api/articles/{category}/count', 'Api\articlesController@count_category');
	Route::get('/api/articles/{category}/{article}', 'Api\articlesController@show');
	Route::patch('/api/articles/{category}/{article}', 'Api\articlesController@update');

	//persons
	Route::get('/api/people/{category}' , 'Api\peopleController@show_category');

	//Search
	//news
	Route::get('/api/search/news/{input}' , 'Api\searchController@search_news');
	Route::get('/api/search/news/{input}/count', 'Api\searchController@count_news');
	//persons
	Route::get('/api/search/people/{input}' , 'Api\searchController@search_people');
	Route::get('/api/search/people/{input}/count', 'Api\searchController@count_people');
	//studies
	Route::get('/api/search/studies/{input}' , 'Api\searchController@search_studies');
	Route::get('/api/search/studies/{input}/count', 'Api\searchController@count_studies');
	//other
	Route::get('/api/search/other/{input}' , 'Api\searchController@search_other');
	Route::get('/api/search/other/{input}/count', 'Api\searchController@count_other');

});

//----------------------------Web routes--------------------------------------------------------
Route::group(['middleware' => ['web']], function () {
//???????????????????????????????????????????????????? den exei session edo mesa
});

//landing page is login if user is not authenticated
Route::get('/', 'Auth\AuthController@showLoginForm');


//built-in authentication routes (login,logout,password reset)
Route::auth();


//------------------------Web Routes for Authenticated Users------------------------------------
//route only for authenticated - super admins
Route::group(['middleware' => ['super_admin']], function(){

    //register routes override (commented in Router.php)
    Route::get('users', 'Web\UserController@index');
    Route::get('users/create', 'Web\UserController@create');
    //rest of users routes
    Route::post('users', 'Web\UserController@store');
    Route::get('users/{user}/edit', 'Web\UserController@edit');
    Route::patch('users/{user}', 'Web\UserController@update');
    Route::delete('users/{user}', 'Web\UserController@destroy');

});
//to prevent default exception Method Not Allowed
Route::get('/users/{user}', function () {
    return response()->view('errors.404', [], 404);
});


//routes only for authenticated - users
Route::group(['middleware' => ['auth']], function () {

    //landing page is home if user is authenticated
    Route::get('/', 'Web\HomeController@index');

    //home                                          //named route
    Route::get('/home', 'Web\HomeController@index')->name('home');

    //edit profile
    Route::get('profile', 'Auth\ProfileController@edit');
    Route::patch('profile', 'Auth\ProfileController@update');

    //articles
    Route::resource('articles', 'Web\ArticlesController');

    //pages
    Route::resource('pages', 'Web\PagesController',
        ['except' => ['create', 'store', 'destroy']]);

    //people
    Route::resource('people', 'Web\PeopleController', ['parameters' => [
        'people' => 'person' //to generate routes like /people/{person}
    ]]);

    //picture files
    Route::get('pictures','Web\PictureController@index_disks');
    Route::get('pictures/{disk}','Web\PictureController@index');
    Route::get('pictures/{disk}/create', 'Web\PictureController@create');
    Route::post('pictures/{disk}','Web\PictureController@store');
    Route::get('pictures/{disk}/{picture}','Web\PictureController@show');
    Route::delete('pictures/{disk}/{picture}','Web\PictureController@destroy');

    //helper functions used by ajax requests
    Route::get('slugify-text/{input_text}', 'Web\HelperFunctionsController@slugify_text');

    //testing route (will be deleted)
//    Route::get('push', 'Web\HelperFunctionsController@pushNotification');
});









