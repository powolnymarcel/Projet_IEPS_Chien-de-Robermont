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


// ROUTES POUR L'ACCUEIL
Route::get('/',[
    'as'=>'accueil',
    'uses' =>'AccueilController@index']);
//************************AVEC UN VIEW CREATOR POUR AVOIR LA VUE AVEC LES VARIABLES RUBRIQUES
View::creator('Rubriques.menu', function($view)
{
    $view->with('rubriques', Rubrique::where('menu','=',1)->get());
});
//************************AVEC UN VIEW CREATOR POUR AVOIR LA VUE AVEC LES VARIABLES medias
View::creator('accueil', function($view2)
{
    $view2->with('medias', Media::all());
});
 // **********************************************************************************ROUTES CONCERNANT LA PARTIE ADMINISTRATION

//***************************AFFICHE LE DEASHBOARD********************
Route::get('/admin',[
    'as'=>'accueilAdmin',
    'uses' =>'Admin\ArticlesController@index']);
//***************************LISTE LES ARTICLES********************
Route::get('/admin/listeArticles',[
    'as'=>'listeArticlesAdmin',
    'uses' =>'Admin\ArticlesController@listeArticles']);
//***************************AJOUTE 1 ARTICLE********************
Route::any('/admin/ajoutArticle',[
    'as'=>'ajoutArticle',
    'uses' =>'Admin\ArticlesController@ajoutArticle']);
//***************************EDITE UN  ARTICLE********************
Route::any('/admin/editerArticle/{slug}',[
    'as'=>'editerArticle',
    'uses' =>'Admin\ArticlesController@editerArticle']);
//***************************AFFICHE UN ARTICLE********************
Route::get('/admin/uniqueArticle/{rubrique}/{slug}',[
    'as'=>'uniqueArticle',
    'uses' =>'Admin\ArticlesController@uniqueArticle']);
//***************************AFFICHE UN ARTICLE DANS LA BDD********************
Route::any('/admin/ajoutArticleDB',[
    'as'=>'ajoutArticleDB',
    'uses' =>'Admin\ArticlesController@ajoutArticleDB']);
//***************************SUPPRIME UN ARTICLE********************
Route::get('/admin/supprimerArticle/{slug}',[
    'as'=>'supprimerArticle',
    'uses' =>'Admin\ArticlesController@supprimerArticle']);
//***************************UPLOAD 1 MEDIA DANS LA GALLERIE********************
Route::get('/admin/upload',[
    'as'=>'uploadPhoto',
    'uses' =>'Admin\UploadController@index']);
//***************************LISTE LES MEDIA DE LA GALLERIE********************
Route::get('/admin/upload/liste',[
    'as'=>'listePhoto',
    'uses' =>'Admin\UploadController@listePhoto']);
//**************************AJOUTE 1 MEDIA DANS LA GALLERIE********************
Route::post('/admin/upload/add',[
    'as'=>'AjoutPhoto',
    'uses' =>'Admin\UploadController@uploadFiles']);
//***************************AFFICHE 1 MEDIA DE LA GALLERIE********************
Route::get('/admin/uniquePhoto/{id}',[
    'as'=>'uniquePhoto',
    'uses' =>'Admin\UploadController@uniquePhoto']);
//***************************SUPPRIME 1 MEDIA DE LA GALLERIE********************
Route::get('/admin/supprimerPhoto/{slug}',[
    'as'=>'supprimerPhoto',
    'uses' =>'Admin\UploadController@supprimerPhoto']);
//***************************MODIFIE 1 MEDIA DE LA GALLERIE********************
Route::any('/admin/editerPhoto/{slug}',[
    'as'=>'editerPhoto',
    'uses' =>'Admin\UploadController@editerPhoto']);

