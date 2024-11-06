<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ControllerHome extends Controller
{
    public function home()
    {
        $animes = Http::get('https://api.jikan.moe/v4/anime')->json('data');

        return view('home-page', ['animes' => $animes]);
    }



    public function show($id)
    {
      $anime = Http::get('https://api.jikan.moe/v4/anime/' . $id )->json('data');
         
      return view('show', ['anime' => $anime]);
    }
    public function person(){
        return view('person');
        
    }
}
