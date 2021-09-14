<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
//for products.blade.php
Route::get('/', function () {
    $product1 = Product::all();
    return view('products', [ 'products' => $product1]);
});
//for product.blade.php
Route::get('/product/{product}', function ($id) {
    $product = Product::find($id);
    return view('product', ['product' => $product]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/create_product', function () {
    Product::create([
        'product_name' => 'Laptop100',
        'product_desc' => 'This is the 100',
        'price' => '100'
    ]);
});


Route::get('/get_products',function(){
    $products = Product::get();
    return $products;
});