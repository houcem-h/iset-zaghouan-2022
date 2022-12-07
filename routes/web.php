<?php

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/listings', function () {
    return view('listings', [
        "heading" => "Latest News",
        "listing" => News::all()
    ]);
});

Route::get('/news/{id}', function ($id) {
    return view('news', [
        "news" => News::find($id)
    ]);
});

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('etablissement', 'ISET Zaghouan')
        ->header('departement', 'departement IT');
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ' . $postId . ' Comment ' . $commentId;
});

Route::get('/posts/{id}', function ($x) {
    // dd($x);
    //ddd($x);
    return 'Post ' . $x;
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return "Search for " . $request->name . " from " . $request->city;
});
