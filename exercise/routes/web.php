<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return "Hello Friends";
    return view('welcome', [
        "title" => "WelcomePage"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "HomePage",
        "name" => "Daniel",
        "email" => "danielaprillio@gmail.com",
        "line" => "daniel_aprillio"
    ]);
});

Route::get('/project', [ProjectController::class,'project']);

Route::get('/project/{code}', [ProjectController::class,'showProject']);

Route::get('/contact', function () {
    // return view('contact');
    return view('contactWithLayout', [
        "title" => "ContactPage",
        "name" => "Daniel",
        "email" => "danielaprillio@gmail.com",
        "line" => "daniel_aprillio"
    ]);
});
