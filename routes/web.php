<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanze-show');
Route::get('/create/stanza', 'StanzaController@create') -> name('stanza-create');
Route::post('/create/stanza', 'StanzaController@store') -> name('stanza-store');
