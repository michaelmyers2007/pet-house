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

Route::get('/','MainController@fire');


  Route::resource('/animal', 'AnimalController');
  Route::resource('/type','TypeController');
  Route::resource('/item','ItemController');
  Route::resource('/behavior','BehaviorController');
  Route::resource('/accessory','AccessoryController');
  Route::resource('/food','FoodController');
  


  Route::get('/search','TypeController@getsearch');
  Route::get('/find','TypeController@find');

  Route::get('/cat','AccessoryController@cat');
  Route::get('/reptitle','AccessoryController@reptitle');
  Route::get('/bird','AccessoryController@bird');
  Route::get('/fish','AccessoryController@fish');

  Route::get('catfood','FoodController@cat');
  Route::get('reptitlefood','FoodController@reptitle');
  Route::get('birdfood','FoodController@bird');
  Route::get('/fishfood','FoodController@fish');
Auth::routes();
Route::get('/home', 'HomeController@index')
		->name('home')
		->middleware('is_admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/back','MainController@index');

Route::get('/fish','TypeController@fish');
Route::get('/dog','TypeController@dog');
Route::get('/cat','TypeController@cat');
Route::get('/bird','TypeController@bird');
Route::get('/creeper','TypeController@creeper');

Route::get('/fish_food','FoodController@ff');
Route::get('/cat_food','FoodController@cf');
Route::get('/bird_food','FoodController@bf');
Route::get('/dog_food','FoodController@df');
Route::get('/creeper_food','FoodController@creef');


Route::get('/fish_acc','AccessoryController@fa');
Route::get('/cat_acc','AccessoryController@ca');
Route::get('/dog_acc','AccessoryController@da');
Route::get('/bird_acc','AccessoryController@ba');
Route::get('/creeper_acc','AccessoryController@creepera');
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::get('/cart/update/{id}','CartController@update');

Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::get('/acc/{id}','CartController@store');

Route::get('empty',function()
{
  Cart::destroy();
});


Route::get('/detail/{id}', 'TypeController@display')->name('detail');
Route::get('/food_detail/{id}','FoodController@detail')->name('food_detail');
Route::get('/acc_detail/{id}','AccessoryController@detail')->name('acc_detail');
Route::get('/cart/{id}','CartController@cart')->name('cart');
Route::delete('/cart/{id}','CartController@destroy')->name('cart.destroy');

Route::get('/fish_acc','AccessoryController@fish');

Route::get('/test','CartController@test');
