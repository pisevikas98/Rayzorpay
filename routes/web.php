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

Route::get('/', function () {
    return view('welcome');
});
Route::get('my-store', 'razorpay\PaymentController@show_products');

Route::post('pay-success', 'razorpay\PaymentController@pay_success');
Route::post('thank-you', 'razorpay\PaymentController@thank_you');
