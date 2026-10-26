<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function create () {
        return view('contact');
    }

    function store (Request $request) {
        // Do something with the collected data, e.g., save it to the database 
        // For example, you could use the following code to save the data to a database:
        // Contact::create($tab); 
        // Or, if you want to use the request data directly:
        // Contact::create($request->all());
        // For demonstration purposes, let's just return the received data as a response 
        // $req -> all() will return all the input data as an associative array  
        // $request->input('name') will return the value of the 'name' input field 
        // $request->input('email') will return the value of the 'email' input field 
        // ['name' => $request->input('name'), 'email' => $request->input('email')]; 
        // You can also validate the input data before processing it 
        //$request->validate([
        //    'name' => 'required|string|max:255',
        //    'email' => 'required|email|max:255',
        //]);
        return "Details received: Name - " . $request->name . ", Email - " . $request->email;
    }
}
