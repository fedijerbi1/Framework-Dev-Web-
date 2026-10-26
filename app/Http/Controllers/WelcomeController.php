<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index ($nom , $prenom) {
        return view('home', compact('nom', 'prenom'));
    }
    public function home($n = null) 
    {
        if ($n === null) {
            return "<h1>je suis la page Home</h1>";
        }
        else {
        return "<h1>je suis la page Home n°$n</h1>";
        }
    }
}
