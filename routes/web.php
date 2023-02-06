<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

//--------------------OLD EXAMPLES----------------------------------------
// Route::get('/listings', function () {
//     return view('listings', [
//         "heading" => "Latest News",
//         "listing" => Listing::all()
//     ]);
// });

// Route::get('/listings/{id}', function ($id) {
//     return view('news', [
//         "news" => Listing::find($id)
//     ]);
// });

//--------------------NEW SYNTAX----------------------------------------
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/{id}', [ListingController::class, 'show']);


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
