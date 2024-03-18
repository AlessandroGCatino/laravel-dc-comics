@extends('layouts.basic')

@section('title', 'DC Comics | Home')


<?php
    $comics = [
                [
                    "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
                    "price" => "$19.99",
                    "series" => "Action Comics",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
                    "price" => "$3.99",
                    "series" => "American Vampire 1976",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
                    "price" => "$16.99",
                    "series" => "Aquaman",
                    "type" => "graphic novel",
                ],
                [
                    "thumb" => "https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg",
                    "price" => "$2.99",
                    "series" => "Batgirl",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg",
                    "price" => "$3.99",
                    "series" => "Batman",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg",
                    "price" => "$2.99",
                    "series" => "Batman Beyond",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg",
                    "price" => "$3.99",
                    "series" => "Batman/Superman",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg",
                    "price" => "$4.99",
                    "series" => "Batman/Superman Annual",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg",
                    "price" => "$5.99",
                    "series" => "Batman: The Joker War Zone",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg",
                    "price" => "$6.99",
                    "series" => "Batman: Three Jokers",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg",
                    "price" => "$4.99",
                    "series" => "Batman: White Knight Presents: Harley Quinn",
                    "type" => "comic book",
                ],
                [
                    "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg",
                    "price" => "$16.99",
                    "series" => "Catwoman",
                    "type" => "graphic novel",
                ]
    ];
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

