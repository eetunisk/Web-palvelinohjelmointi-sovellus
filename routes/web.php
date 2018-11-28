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

Route::get('/lasku', function () {
    return view('lasku');
});

Route::post('/lasku/submit', 'LaskuController@submit');

Route::get('/laskut', 'LaskutController@listaa');

Route::get('/laskut/pdf', 'LaskutController@pdf');

Route::get('poistaLasku/{id}', 'PoistaLaskuController@poista');

Route::get('lasku/poistaLasku/{id}', 'PoistaLaskuController@poista');

Route::get('/poistettu', 'LaskutController@listaa');

Route::get('tarkasteleLaskua/{id}', 'LaskunTarkasteluController@tarkastele');

Route::get('lasku/tarkasteleLaskua/{id}', 'LaskunTarkasteluController@tarkastele');

Route::get('/tarkasteleLaskua/pdf/{id}', 'LaskunTarkasteluController@pdf');

Route::get('/', 'EventController@index')->name('events.index');

Route::post('events', 'EventController@addEvent')->name('events.add');
