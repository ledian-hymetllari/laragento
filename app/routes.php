<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    /** @var Laragento\Cart $cart */
    $cart = App::make('cart');

    $product = Laragento\Product::find(18);

    $cart->addProduct($product);

//
//    $newQuoteItem->
//

//    foreach($quoteItems as $quoteItem){
//        /** @var Laragento\QuoteItem $quoteItem */
//        echo $quoteItem->name;
//        echo "<br />";
//    }

    return View::make('hello');

});

Route::resource('api/v1/products', 'Api\V1\ProductController');
Route::resource('api/v1/categories', 'Api\V1\CategoryController');
Route::resource('api/v1/customers', 'Api\V1\CustomerController');
Route::resource('api/v1/customerAddresses', 'Api\V1\CustomerAddressController');
Route::resource('api/v1/configurations', 'Api\V1\CoreConfigController');