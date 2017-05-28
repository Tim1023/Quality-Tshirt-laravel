<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});


Route::bind('category', function($category){
	return App\Category::find($category);
});

Route::bind('supplier', function($supplier){
	return App\Supplier::find($supplier);
});

Route::bind('user', function($user){
	return App\User::find($user);
});

Route::bind('order', function($order){
	return App\User::find($order);
});

Route::get('/', [

	'as'	=>	'home',
	'uses'	=>	'StoreController@index'

]);

Route::get('product/{slug}', [

	'as'	=>	'product-detail',
	'uses'	=>	'StoreController@show'

]);

/*
| ----------------------
| cart  
|-----------------------
*/

Route::get('cart/show',[
	'as'	=>	'cart-show',
	'uses'	=>	'CartController@show'
]);

Route::get ('cart/add/{product}',[
	'as'	=>	'cart-add',
	'uses'	=>	'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as'	=>	'cart-delete',
	'uses'	=>	'CartController@delete'		
]);

Route::get('cart/trash',[
	'as'	=>	'cart-trash',
	'uses'	=>	'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}',[
	'as'	=>	'cart-update',
	'uses'	=>	'CartController@update'
]);

Route::get('order-detail', [
	'middleware'	=>	'auth',
	'as'			=>	'order-detail',
	'uses'			=>	'CartController@orderDetail'
]);

// Authentication routes...
Route::get('auth/login', [
	'as'	=>	'login-get',
	'uses'	=>	'Auth\AuthController@getLogin'		
]);

Route::post('auth/login', [
	'as'	=>	'login-post',
	'uses'	=>	'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [ 
	'as'	=>	'logout', 
	'uses'	=>	'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
	'as'	=>	'register-get',
	'uses'	=>	'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as'	=>	'register-post',
	'uses'	=>	'Auth\AuthController@postRegister'
]);


/*
|___________________________________________________| 
|Paypal.											|	
|___________________________________________________|
*/                        
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));

Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));

/*******************************Authentication Section*******************************/
		/*********************************
		|---------------------------------|
		|--------------ADMIN--------------|
		|---------------------------------|
		**********************************/
Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function()
{		
		Route::get('home', function(){
			return view('admin.home');
		});

		Route::resource('category', 'CategoryController');

	Route::resource('supplier', 'SupplierController');


	Route::resource('product', 'ProductController');

		Route::resource('user', 'UserController');

		/***********************************
		|-----------------------------------|
		|------------- Cart -------------|
		|-----------------------------------|
		************************************/
		Route::get('orders', [
		    'as' 	=> 'admin.order.index',
		    'uses'  => 'OrderController@index'
		]);
		Route::post('order/get-items',[
			'as'	=>	'admin.order.getItems',	
			'uses'	=>	'OrderController@getItems'
		]);
	Route::post('update', array(
		'as'   => 'admin.order.update',
		'uses' => 'OrderController@update'
	));
		Route::get('order/{id}',[
			'as'	=> 'admin.order.destroy',
			'uses'	=>	'OrderController@destroy'
		]);

});
/*******************************End Authentication Section*******************************/






















