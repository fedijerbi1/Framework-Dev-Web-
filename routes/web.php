<?php
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\ContactController; 
Route::get('/', function () {
    return view('activites');
});
Route::get('/home/{nom}/{prenom}', [WelcomeController::class, 'index'])->name('home.index')->where('nom', '[A-Za-z]+')->where('prenom', '[A-Za-z]+');
Route::get('/home/controller/{n?}', [WelcomeController::class, 'home'])->name('home.controller')->where('n', '[1-9]');

Route::get('/home',function () { 
    return view ("welcome");
})->name('home');
Route::get('/contact', function () {
    return "<h1>Contact</h1>";
})->name('contact');
Route::get('/{id}', function ($id) {
    return "<h1>Page n° $id </h1>";
})->name('merci')->where('id', '[0-9]');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contacts.store');