@extends('layouts.app')

{{-- @section('title')
{{ $listing['title'] }}
@endsection --}}

{{-- @section('pagename')
<a class="navbar-brand" href="{{ url('/') }}">Listing Details</a>
@endsection --}}

@section('content')
    <h3>{{ $listing['title'] }}</h3>
    <p>{{ $listing['description'] }}</p>
@endsection
