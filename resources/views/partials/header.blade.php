@php
    $links = [
        'characters' => [
            'text' => 'Characters',
            'destination' => '#',
        ],
        'comics' => [
            'text' => 'Comics',
            'destination' => '#',
        ],
        'movies' => [
            'text' => 'Movies',
            'destination' => '#',
        ],
        'tv' => [
            'text' => 'Tv',
            'destination' => '#',
        ],
        'games' => [
            'text' => 'Games',
            'destination' => '#',
        ],
        'collectibles' => [
            'text' => 'Collectibles',
            'destination' => '#',
        ],
        'videos' => [
            'text' => 'Videos',
            'destination' => '#',
        ],
        'fans' => [
            'text' => 'Fans',
            'destination' => '#',
        ],
        'news' => [
            'text' => 'News',
            'destination' => '#',
        ],
        'shop' => [
            'text' => 'Shop',
            'destination' => '#',
        ],
    ];
@endphp

<div class="container">
    <header>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="main-logo" class="main-logo">
        <nav>
            @foreach ($links as $link)
            <a href="{{ $link['destination'] }}">{{ $link['text'] }}</a>
            @endforeach
        </nav>
    </header>
</div>