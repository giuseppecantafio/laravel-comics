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
    return view('comics', ['datiNav' => $navElms]);
});
