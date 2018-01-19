<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Article;
use App\Page;
use App\Person;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //count table records
        $articles_count = Article::count();;
        $pages_count = Page::count();;
        $people_count = Person::where('divider','=','0')//except dividers
            ->count();
        $users_count = User::count();;

        //last 5 updated records from each table
        $recently_updated_articles = Article::select('id','title','updated_at')
                                              ->orderBy('updated_at','desc')
                                              ->take(5)
                                              ->get();

        $recently_updated_pages = Page::select('id','title','updated_at')
                                        ->orderBy('updated_at','desc')
                                        ->take(5)
                                        ->get();

        $recently_updated_people = Person::select('id','fullname','updated_at')
                                        ->where('divider','=','0')//except dividers
                                        ->orderBy('updated_at','desc')
                                        ->take(5)
                                        ->get();

        $recently_updated_users = User::select('name','super_admin','updated_at')
                                        ->orderBy('updated_at','desc')
                                        ->take(5)
                                        ->get();

        return view('pages.home',compact('users_count','articles_count','pages_count','people_count',
            'recently_updated_articles','recently_updated_pages','recently_updated_people','recently_updated_users'));
    }
}
