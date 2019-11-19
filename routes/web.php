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

use App\Tracking;
use http\Client\Curl\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/home', 'HomeController@index')->name('home');

//Auth: routes

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('/staff/staffMain', 'HomeController@homeStaff')->name('homeStaff')->middleware('auth:staff'); // home agent lepas dah login //Cara ni kalau pakai view ada data tapi x de layout

Route::get('/staffMain', 'staffController@index')->name('homeStaff')->middleware('auth:staff'); // home agent lepas dah login //Cara ni view ada data and layout.

Route::get('/custMain', 'custController@index')->name('customerAgent')->middleware('auth:customer'); // home guest lepas dah login


//Login User

Route::get('/login/staff', 'Auth\LoginController@showStaffLoginForm')->name('staffLogin');

Route::get('/login/customer', 'Auth\LoginController@showCustomerLoginForm')->name('customerLogin');

Route::post('/login/staff', 'Auth\LoginController@staffLogin');

Route::post('/login/customer', 'Auth\LoginController@customerLogin')->name('loginOnCustomer');


//Register User

Route::get('/register/staff', 'Auth\RegisterController@showStaffRegisterForm')->name('staffRegister');

Route::get('/register/customer', 'Auth\RegisterController@showCustomerRegisterForm')->name('customerRegister');

Route::post('/register/staff', 'Auth\RegisterController@createStaff');

Route::post('/register/customer', 'Auth\RegisterController@createCustomer')->name('registerOnCustomer');


//View & Manage Customer User Account

Route::get('/custViewAcc/{id}', 'custController@detail')->name('custView')->middleware('auth:customer');

Route::get('/custUpdateAcc/{id}/update', 'custController@edit')->name('custViewUpdate')->middleware('auth:customer');

Route::patch('/custUpdateAccount/{id}', 'custController@update')->name('custUpdate')->middleware('auth:customer');


//View & Manage Staff User Account

Route::get('/staffViewAcc/{id}', 'staffController@detail')->name('staffView')->middleware('auth:staff');

Route::get('/staffUpdateAcc/{id}/update', 'staffController@edit')->name('staffViewUpdate')->middleware('auth:staff');

Route::patch('/staffUpdateAccount/{id}', 'staffController@update')->name('staffUpdate')->middleware('auth:staff'); //route for update


//Create Equipment & Manage Equipment

Route::get('/create/equipment', 'equipController@showCreateEquipmentForm')->name('createEquipment');

Route::post('/create/equipment', 'equipController@store')->name('createOnequipment');

Route::get('/view/equipment', 'equipController@show')->name('equipView');

Route::get('/equipView', 'custController@show')->name('equipViewCustomer');

Route::get('/update/equipment/{id}', 'equipController@edit')->name('equipViewUpdate');

Route::patch('/update/equipmentAcc/{id}', 'equipController@update')->name('equipUpdate');

Route::delete('/delete/equipment/{id}', 'equipController@destroy')->name('equipDestroy');


//Add To Chart Function

Route::get('/shopping-cart-add', function () {
    Cart::add(1, 'Macbook Pro', 2900, 1, array());

    foreach (Cart::getContent() as $product){
        echo "Id: $product->id</br>";
        echo "Name: $product->name</br>";
        echo "Price $product->price</br>";
        echo "Quantity $product->quantity</br>";
    }
});

Route::get('/shopping-cart-update/{quantity}', function ($quantity) {
    Cart::add(1, 'Macbook Pro', 2900, 1, array());

    Cart::update(1,[
        'quantity' => $quantity
    ]);

    foreach (Cart::getContent() as $product){
        echo "Id: $product->id</br>";
        echo "Name: $product->name</br>";
        echo "Price: $product->price</br>";
        echo "Quantity: $product->quantity</br>";
    }
});

Route::get('/view/booking', 'bookController@index')->name('bookHome');

Route::post('/cart-add/booking', 'bookController@addCart')->name('cart.add');

Route::get('/cart-checkout/booking', 'bookController@cart')->name('cart.checkout');

Route::post('/cart-clear/booking', 'bookController@clear')->name('cart.clear');

Route::post('/cart/test', 'bookController@testCheckout')->name('test.checkout');

Route::get('/viewBooking/{id}', 'bookController@edit')->name('viewBooking')->middleware('auth:customer');

Route::get('/update/booking/{id}', 'bookController@updateBooking')->name('updateBooking');

Route::patch('/update/bookingAcc/{id}', 'bookController@update')->name('bookUpdate');

Route::get('/invoice/booking/{id}', 'bookController@show')->name('book.invoice')->middleware('auth:customer');

Route::get('/staffView/booking', 'bookController@detail')->name('detailBook');

Route::get('/staffDetailView/booking/{id}', 'bookController@detailView')->name('staffBookview');

Route::get('/update/date/{id}', 'bookController@editDate')->name('dateViewUpdate');

Route::patch('/update/dateAcc/{id}', 'bookController@updateDate')->name('dateUpdate');

Route::get('/detail/booking/{id}', 'bookController@detailBooking')->name('book.detail')->middleware('auth:customer');



//Create, View and Manage Tracking
Route::get('/staffView/tracking', 'trackController@index')->name('detailTrack');

Route::get('/create/tracking/{id}', 'trackController@create')->name('createTracking');

Route::post('/create/tracking/{id}', 'trackController@store')->name('createOneTracking');

Route::get('/update/tracking/{id}', 'trackController@edit')->name('trackViewUpdate');

Route::patch('/update/trackingAcc/{id}', 'trackController@update')->name('trackUpdate');

Route::get('/view/tracking', 'trackController@show')->name('viewTracking');

Route::any('/search/tracking','trackController@search')->name('searchTrack');

//Route::get ( '/', function () {
//    return view ( 'tracking.search' );
//} );
//
//Route::any ( '/search', function () {
//    $q = Input::get ( 'q' );
//    $user = Tracking::where ( 'book_id', 'LIKE', '%' . $q . '%' )->get ();
//    if (count ( $user ) > 0)
//        return view ( 'tracking.search' )->withDetails ( $user )->withQuery ( $q );
//    else
//        return view ( 'tracking.search' )->withMessage ( 'No Details found. Try to search again !' );
//} );
