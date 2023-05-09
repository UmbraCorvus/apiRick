<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personajesController extends Controller
{
    public function index(){
        $url="https://rickandmortyapi.com/api/character";
        $personajes = json_decode(file_get_contents($url));
        return view('personajes', compact('personajes'));
    }
}
