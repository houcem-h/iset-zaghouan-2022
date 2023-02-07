<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
//--------------------Listing Routes----------------------------------------
// Route::get('/listings', [ListingController::class, 'index'])->middleware('auth'); // use auth middleware
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');
Route::get('/listings/{id}', [ListingController::class, 'show']);

//-------------- an other way to use middleware
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/listings', [ListingController::class, 'index']);
//     Route::get('/listings/{id}', [ListingController::class, 'show']);
// });


//--------------------Company Routes----------------------------------------
// Route::get('/companies', [CompanyController::class, 'index']);
// Route::get('/companies/{id}', [CompanyController::class, 'show']);
// Route::get('/companies/create', [CompanyController::class, 'create']);
// Route::post('/companies', [CompanyController::class, 'store']);
// Route::get('/companies/{id}/edit', [CompanyController::class, 'edit']);
// Route::put('/companies', [CompanyController::class, 'update']);
// Route::delete('/companies/{id}', [CompanyController::class, 'destroy']);
// ---------------- this line bellow replaces all the lines above
Route::resource('companies', CompanyController::class);


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
