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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',function(){
    return 'Hello '. request('name');
});

// Route::get('user/{name}',function(){
//     return 'Hello '. request('name');
// });

Route::get('/user/{user}', fn ($user) => "My name is {$user}")->whereAlphaNumeric('user');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return "My id is {$id} and my name is {$name}";
})->whereNumber('id')->whereAlpha('name');

Route::prefix('posts')->group(function(){
    Route::get('create', fn() => 'Create new Post');
    Route::get('edit', fn() => 'Edit Post');
    Route::get('{title}', fn($title) => 'Post: '.$title);
});

// Route::get('/home', fn() => 'Home')->name('home');
// Route::get('/about', fn() => 'About')->name('about');
// Route::get('/contact', fn() => 'Contact')->name('contact');

Route::get('/home', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/gallery', fn () => view('gallery'));