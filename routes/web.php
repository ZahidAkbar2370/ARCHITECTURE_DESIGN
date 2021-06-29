<?php

use Illuminate\Support\Facades\Route;

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

Route::get("admin-view-categorey","Admin\CategoreyController@index");
Route::get("admin-add-categorey","Admin\CategoreyController@create");
Route::post("admin-save-categorey","Admin\CategoreyController@store");
Route::get("admin-delete-categorey/{id}","Admin\CategoreyController@destroy");
Route::get("admin-edit-categorey/{id}","Admin\CategoreyController@edit");
Route::post("admin-update-categorey/{id}","Admin\CategoreyController@update");
Route::get("admin-categorey-unapprove/{id}","Admin\CategoreyController@unapprove");
Route::get("admin-categorey-approve/{id}","Admin\CategoreyController@approve");


Route::get("admin-view-product","Admin\ProductController@index");
Route::get("admin-add-product","Admin\ProductController@create");
Route::post("admin-save-product","Admin\ProductController@store");
Route::get("admin-delete-product/{id}","Admin\ProductController@destroy");
Route::get("admin-edit-product/{id}","Admin\ProductController@edit");
Route::post("admin-update-product/{id}","Admin\ProductController@update");
Route::get("admin-product-unapprove/{id}","Admin\ProductController@unapprove");
Route::get("admin-product-approve/{id}","Admin\ProductController@approve");




Route::get("admin-view-review","Admin\ReviewController@index");
Route::get("admin-add-review","Admin\ReviewController@create");
Route::post("admin-save-review","Admin\ReviewController@store");
Route::get("admin-delete-review/{id}","Admin\ReviewController@destroy");
Route::get("admin-review-unapprove/{id}","Admin\ReviewController@unapprove");
Route::get("admin-review-approve/{id}","Admin\ReviewController@approve");




Route::get("admin-add-social-link","Admin\SocialController@create");
Route::post("admin-update-social-link","Admin\SocialController@update");


Route::get("admin-view-messages","Admin\MessageController@index");
Route::get("admin-delete-message/{id}","Admin\MessageController@destroy");








Route::get('contact-us', function () {
    return view('App/contact_us');
});
Route::get("contact-us","HomeController@contact_us");
Route::post("save-contact-us-message","HomeController@save_message");

Route::get("home","HomeController@index");
Route::get("cartegorey-detail/{id}","HomeController@product_by_categorey");
Route::get("my-projects","HomeController@my_projects");
Route::get("project-detail/{id}","HomeController@project_detail");
Route::get("reviews","HomeController@reviews");