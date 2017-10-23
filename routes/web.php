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
    return view('home');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/team', function () {
    return view('team');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/bounty', function () {
    return view('bounty');
});
Route::get('/tokens', function () {
    return view('tokens');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/button', function () {
    return view('button_guide');
});
Route::get('/magento-1', 'MVPController@indexMagento1');
Route::get('/magento-2', 'MVPController@indexMagento2');
Route::get('/merchant/register', 'MVPController@indexRegisterMerchant');
Route::post('/merchant/register', 'MVPController@proceedRegisterMerchant');
Route::get('/merchant/unibutton', 'MVPController@indexCreateButton');
Route::get('/merchant/verified', 'MVPController@merchantVerified');
Route::post('/merchant/unibutton', 'MVPController@proceedCreateButton');
Route::get('/payment/new', 'MVPController@paymentButtonEnterEmail');
Route::post('/payment/new', 'MVPController@proceedPaymentButton');
Route::get('/payment/{id}', 'MVPController@showTransaction')->name('showTransaction');
Route::get('/merchant/updateStatus87561', 'MVPController@showMerchantInfo');
Route::post('/merchant/updateStatus87561', 'MVPController@approveMerchantInfo');
