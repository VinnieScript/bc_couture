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

Route::get('/','maincontroller@index');
Route::get('/admin','maincontroller@admin');
Route::post('/uploadproduct','maincontroller@uploadproduct');
Route::get("/admin/viewproducts",'maincontroller@viewproducts');
Route::post("/viewselected","maincontroller@viewselected");
Route::get("/viewselect","maincontroller@viewselect");
Route::get("/viewcart","maincontroller@viewcart");

Route::post("/savecart","maincontroller@savecart");
Route::post("/deleteItem","maincontroller@deleteItem");
Route::post('/updateQty','maincontroller@updateQty');
Route::get('/checkout','maincontroller@checkout');
Route::post('/{identifer}/charge','maincontroller@charge');
Route::post('/saveCheckout','maincontroller@saveCheckout');
Route::get('/{blogaddress}/paymentUrl.tc','maincontroller@payment' );
Route::get('/paymentSuccess/{id}','maincontroller@paymentSuccess')->name('success');
Route::get('/paymentFailed/{errormessage}','maincontroller@paymentFailed')->name('failed');
Route::get('/member/loginprofile/', 'maincontroller@login');
Route::post('/checklogin/', 'maincontroller@checklogin');
Route::get('/register/','maincontroller@register');
Route::post('/registerUser/', 'maincontroller@registerUser');
Route::get('/user/profile/{emailaddress}','maincontroller@profile');
Route::get('/admin/approvedelivery/','maincontroller@approve');
Route::post('/updateapprove','maincontroller@updateapprove');
Route::get('/customer/{uniqueid}/approvedrequest/','maincontroller@approvedrequest');
Route::get('/sendmail', 'maincontroller@sendmail');
Route::get('/smscenter', 'maincontroller@smscenter');
Route::post('/getUserNumber','maincontroller@getUserNumber');
