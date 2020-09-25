<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stanza;

class StanzaController extends Controller{
  public function index(){

    $stanze = Stanza::all();

    return view('home', compact('stanze'));
  }

  public function show ($id){
    $stanza = Stanza::findOrFail($id);
    return view('stanza', compact('stanza'));
  }
}
