<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Rubrique;
use App\Article;


class ArticlesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

        public function __construct(){
            $this->middleware('auth');
        }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

    public function index()
    {
        $articles=Article::all();

        return view('Admin/accueil' );

    }


    public function listeArticles()
    {
        $articles=Article::all();

        return view('Admin/articles/liste')->with('articles',$articles);
    }

    public function ajoutArticle(){





        $rub= Rubrique::all();

        return view('Admin/articles/ajout')->with('rubs',$rub);

    }

    
    public function editerArticles(Request $request){
        $parameters =$request->except('_token');

        Article::create($parameters);
        return redirect()->route('listeArticlesAdmin');

        
    }

}
