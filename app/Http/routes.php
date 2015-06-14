<?php

use App\Rubrique;
use App\Media;

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



Route::get('/',[
    'as'=>'accueil',
    'uses' =>'AccueilController@index']);

View::creator('Rubriques.menu', function($view)
{
    $view->with('rubriques', Rubrique::where('menu','=',1)->get());
});

View::creator('accueil', function($view2)
{
    $view2->with('medias', Media::all());
});


 // ROUTES CONCERNANT LA PARTIE ADMINISTRATION
Route::get('/admin',[
    'as'=>'accueilAdmin',
    'uses' =>'Admin\ArticlesController@index']);

Route::get('/admin/listeArticles',[
    'as'=>'listeArticlesAdmin',
    'uses' =>'Admin\ArticlesController@listeArticles']);

Route::match(['get','post'],'/admin/ajoutArticle',[
    'as'=>'ajoutArticle',
    'uses' =>'Admin\ArticlesController@ajoutArticle']);

Route::match(['get','post'],'/admin/editerArticle/{slug}',[
    'as'=>'editerArticle',
    'uses' =>'Admin\ArticlesController@editerArticle']);


Route::get('/admin/uniqueArticle/{rubrique}/{slug}',[
    'as'=>'uniqueArticle',
    'uses' =>'Admin\ArticlesController@uniqueArticle']);

Route::post('/admin/ajoutArticleDB',[
    'as'=>'ajoutArticleDB',
    'uses' =>'Admin\ArticlesController@ajoutArticleDB']);

Route::get('/admin/supprimerArticle/{slug}',[
    'as'=>'supprimerArticle',
    'uses' =>'Admin\ArticlesController@supprimerArticle']);




Route::get('/admin/upload',[
    'as'=>'uploadPhoto',
    'uses' =>'Admin\UploadController@index']);

Route::get('/admin/upload/liste',[
    'as'=>'listePhoto',
    'uses' =>'Admin\UploadController@listePhoto']);

Route::post('/admin/upload/add',[
    'as'=>'AjoutPhoto',
    'uses' =>'Admin\UploadController@uploadFiles']);

Route::get('/admin/uniquePhoto/{id}',[
    'as'=>'uniquePhoto',
    'uses' =>'Admin\UploadController@uniquePhoto']);


