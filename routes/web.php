<?php

use Faker\Guesser\Name;
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

Route::get('/', function () {
    $message = 'Hello Laravel';
    return view('home', compact('message'));
})->name('home');

Route::get('/img1', function () {
    $img1 = 'https://static.vecteezy.com/system/resources/thumbnails/022/660/007/small_2x/generative-ai-illustration-of-gaming-background-abstract-cyberpunk-style-of-gamer-wallpaper-neon-glow-light-of-scifi-fluorescent-sticks-digitally-generated-image-photo.jpeg';
    return view('image1', compact('img1'));
})->name('image1');


Route::get('/img2', function () {
    $img2 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ59oQN0Ecwudpp9b3e9ngFAY0jO1u4igoeEUf_QaOV9DihaBoqOz3gKmT52laBV8aYx8&usqp=CAU';
    return view('image2', compact('img2'));
})->name('image2');

Route::get('/img3', function () {
    $img3 = 'https://static.vecteezy.com/system/resources/thumbnails/022/697/266/small_2x/generative-ai-illustration-of-gaming-background-abstract-cyberpunk-style-of-gamer-wallpaper-neon-glow-light-of-scifi-fluorescent-sticks-digitally-generated-image-photo.jpeg';
    return view('image3', compact('img3'));
})->name('image3');
