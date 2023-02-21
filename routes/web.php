<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController as ComicController;

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

// Route::get('/', function () {
//     $comics = config('comics');
//     return view('comics', compact('comics'));
// }) ->name('comics');

Route::get('/', [ComicController::class, 'index']) ->name('comics');

Route::get('/comic/{id}', function($id){
    $comics = config('comics');

    foreach($comics as $comic){
        if($comic['title'] == $id){
            $single = $comic;
        }
    }

    return view('singlecomic', compact('single'));

}) ->name('singlecomic');
