<?php

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

    $title = [
        'title' => 'Welcome',
    ];

    return view('main', $title);
});

Route::get('/about', function () {

    $title = [
        'title' => 'About Us',
    ];

    return view('about', $title);
});


Route::get('/contact', function () {

    $title = [
        'title' => 'Contact Us',
        'information' => [
            'Recording',
            'Rehearsal',
            'Guitar Lessons',
            'Drum Lessons',
            'Studio Rental',
            'General Question',
        ],
    ];

    return view('contact', $title);
});

Route::get('/services', function(){

    $title = [
        'title' => 'Services'
    ];

    return view('services', $title);

});

Route::get('/reviews', function(){

$title= [
    'title' => 'Reviews'
];

return view('reviews', $title);

});


Route::post('reviews', 'ReviewsController@store');
