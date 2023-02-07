@extends('layouts.app')

{{-- @section('pagename')
<a class="navbar-brand" href="{{ url('/') }}">Listings</a>
@endsection --}}

@section('content')

{{-- affichage avec PHP natif --}}
<h1><?php //echo $heading ?></h1>
<ul>
    <?php //foreach ($listing as $item) : ?>
        {{-- <li> --}}
            <h3><?php //echo $item['title'] ?></h3>
            <p><?php //echo $item['content'] ?></p>
        {{-- </li> --}}
    <?php //endforeach; ?>
</ul>

{{-- affichage avec la syntaxe de Blade --}}
<a type="button" class="btn btn-primary float-end" href="{{ route('listings.create') }}"><i class="bi bi-plus-square"></i> New</a>
<h1>{{ $heading }}</h1>
@if (count($listings) == 0)
<p>Il y a aucun éléments dans la liste</p>

@else
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($listings as $item)
            {{-- <li>
                <h3>
                    <a href="/listings/{{ $item['id'] }}">
                        {{ $item['title'] }}
                    </a>
                </h3>
                <p>{{ $item['description'] }}</p>
            </li> --}}
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                            <p class="card-text">{{ $item['title'] }}</p>
                        <div>
                            <i class="bi bi-buildings"></i> {{ $item->company->name }}
                        </div>
                        <div>
                            <i class="bi bi-pin-map"></i> {{ $item['job_location'] }}
                        </div>
                        <div class="py-2">
                            @php
                                $tags = explode(" ",$item['tags']);
                            @endphp
                            @foreach ($tags as $tag)
                                <span class="badge bg-info">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/listings/{{ $item['id'] }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-search">View</i></a>
                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil-square">Edit</i></button>
                        </div>
                        <small class="text-muted">{{ date_format($item['created_at'],"d/m/Y"); }}</small>
                        </div>
                    </div>
                    </div>
                </div>
        @endforeach
    </div>
@endif
{{-- pagination links --}}
{{-- {{ $listings->links() }} --}}


{{-- @unless (count($listing) == 0)
<ul>
    @foreach ($listing as $item)
        <li>
            <h3> {{ $item['title'] }}</h3>
            <p>{{ $item['content'] }}</p>
        </li>
    @endforeach
</ul>

@else
<p>Il y a aucun éléments dans la liste</p>

@endif --}}
@endsection
