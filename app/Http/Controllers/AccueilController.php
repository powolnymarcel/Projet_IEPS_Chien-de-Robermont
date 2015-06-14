<?php namespace App\Http\Controllers;
use App\Rubrique;
use App\Article;

class AccueilController extends Controller {

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


    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
// AFFICHE LE SITE  FRONT
    public function index()
    {
        $rubriques=Rubrique::with('articles')->where('menu','=',1)->get();

        $articleAccueil=Article::find(1)->where('rubrique_id','=',1)->first();
         return view('accueil')
                ->with('rubriques',$rubriques)
                ->with('articleAccueil',$articleAccueil);


    }


}
