<?php

//require_once('App\Geocoder\Mapbox.php');
use App\Geocoder\Mapbox;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/profile', 'UserController@update_avatar');

Route::post('/place_store/', 'PlacesController@store');
Route::post('/place/{id}', 'PlacesController@update');
Route::delete('/place/{id}', 'PlacesController@destroy');
Route::get('/place', 'PlacesController@show')->name('placeshow');

Route::get('/place/coordinates/{name}', function($name) {
    try {
        $mapbox = new Mapbox("pk.eyJ1Ijoib2xpYWxhIiwiYSI6ImNqZWpvenB2ZzNianEyeG83emVpOTVzNDMifQ.-SWlUE7o_M9d2g57tTK1DA");
        $res =$mapbox->geocode("$name, Чернігів")->toString();
        return $res;
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
});

Route::get('/places/{id?}', 'PlacesController@place_info')->name('place');

Route::get('/places_all', 'PlacesController@place_show_all')->name('places_all');
Route::get('/place_index/{id?}', 'PlacesController@place_index')->name('place_index');

Route::post('/create_post', 'PostController@postCreatePost')->name('post.create');
