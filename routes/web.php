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

Route::get('/', function () {
    return view('products');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/create_products', function () {
    Product::create([
        'product_name' => 'Laptop2',
        'product_desc' => 'This is very nice nice product.',
        'price' => '10000'
    ]);
});
