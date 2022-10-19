<?php

use Illuminate\Support\Facades\Route;
use Pawlox\VideoThumbnail\VideoThumbnail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-thumbnail', function () {
    $test = (new VideoThumbnail)->createThumbnail(
        env("URL_VIDEO", null),
        public_path('files/thumbs/'),
        "test.jpg",
        8
    );

    dump($test);

    return "<img alt='thumbnail foto' src='" . asset('files/thumbs/test.jpg') . "' />";
});
