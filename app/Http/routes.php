<?php

use App\Rubrique;

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

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/', 'AccueilController@index',['as'=>'accueil']);

View::creator('Rubriques.menu', function($view)
{
    $view->with('rubriques', Rubrique::where('menu','=',1)->get());
});

Route::get('/admin',[
    'as'=>'accueilAdmin',
    'uses' =>'Admin\ArticlesController@index']);

Route::get('/admin/listeArticles',[
    'as'=>'listeArticlesAdmin',
    'uses' =>'Admin\ArticlesController@listeArticles']);

Route::get('/admin/ajoutArticle',[
    'as'=>'ajoutArticle',
    'uses' =>'Admin\ArticlesController@ajoutArticle']);


Route::post('/admin/editerArticles',[
    'as'=>'editerArticles',
    'uses' =>'Admin\ArticlesController@editerArticles']);
