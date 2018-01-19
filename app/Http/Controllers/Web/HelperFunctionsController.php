<?php

namespace App\Http\Controllers\Web;

use App\Article;
use App\Page;
use App\Person;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class HelperFunctionsController extends Controller
{
    /**
     *slugify input text, will be used by ajax requests
     */
    public function slugify_text($input_text)
    {
        $slugified_text = Str::slug($input_text);
        echo $slugified_text;
    }


    /**
     *normalize disk name for session flash message
     */
    public function normalizeDiskName($disk)
    {
        //normalize disk names
        switch ($disk) {
            case "people":
                $disk_name='Εικονίδια Ατόμων (Avatars)';
                break;
            case "thumbnails":
                $disk_name='Εικονίδια Άρθρων (Thumbnails)';
                break;
            case "articles":
                $disk_name='Εικόνες σε περιεχόμενο Άρθρων';
                break;
            case "pages":
                $disk_name='Εικόνες σε περιεχόμενο Σελίδων';
                break;
            default:
                $disk_name = $disk;
        }
        return $disk_name;
    }


    public function handleDuplicateAlias($slugified_alias , $model_context)
    {
        $i=2; //if alias exists we want to add 2 or higher at the end of the slug
        $already_existing_alias = $model_context::select('alias')->where('alias','=',$slugified_alias)->first();

        while( !is_null($already_existing_alias) ) { //whlle alias already exists (not null)
            if($i>2)//if its not initial time, remove -i (i's length amount of characters from slugified alias string
            {
                $i_length = strlen($i);
                $slugified_alias = substr($slugified_alias, 0, -$i_length);
            }
            //add -i at the end of the slug
            $slugified_alias = Str::slug($slugified_alias.'-'.$i);
            //update already existing alias to check if there is one same as the new slugified alias
            $already_existing_alias = $model_context::select('alias')->where('alias','=',$slugified_alias)->first();
            $i++;
        }

        return $slugified_alias;
    }

    //used by AppServiceProvider to change the displayed field names for rule $parameters (:other in message). for rule $attributes is by default in laravel
    public function normalizeFieldNames($parameters)
    {
        for ($i = 0; $i < count($parameters); $i++) {
            switch ($parameters[$i]) {
                case "category_with_articles":
                    $parameters[$i]='category with articles';
                    break;
                case "category_without_articles":
                    $parameters[$i]='category without articles';
//                    break;
//                case "other":
//                    $parameters[$i]='other.....';
            }
        }

        return $parameters;
    }

    //used to generate viewtitle = first article's that belongs to same page as current articles. if there is no such article, viewtitle=page's viewtitle
    public function handleViewtitle($category)
    {
        $similar_article = Article::where('category','=',$category)->first();
        if($similar_article)
        {
            $new_viewtitle = $similar_article->viewtitle;
        }
        else
        {
                $article_page = Page::where('alias', '=' , $category)->first();
                $new_viewtitle = $article_page->viewtitle;
        }

        return $new_viewtitle;
    }

    //not used (ssl certificate needed)
    public function pushNotification()
    {
        $curl = curl_init();
        $token = "API_TOKEN";

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.ionic.io/auth/test",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $token",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

}
