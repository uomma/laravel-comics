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
<main>
    <div class="bg white">
        <div class="container">
            <div class="tag position comic-img">
                <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
            </div>
            <div class="row">
                <div class="col-8 pe-5">
                    <h3>{{$comic['title']}}</h3>
                    <div class="green-banner d-flex justify-content-between">
                        <p>U.S. Price: {{$comic['price']}}</p>
                        <div class="d-flex">
                            <p class="me-3">AVAILABLE</p>
                            <p>Check availability</p>
                        </div>
                    </div>
                    <p class="description">{{$comic['description']}}</p>
                </div>
                <div class="col-4">
                    <h5>ADVERTISEMENT</h5>
                    <div class="ads">
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 d-flex">
                    <div class="talent">
                        <h4>TALENT</h4>
                        <div class="d-flex">
                            Art by: <p class="names">
                                @foreach ($comic['artists'] as $artist)
                                    {{$artist}}
                                @endforeach
                            </p>
                        </div>
                        <div class="d-flex">
                            Written by: <p class="names">
                                @foreach ($comic['writers'] as $writer)
                                    {{$writer}}
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="spec">
                        <h4>SPECS</h4>
                        <div class="d-flex">Series: <p class="series">{{$comic['series']}}</p></div>
                        <div class="d-flex">U.S. Price: <p>{{$comic['price']}}</p></div>
                        <div class="d-flex">On Sale Date: <p>{{$comic['sale_date']}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection