@extends('layouts.app')

{{-- @section('title')
{{ $listing['title'] }}
@endsection --}}

{{-- @section('pagename')
<a class="navbar-brand" href="{{ url('/') }}">Listing Details</a>
@endsection --}}

@section('content')
    @if (session('AddListing'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('AddListing') }}
        </div>
    @endif
    <h3>{{ $listing['title'] }}</h3>
    <p>{{ $listing['description'] }}</p>
@endsection
