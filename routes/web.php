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


Route::get('/catalog', 'CatalogController@viewCatalog' );

Route::get('/panier', 'PanierController@viewPanier');


Route::get('/header', function () {
    return view('header_oikos');
});

Route::get('/footer', function () {
    return view('footer_oikos');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/product','ProductController@viewProduct');
