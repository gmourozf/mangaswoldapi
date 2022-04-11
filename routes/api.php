<?php

use App\Http\Controllers\DessinateurController;
use App\Http\Controllers\MangaController;
use App\Models\Dessinateur;
use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/manga/{id}','MangaController@show');

/*retourne la liste de tous les mangas*/

Route::get('/manga','MangaController@index');

// renvoie la liste de tous les mangas d'un genre

Route::get('/manga/genre/{id}','MangaController@getMangasGenre');

/* renvoie la liste de tous les dessinateurs */

Route::get('/dessinateur', 'DessinateurController@index' );

/* renvoie la liste de tous les scenaristes */

Route::get('/scenariste', 'ScenaristeController@index' );

// renvoie tous les commentaires un manga
Route::get('/manga/commentaire/{id}', 'CommentaireController@getCommentairesManga' );

// renvoie la liste des genres de manga

Route::get('/genre','GenreController@index');


// renvoie les informations d'un lecteur en fonction deson id
Route::get('/lecteur/{id}', 'ProfilController@show');

//ajoute un dessinateur dans la base
Route::post('/dessinateur', 'DessinateurController@store');

// mise à jour d'un dessinateur
Route::put('/dessinateur', 'DessinateurController@update');

// supprimer un dessinateur

Route::delete('/dessinateur/{id}', 'DessinateurController@delete');

//ajout d'un manga
Route::post('/manga','MangaController@store' );

//mise à jour d'un manga
Route::put('/manga' ,'MangaController@update');

//suppression d'un manga
Route::delete('/manga/{id}', 'MangaController@delete');



//creation d'un commentaire
Route::post('/commentaire','CommentaireController@store');

// mise a jour d'un commentaire
Route::put("/commentaire",'CommentaireController@update');

//suppression d'un commentaire

Route::delete('commentaire/{id}', 'CommentaireController@delete' );











