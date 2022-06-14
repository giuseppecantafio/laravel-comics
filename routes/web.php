<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/comics', function () {
    $navElms = [
        [
          "name" => "Character",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "Comics",
          "link" => "",
          "active" => true,
        ],
        [
          "name" => "Movies",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "Tv",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "Games",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "Collectibles",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "Videos",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "Fans",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "News",
          "link" => "",
          "active" => false,
        ],
        [
          "name" => "Shop",
          "link" => "",
          "active" => false,
        ],
    ];
    $cardsElms =  [
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX',
      'price' => '$19.99',
      'series' => 'Action Comics',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01',
      'price' => '$3.99',
      'series' => 'American Vampire 1976',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb',
      'price' => '$16.99',
      'series' => 'Aquaman',
      'type' => 'graphic novel',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76',
      'price' => '$2.99',
      'series' => 'Batgirl',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ',
      'price' => '$3.99',
      'series' => 'Batman',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ',
      'price' => '$2.99',
      'series' => 'Batman Beyond',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8',
      'price' => '$3.99',
      'series' => 'Batman/Superman',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk',
      'price' => '$4.99',
      'series' => 'Batman/Superman Annual',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8',
      'price' => '$5.99',
      'series' => 'Batman: The Joker War Zone',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY',
      'price' => '$6.99',
      'series' => 'Batman: Three Jokers',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX',
      'price' => '$4.99',
      'series' => 'Batman: White Knight Presents: Harley Quinn',
      'type' => 'comic book',
    ],
    [
      'thumb' => 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq',
      'price' => '$16.99',
      'series' => 'Catwoman',
      'type' => 'graphic novel',
    ]
  ];
  $footerTopElms = [
    [
      'immagine' => './img/buy-comics-digital-comics.png',
      'testo' => 'Digital comics',
    ],
    [
      'immagine' => './img/buy-comics-merchandise.png',
      'testo' => 'Dc merchandise',
    ],
    [
      'immagine' => './img/buy-comics-shop-locator.png',
      'testo' => 'Subscription',
    ],
    [
      'immagine' => './img/buy-comics-subscriptions.png',
      'testo' => 'Comic shop locator',
    ],
    [
      'immagine' => './img/buy-dc-power-visa.svg',
      'testo' => 'Dc power Visa',
    ]
  ];
  $footerMidElms = [
      'dcComics' => [
    [
      'testo' => 'Characters',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Comics',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Movies',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'TV',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Games',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Videos',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'News',
      'link' => '',
      'active' => false,
    ],
  ],
  'shop' => [
    [
      'testo' => 'Shop DC',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Shop DC Collectibles',
      'link' => '',
      'active' => false,
    ],
  ],
  'dc' => [
    [
      'testo' => 'Terms of Use',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Privacy Policy(New)',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Ad choices',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Advertising',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Jobs',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Subscriptions',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Talent Workshops',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'CPSC Certificates',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Ratings',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Shop Help',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'Contact Us',
      'link' => '',
      'active' => false,
    ],
  ],
  'sites' => [
    [
      'testo' => 'DC',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'MAD Magazine',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'DC Kids',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'DC Universe',
      'link' => '',
      'active' => false,
    ],
    [
      'testo' => 'DC Power Visa',
      'link' => '',
      'active' => false,
    ],
  ],
  ];
  $footerBotElms = [
    [
      'piattaforma' => 'facebook',
      'immagine' => './img/footer-facebook.png',
    ],
    [
      'piattaforma' => 'twitter',
      'immagine' => './img/footer-twitter.png',
    ],
    [
      'piattaforma' => 'youtube',
      'immagine' => './img/footer-youtube.png',
    ],
    [
      'piattaforma' => 'pinterest',
      'immagine' => './img/footer-pinterest.png',
    ],
    [
      'piattaforma' => 'periscope',
      'immagine' => './img/footer-periscope.png',
    ],
  ];

  $array = [];
    array_push( $array, $navElms);
    array_push( $array, $cardsElms);
    array_push( $array, $footerTopElms);
    array_push( $array, $footerMidElms);
    array_push( $array, $footerBotElms);

 return view('comics', ['dati' => $array]);
    // return view('comics', ['datiNav' => $navElms], ['datiMain' => $cardsElms], ['datiFooter' => $footerTopElms]);
});
