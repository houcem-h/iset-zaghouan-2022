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
<h1>{{ $heading }}</h1>
@if (count($listing) == 0)
    <p>Il y a aucun éléments dans la liste</p>

@else
<ul>
    @foreach ($listing as $item)
        <li>
            <h3>
                <a href="/listings/{{ $item['id'] }}">
                    {{ $item['title'] }}
                </a>
            </h3>
            <p>{{ $item['description'] }}</p>
        </li>
    @endforeach
</ul>
@endif

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

