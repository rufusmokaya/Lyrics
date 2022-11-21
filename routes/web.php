<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LyricsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SongController;


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

//  Route::get('/', function () {
//     return view('search');
// });

Route::get('/home', [HomeController::class, 'index']);


Route::get('/',          'LyricsController@search');
Route::get('song/{id}',  'LyricsController@lyric');

Route::resource('artists', 'ArtistController');
Route::resource('songs',   'SongController');

