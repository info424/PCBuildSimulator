<?php

use App\Http\Controllers\ContactController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "Home page";
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('contact-controller', [ContactController::class, 'index']);

Route::view('/about-view','contact', ['name' => 'Alex']);

Route::post('/contact-us', function (Request $request) { //ALT + Enter si Simplify FQN ca sa puna sus use
    dd($request->all());

});

Route::get('/user/{id}', function ($id){
    $user = new User();
    $user->name = 'Alex';
    $user->email = 'alex@gmail.com';

    return view('user', ['user' => $user, 'id' => $id]);
})->where('id', '[0-9]+');

Route::redirect('/about-us', '/about-view');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/users', function ($id) {
        echo $id;
    });

    Route::get('/user', function (Request $request) {

    });
});
