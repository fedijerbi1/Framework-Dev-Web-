<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function create () {
        return view('contact');
    }

    function store (Request $request) {
        // Handle the form submission
    }
}
