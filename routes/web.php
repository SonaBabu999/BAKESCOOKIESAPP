<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\placeorder\feedbackController;


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
Auth::routes(['reset'=> false]);
Route::get('/home', 'HomeController@index')->name('home');

 
// Route::group(['middleware' => 'prevent-back-history'],function(){
	
  Auth::routes();
	Route::get('/home', 'HomeController@index');


Route::get('/management',function (){
  return view('management.index');
});



  Route::get('/feedback', function () {
    return redirect('management');
  });
  Route::get('/management', function () {
    return view('home');
  });
  Route::get('/management', function () {
    return redirect('home');
  });

Route::resource('/management/category', 'management\categoryController');

Route::resource('/management/menu', 'management\menuController');
Route::get('/feedback', 'management\feedbackController@create');
Route::get('/management/feedback', 'management\feedbackController@index');
Route::post('/ReadFeedback', 'management\feedbackController@store');

Route::get('/placeorder', 'placeorder\placeorderController@index');
Route::get('/catmenu/{id}', 'placeorder\placeorderController@menu');
Route::post('/add_to_cart','placeorder\placeorderController@addToCart');
Route::get('/cartlist','placeorder\placeorderController@cartList');
Route::get('/removecart/{id}','placeorder\placeorderController@removeCart');
Route::get('/ordernow','placeorder\placeorderController@orderNow');
Route::post('/orderplace','placeorder\placeorderController@orderPlace');
       
Route::get('/payment','placeorder\placeorderController@custpay');
Route::post('/paymentportal','placeorder\placeorderController@cpayportal');
Route::get('/paysuccess','placeorder\placeorderController@psuccess');
      
Route::get('/placeorder', 'placeorder\placeorderController@index');
Route::get('/placeorder/getMenuFromCategory/{cat_id}', 'placeorder\placeorderController@getMenuFromCategory');
  
Route::get('/report', 'reportController@index');
Route::get('/report/show', 'reportController@show');
Route::get('/report/show/excel', 'reportController@export');
    
Route::get('/management/bookings', 'reportController@viewb'); 
// });



