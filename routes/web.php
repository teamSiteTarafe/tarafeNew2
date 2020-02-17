<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#=================== Page accueil ==================
Route::get('/','PageHomeController@index')->name('page.index');

// Route::get('/', function () {
//     return view('welcome');
// });

#=================== L'urls connexion and inscription =====================
Route::get('/auth/connexion','ConnexionController@pageConnexion')
	->name('page.connexion');
Route::get('/auth/inscription','InscriptionController@pageInscription')
	->name('page.inscription');
Route::get('/auth/deconnexion','ConnexionController@deconnexion')->name('page.deconnexion');
#====================Les actions (Connexion && Inscription)================
Route::post('/connexion','ConnexionController@connexion')->name('connexion');
Route::post('/inscription','InscriptionController@inscription')->name('inscription');
#========================Compte============================================
Route::get('/compte','CompteController@pageCompte')->name('page.compte');

Route::get('/dao', function () {
	$tb=[
	'lun',
	'mar',
	'mercre',
	'jeu',
	'ven',
	'sam',
	'dim'
];
    return view('pages/dao', compact('tb'));
});
Route::get('/connexion', function () {
    return view('pages/connexion');
});

