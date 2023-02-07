<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
            /* Using the paginate method to limit the number of listings to 9 per page. */
            // "listings" => Listing::paginate(9)
            "listings" => Listing::with('company')->get()
        ]);
    }

    public function show($id)
    {
        return view('listings.show', [
            "listing" => Listing::find($id)
        ]);
    }

    public function create()
    {
        return view('listings.create', [
            "companies" => Company::select('id', 'name')->get()
        ]);
    }

    public function store(Request $request)
    {
        // Listing::create($request->all());
        // alternatively
        $listing = new Listing();
        $listing->title = $request->title;
        $listing->tags = $request->tags;
        $listing->position_number = $request->position_number;
        $listing->job_location = $request->job_location;
        $listing->description = $request->description;
        $listing->company_id = $request->company_id;
        $listing->save();

        return redirect('/listings/' . $listing->id)->with('AddListing', 'New listing added successfully.');;
    }
}
