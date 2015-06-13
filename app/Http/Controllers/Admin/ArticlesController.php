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
        public function __construct()
        {
            $this->middleware('auth');
        }
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
       // Affichage de la pagge DASHBOARD
    public function index()
    {
        return view('Admin/accueil' );
    }

    // AFFICHAGE DE LA LISTE DES ARTICLES
    public function listeArticles()
    {
        $articles=Article::all();
        return view('Admin/articles/liste')->with('articles',$articles);
    }

    //SUPPRESSION D'UN ARTICLE
    public function supprimerArticle($slug)
    {
        $article= Article::where('slug','=',$slug)->first();
        $article->delete();
        return redirect()->route('listeArticlesAdmin')->with('success','Article supprimé');
    }

    // AFFICHAGE DU FORMULAIRE D'AJOUT D'UN ARTICLE
    public function ajoutArticle()
    {
        $rubriques= Rubrique::where('menu','=',1)->get();
        return view('Admin/articles/ajout')->with('rubriques',$rubriques);
    }

    // AFFICHAGE DU FORMULAIRE D'AJOUT D'UN ARTICLE
    public function uniqueArticle($id)
    {
        $article= Article::where('id','=',$id)->get();
        return view('Admin/articles/unique')->with('article',$article);
    }



    // AJOUT D'UN ARTICLE DANS LA B.D.
    public function ajoutArticleDB(Request $request)
    {
        //Methode fénéant ;)
        $parameters =$request->except('_token');
        Article::create($parameters);

       // Méthode à la Mano ...
       // $articles = new Article();
       // $articles->titre= $parameters['titre'];
       // $articles->slug= $parameters['slug'];
       // $articles->texte= $parameters['texte'];
       // $articles->photo= $parameters['photo'];
       // $articles->texte= $parameters['texte'];
       // $articles->rubrique_id= $parameters['rubrique_id'];
       // $articles->save();
        return redirect()->route('listeArticlesAdmin')->with('success','Article ajouté.');
    }

}
