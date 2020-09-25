<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StanzaController@index') -> name('stanze-index');
