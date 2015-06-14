<?php namespace App\Http\Controllers;
use App\Rubrique;
use App\Article;

class AdminController extends Controller {

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
//SECURISE LE CONTROLLER ADMIN
public function __construct(){
    $this->middleware('auth');
}


    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
//AFFICHE L'ACCUEIL ADMIN
    public function index()
    {
       return view('Admin/accueil');
    }


}
