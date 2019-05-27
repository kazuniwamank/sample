<?php

use App\Link;
use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/login',function () {
    return view('/login');
});

Route::get('/', function () {
    $links = App\Link::all();
    return view('welcome', ['links' => $links]);
});

Route::get('/submit', function () {
    return view('/submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);
    $link = tap(new App\Link($data))->save();
    return redirect('/');
});

Route::get('/question','XxxquestionController@index');
Route::post('/question','XxxquestionController@registe');


Route::get('/answer',function () {
    return view('/answer');
});
/*
Route::get('/answer', function  (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();
    return view('answer');
});
*/

//↓
Route::prefix('user')->middleware(['auth'])->group(function(){

    Route::get('/', 'User\HomeController@index'); // ログイン直後のページ
 /*   Route::get('/submit', function () {
        return view('/submit');
    });
*/
});
