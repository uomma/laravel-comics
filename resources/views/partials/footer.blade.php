@php
    $dcComicsLinks = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];
    $shopLinks = ['Shop DC', 'Shop DC Collectibles'];
    $dcLinks = ['Terms Of Use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    $sitesLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
    
    $socialIcons = [
        'facebook' => [
            'name' => 'facebook',
            'img' => 'resources/img/social-icons/footer-facebook.png',
        ],
        'twitter' => [
            'name' => 'twitter',
            'img' => 'resources/img/social-icons/footer-twitter.png',
        ],
        'youtube' => [
            'name' => 'youtube',
            'img' => 'resources/img/social-icons/footer-youtube.png',
        ],
        'pinterest' => [
            'name' => 'pinterest',
            'img' => 'resources/img/social-icons/footer-pinterest.png',
        ],
        'periscope' => [
            'name' => 'periscope',
            'img' => 'resources/img/social-icons/footer-periscope.png',
        ]
    ];
@endphp

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="links">
                <div class="left">
                    <div class="link-list">
                        <h3>DC COMIC</h3>
                        <ul>
                            @foreach ($dcComicsLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="link-list">
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ($shopLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="link-list">
                        <h3>DC</h3>
                        <ul>
                            @foreach ($dcLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="link-list">
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ($sitesLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
        </div>
    </div>
    <section>
        <div class="container">
            <a href="#">SIGN-UP NOW!</a>
            <div class="social">
                <h4>FOLLOW US</h4>
                <ul>
                    @foreach ($socialIcons as $socialIcon)
                        <li>
                            <img src="{{ Vite::asset($socialIcon['img']) }}" alt="{{ $socialIcon['name'] }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</footer>