<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Product;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', fn () => view('home'));
// Route::get('/about', fn () => view('about'));
// Route::get('/gallery', fn () => view('gallery'));

// Route::get('/data', function () {
//     return view('datatable', [
//         'products' => Product::get(),

//     ]);

// });

Route::get('/data', [PageController::class, 'dataProduct'])->name('datatable');
//Route::get('/' , [DataTableController::class, 'index'])->name('datatable.index');

//Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/', WelcomeController::class);
Route::get('/home', HomeController::class);
Route::get('/about', [PageController::class, 'about']);
Route::get('/gallery', [PageController::class, 'gallery']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);
//Route::post('users/create', [UserController::class, 'store'])->name('users.store');
//Route::post('users/{id}/update', [UserController::class, 'update'])->name('users.update');
//Route::delete('users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('products', [ProductController::class, 'index']);


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



// Route::get('users', function () {
//     $users = [
//         [
//             'name'      => 'John Doe',
//             'email'     => 'john@mail.com',
//             'twitter'   => 'johndoe'
//         ],
//         [
//             'name'      => 'Tailor Otwell',
//             'email'     => 'tailor@mail.com',
//             'twitter'   => 'tailorott'
//         ],
//         [
//             'name'      => 'Steve Schoger',
//             'email'     => 'steve@mail.com',
//             'twitter'   => 'steveschoger',
//         ],
//     ];

//     return view('users.index', [
//         'users' => $users,
//     ]);
// });

Route::get('/dashboard', fn () => 'dashboard')
->name('dashboard')
->middleware('kmkey');  

