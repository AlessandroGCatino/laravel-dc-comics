@extends('layouts.basic')

@section('title', 'DC Comics | Home')


<?php
    
    $ctaElements = [
                    [
                        "icon" => Vite::asset('resources/img/buy-comics-digital-comics.png'),
                        "text" => "digital comics"
                    ],
                    [
                        "icon" => Vite::asset('resources/img/buy-comics-merchandise.png'),
                        "text" => "dc merchandise"
                    ],
                    [
                        "icon" => Vite::asset('resources/img/buy-comics-subscriptions.png'),
                        "text" => "subscription"
                    ],
                    [
                        "icon" => Vite::asset('resources/img/buy-comics-shop-locator.png'),
                        "text" => "comic shop locator"
                    ],
                    [
                        "icon" => Vite::asset('resources/img/buy-dc-power-visa.svg'),
                        "text" => "dc power visa"
                    ]
    ];
    $footerNavs = [
                    [
                        "name" => "DC Comics",
                        "elements" => [
                        "characters",
                        "comics",
                        "movies",
                        "tv",
                        "games",
                        "videos",
                        "news"
                        ]
                    ],
                    [
                        "name" => "shop",
                        "elements" => [
                        "shop DC",
                        "shop DC collectibles"
                        ]
                    ],
                    [
                        "name" => "dc",
                        "elements" => [
                        "terms of use",
                        "privacy policy (new)",
                        "ad choices",
                        "advertising",
                        "jobs",
                        "subscriptions",
                        "talent workshops",
                        "CPSC certificates",
                        "ratings",
                        "shop help",
                        "contact us"
                        ]
                    ],
                    [
                        "name" => "sites",
                        "elements" => [
                        "DC",
                        "MAD magazine",
                        "DC kids",
                        "DC universe",
                        "DC power visa"
                        ]
                    ]
    ];
    $socials = [
                [
                    "name" => "facebook",
                    "source" => Vite::asset('resources/img/footer-facebook.png')
                ],
                [
                    "name" => "twitter",
                    "source" => Vite::asset('resources/img/footer-twitter.png')
                ],
                [
                    "name" => "youtube",
                    "source" => Vite::asset('resources/img/footer-youtube.png')
                ],
                [
                    "name" => "pinterest",
                    "source" => Vite::asset('resources/img/footer-pinterest.png')
                ],
                [
                    "name" => "periscope",
                    "source" => Vite::asset('resources/img/footer-periscope.png')
                ]
            ]
?>

@section('content')
<main>
    <div class="backContent">
        
        <div class="container p-5 d-flex flex-wrap">
        <h3>current series</h3>
        @foreach ($comics as $singleComic)
            <div class="singleCard d-flex flex-column gap-2">
                <figure>
                    <img src="<?= $singleComic["thumb"] ?>" alt="">
                </figure>
                <span> <?= $singleComic["series"] ?> </span>
            </div>
        @endforeach
        </div>
        <button class="btn btn-primary">load more</button>
    </div>
</main>
<div class="CtaUser">
    <div id="ctaBack">
        <div class="container">
            <ul class="d-flex align-items-center justify-content-between py-4">
                @foreach ($ctaElements as $cta)
                    <li class="d-flex justify-content-center align-items-center gap-2 p-2">
                        <figure>
                            <img src="<?= $cta["icon"] ?>" alt="">
                        </figure>
                        <span class="text-uppercase">
                            <?= $cta["text"] ?>
                        </span>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
@endsection

@section("footer")

<div id="heroesBack">
    <div class="container">
        <div class="left-column col-4">
            @foreach ($footerNavs as $singleRow)
            <div>
                <h3 class="text-uppercase">{{ $singleRow["name"] }}</h3>
                <ul class="d-flex flex-column">
                    @foreach ($singleRow["elements"] as $element)
                        
                        <li class="text-capitalize">
                        <a href="#"> <?= $element ?> </a>
                        </li>
                    @endforeach
                </ul>
            </div>
                
            @endforeach
            {{-- <div v-for="(singleRow, index) in footerNavs" :key="index">
                <h3 class="text-uppercase">{{ singleRow.name }}</h3>
                <ul class="d-flex flex-column">
                    <li v-for="(element) in singleRow.elements"
                    class="text-capitalize">
                        <a href="#"> {{ element }} </a>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="right-column col-6">
            <figure>
            </figure>
        </div>
    </div>
</div>
<div class="social">
    <div class="container">
        <div class="d-flex col-3">
            <a href="#" class="text-uppercase"> sign-up now!</a>
        </div>
        <div class="d-flex gap-3">
            <h3 class="text-uppercase">follow us</h3>
            @foreach ($socials as $element)
                <figure>
                    <img src="<?= $element["source"] ?>" alt="<?= $element["name"] ?>">
                </figure>
            @endforeach
        </div>
    </div>
</div>

@endsection

