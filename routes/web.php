<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/voie', function () {
    return view('voie', [
        'name' => request('name')
    ]);
});*/

/*Route::get('/posts/{post}', function ($post) {

    $posts = [
        'my-first-ascent' => "Voici la première voie que j'ai grimpé",
        'my-second-ascent' => "Voici la deuxième voie que j'ai grimpé"
    ];

    if(! array_key_exists($post, $posts)){
        abort(404, "Cette voie n'est pas encore réalisé");
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});*/



//laracast laravel from scratch

//Routes

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/voies', 'VoiesController@store');

Route::get('/voies/create', 'VoiesController@create');

Route::get('/voies', 'VoiesController@show');

Route::get('/falaises', 'FalaisesController@show');

Route::get('/psicoblocs', 'PsicoblocsController@show');

Route::get('/blocs', 'BlocsController@show');

Route::get('/voies/{id}', 'VoiesController@ascent')->name('voies.ascent');

Route::get('/blocs/{id}', 'BlocsController@ascent');

Route::get('/falaises/{id}', 'FalaisesController@ascent');

Route::get('/psicoblocs/{id}', 'PsicoblocsController@ascent');


//edit de voies

Route::get('/voies/{id}/edit', 'VoiesController@edit')->name('voies.edit');

Route::get('/blocs/{id}/edit', 'VoiesController@edit');

Route::get('/falaises/{id}/edit', 'VoiesController@edit');

Route::get('/psicoblocs/{id}/edit', 'VoiesController@edit');


// update de voies

Route::put('/voies/{id}', 'VoiesController@update');

// delete de voie

Route::delete('/voies/{id}', 'VoiesController@delete');