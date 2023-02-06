<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings', [
            "heading" => "Latest News",
            "listing" => Listing::all()
        ]);
    }

    public function show($id)
    {
        return view('news', [
            "news" => Listing::find($id)
        ]);
    }
}
