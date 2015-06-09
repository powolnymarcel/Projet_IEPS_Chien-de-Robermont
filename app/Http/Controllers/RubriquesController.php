<?php namespace App\Http\Controllers;

use App\Rubriques;

class RubriquesController extends Controller {

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



    public function menu()
    {
        $rubriques=Rubriques::all();
        return view('Rubriques/menu')->with('rubriques',$rubriques);
    }





}