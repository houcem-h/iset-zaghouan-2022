<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->only(['index']);
        $this->middleware('auth');
    }

    public function index()
    {
        return view('listings.index', [
            "heading" => "Latest jobs Listing",
            "listings" => Listing::all()
        ]);
    }

    public function show($id)
    {
        return view('listings.show', [
            "listing" => Listing::find($id)
        ]);
    }
}
