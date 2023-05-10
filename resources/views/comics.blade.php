@php
    $features = [
        [
            'icon' => '/resources/img/features/buy-comics-digital-comics.png',
            'text' => 'Digital Comics',
        ],
        [
            'icon' => 'resources/img/features/buy-comics-merchandise.png',
            'text' => 'DC Merchandise',
        ],
        [
            'icon' => 'resources/img/features/buy-comics-subscriptions.png',
            'text' => 'Subscription',
        ],
        [
            'icon' => 'resources/img/features/buy-comics-shop-locator.png',
            'text' => 'Comics Shop Locator',
        ],
        [
            'icon' => 'resources/img/features/buy-dc-power-visa.svg',
            'text' => 'DC Power Visa',
        ],
    ];
@endphp

@extends('layouts.app')

@section('page.main')
    <section class="jumbo">
    </section>
    <section class="comics-area">
        <div class="container">
            <section class="comics-list">
                <div class="series">
                    <div class="primary-button">CURRENT SERIES</div>
                </div>
                <div>
                    @foreach ($comics as $comic)
                    <a href="{{ route('comic', ['index' => $loop->index]) }}">{{ $comic['title'] }}
                        <div class="comics-item">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                            <h5>{{ $comic['title'] }}</h5>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="primary-button">LOAD MORE...</div>
            </section>

        </div>
        <section class="features">
            <div class="container">
                @foreach ($features as $feature)
                <div class="feature">
                        <img src="{{ Vite::asset($feature['icon']) }}" alt="{{ $feature['text'] }}">
                        <h4>{{ $feature['text'] }}</h4>
                    </div> 
                @endforeach
            </div>
        </section>
    </section>
    {{-- <MainFeatures></MainFeatures>  --}}
@endsection