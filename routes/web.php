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
/* =============HOME============== */

Route::get('/home', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicioESP');
});
/* =================================*/


/* =============ABOUT ME============== */
Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/aboutmeESP', function () {
    return view('aboutmeESP');
});
/* =================================*/


/* =============Contact============== */
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contacto', function () {
    return view('contactESP');
});
/* =================================*/


/* =============RECENTWORK============== */
Route::get('/recentwork', 'RecentFotosController@index', function () {
    return view('recentwork');
});

Route::get('/trabajoreciente', 'RecentFotosESPcontroller@index', function () {
    return view('recentworkESP');
});
/* =================================*/


/* =============URBAN============== */

Route::get('/urban',  'GaleriaController@index', function () {
    return view('urban');
});

Route::get('/urbano',  'urbanESPcontroller@index', function () {
    return view('urbanESP');
});
/* =================================*/

/* =============REFLECTED============== */

Route::get('/reflected', 'ReflectedFotosController@index', function () {
    return view('reflected');
});

Route::get('/vidareflectada', 'reflectedESPcontroller@index', function () {
    return view('reflectedESP');
});


/* =============NEWS============== */

Route::get('/news', 'NewsController@index', function () {
    return view('news');
});

Route::get('/Novedades', 'NewsESPController@index', function () {
    return view('newsESP');
});

/* =================================*/

/* =============Cookies============== */

Route::get('/cookies', function () {
    return view('cookies');
});


/* =================================*/



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
