<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Rubrique;
use App\Article;
use Illuminate\Support\Str;
use Input;
use Validator;
use Response;
use App\Media;

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
	*/ //Action qui sécurise tout le controller
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
        //Va chercher tous les élementsio qui ont un champs menu à 1
        $rubriques= Rubrique::where('menu','=',1)->get();

        //Vu que Accueil et contact sont statique
        $articles=Article::where('rubrique_id','!=',6)->where('rubrique_id','!=',5)->where('rubrique_id','!=',1)->get();

        return view('Admin/articles/liste')->with('articles',$articles)->with('rubriques',$rubriques);
    }

    public function editerArticle(Request $request,$slug)
    {
        //va chercher un article unique via le slug
        $article= Article::where('slug','=',$slug)->first();
        //On a besoin de l'entité rubrique pour la liste déroulante
        $rubriques= Rubrique::where('menu','=',1)->get();


        //STOCKAGE PHOTO**************************************************************************************
        if($request->isMethod('post')){
            // GET ALL THE INPUT DATA , $_GET,$_POST,$_FILES.
            $input = Input::all();
            // VALIDATION RULES
            $rules = array(
                'photo' => 'image|max:3000',
            );
            // PASS THE INPUT AND RULES INTO THE VALIDATOR
            $validation = Validator::make($input, $rules);

            // CHECK GIVEN DATA IS VALID OR NOT
            if ($validation->fails()) {
                return Redirect()->to('/')->with('message', $validation->errors->first());
            }

            $file = array_get($input,'photo');
            // SET UPLOAD PATH
            $destinationPath = 'uploads/imagesArticles';
            // GET THE FILE EXTENSION
            $extension = $file->getClientOriginalExtension();
            // RENAME THE UPLOAD WITH RANDOM NUMBER
            $fileName = rand(11111, 99999) . '.' . $extension;
            // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
            $upload_success = $file->move($destinationPath, $fileName);
        //STOCKAGE PHOTO**************************************************************************************
          // AJOUT DES AUTRES CHAMPS DANS LA BASE DE DONNEE
            // TOUS LES CHAMPS SAUF LE TOKEN
            $parameters =$request->except('_token');
            $date= new \DateTime(null);
            $article->titre= $parameters['titre'];
            $article->slug= Str::slug($parameters['titre']. $date->format('dmYhis'));
            $article->texte= $parameters['texte'];
            $article->photo= $fileName;
            $article->rubrique_id= $parameters['rubrique_id'];
            $article->save();
           // REDIRECTION VERS LA VUE AVEC UN MESSAGE FLASH DE SUCCES
            Return redirect()->route('listeArticlesAdmin')->with('success','Article mis à jour.');
        }


        return view('Admin/articles/ajout')->with('article',$article)->with('rubriques',$rubriques);
    }


    //SUPPRESSION D'UN ARTICLE
    public function supprimerArticle($slug)
    {
        //va chercher un article unique via le slug
        $article= Article::where('slug','=',$slug)->first();
        $article->delete();
        // REDIRECTION VERS LA VUE AVEC UN MESSAGE FLASH DE SUCCES
        return redirect()->route('listeArticlesAdmin')->with('success','Article supprimé');
    }

    // AFFICHAGE DU FORMULAIRE D'AJOUT D'UN ARTICLE
    public function ajoutArticle()
    {
        $rubriques= Rubrique::where('menu','=',1)->where('id','!=',5)->get();
        return view('Admin/articles/ajout')->with('rubriques',$rubriques);
    }

    // AFFICHAGE DE l'article UNIQUE
    public function uniqueArticle($rubrique,$slug)
    {
        $rub= Rubrique::where('id','=',$rubrique)->get();
        $article= Article::where('slug','=',$slug)->first();

       // Le where ou le find ... le find n'aura pas de foreach dans la vue alors que le where j'en aurais besoin
        // EX : $article= Article::where('slug','=',$slug)->get();
        return view('Admin/articles/unique')->with('rub',$rub)->with('article',$article);
    }



    // AJOUT D'UN ARTICLE DANS LA B.D.
    public function ajoutArticleDB(Request $request)
    {
        //STOCKAGE PHOTO**************************************************************************************
        $input = Input::all();
        // VALIDATION RULES
        $rules = array(
            'photo' => 'image|max:3000',
        );
        // PASS THE INPUT AND RULES INTO THE VALIDATOR
        $validation = Validator::make($input, $rules);

        // CHECK GIVEN DATA IS VALID OR NOT
        if ($validation->fails()) {
            return Redirect()->to('/')->with('message', $validation->errors->first());
        }

        $file = array_get($input,'photo');
        // SET UPLOAD PATH
        $destinationPath = 'uploads/imagesArticles';
        // GET THE FILE EXTENSION
        $extension = $file->getClientOriginalExtension();
        // RENAME THE UPLOAD WITH RANDOM NUMBER
        $fileName = rand(11111, 99999) . '.' . $extension;
        // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
        $upload_success = $file->move($destinationPath, $fileName);
        //STOCKAGE PHOTO**************************************************************************************

       // TOUS LES CHAMPS SAUF LE TOKEN
        $parameters =$request->except('_token');
        //Methode fénéant ;)
        // Article::create($parameters);

        //Méthode à la Mano ...
        $date= new \DateTime(null);
        $articles = new Article();
        $articles->titre= $parameters['titre'];
        $articles->slug= Str::slug($parameters['titre']. $date->format('dmYhis'));
        $articles->texte= $parameters['texte'];
        $articles->photo= $fileName;
        $articles->rubrique_id= $parameters['rubrique_id'];
        $articles->save();
        return redirect()->route('listeArticlesAdmin')->with('success','Article ajouté.');
    }

}
