<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get("redirect",[ProductController::class, "/redirect"])->name("redirect");

Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/celebrities', function () {
    return view('celebrities');
});

Route::get('/movie-details', function () {
    return view('movie-details');
});
Route::get('/top-movies', function () {
    return view('top-movies');
});

Route::get('/index-2', function () {
    return view('index-2');
});
Route::get('/', function () {
    return view('index');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //admin redirect route are here
Route::get("/redirect",[AdminController::class,"index"])->name("redirect");



    //this the product route
    Route::get("/movieform",[ProductController::class ,"movieform"])->name("movieform");
    Route::post("/movieform",[ProductController::class ,"create"])->name("moiveform");
    Route::get("/movieTable",[ProductController::class ,"store"])->name("movieTable");

});

// // Product add route are here
// Route::get("/edit",[ProductController::class ,"edit"])->name("edit");
// Route::get("/",[ProductController::class ,"update"])->name("update");
// Route::get("/",[ProductController::class ,"destroy"])->name("destroy");
// proddestroy end route here


// checkout route are here
Route::get("/checkout",[ProductController::class ,"checkout"])->name("checkout");


