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
Route::get('/magento-1', 'MVPController@indexMagento1');
Route::get('/magento-2', 'MVPController@indexMagento2');
Route::get('/merchant/register', 'MVPController@indexRegisterMerchant');
Route::post('/merchant/register', 'MVPController@proceedRegisterMerchant');
Route::get('/merchant/unibutton', 'MVPController@indexCreateButton');
Route::post('/merchant/unibutton', 'MVPController@proceedCreateButton');
