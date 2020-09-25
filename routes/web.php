<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanze-show');
