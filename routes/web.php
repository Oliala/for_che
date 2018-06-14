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


Route::get('/places_all', 'PlacesController@place_show_all')->name('places_all');
Route::get('/places_seeings', 'PlacesController@place_seeings')->name('places_seeings');
Route::get('/places_hotels', 'PlacesController@place_hotels')->name('places_hotels');
Route::get('/places_food_drinks', 'PlacesController@place_food_drinks')->name('places_food_drinks');
Route::get('/places_fun', 'PlacesController@place_fun')->name('places_fun');

Route::get('/places_add',function () {return view('place.place_add');})->name('places_add')->middleware('auth');
Route::post('/places_add_save', 'PlacesController@postPlaceAdd')->name('places_add_save')->middleware('auth');

Route::get('/place_index/{id?}', 'PlacesController@place_index')->name('place_index');
Route::get('/dashboard_places','PlacesController@getDashboard')->name('dashboard');



Route::get('/dashboard','PostController@getDashboard')->name('dashboard')->middleware('auth');
Route::post('/create_post', 'PostController@postCreatePost')->name('post.create')->middleware('auth');
Route::get('/delete-post/{post_id}','PostController@getDeletePost')->name('post.delete')->middleware('auth');


Route::get('/city_map', function () {
    return view('citymap');})->name('city_map');

Route::post('/ajax-save-like', 'LikeController@saveLike')->name('ajax.save-like');
Route::post('/ajax-save-dislike', 'LikeController@saveDislike')->name('ajax.save-dislike');
