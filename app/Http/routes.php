<?php
Route::get('/',function(){
	return view('auth/login');
});
	Route::get('/customer','CustomerController@index');
	Route::post('/newCustomer','CustomerController@newCustomer');
	Route::get('/getUpdate','CustomerController@getUpdate');
	Route::put('/newUpdate','CustomerController@newUpdate');
	Route::post('/deleteCustomer','CustomerController@deleteCustomer');
// Authentication routes...
// Route::resource('blog', 'BlogController');
Route::get('auth/login',array('as'=>'login','uses'=>'Auth\AuthController@getLogin'));
Route::post('auth/login',array('as'=>'login','uses'=>'Auth\AuthController@postLogin'));
Route::get('auth/logout',array('as'=>'logout','uses'=>'Auth\AuthController@getLogout'));

// // Registration routes...
Route::get('auth/register',array('as'=>'register','uses'=>'Auth\AuthController@getRegister'));
Route::post('auth/register',array('as'=>'register','uses'=>'Auth\AuthController@postRegister'));

Route::group(['middleware'=>'auth'],function(){
	Route::get('/index',array('as'=>'index','uses'=>'AdminController@index'));
	Route::get('/home',array('as'=>'home','uses'=>'AdminController@home'));
	Route::get('/blank',array('as'=>'blank','uses'=>'AdminController@blank'));
	Route::get('/buttons',array('as'=>'buttons','uses'=>'AdminController@buttons'));
	Route::get('/chart',array('as'=>'chart','uses'=>'AdminController@chart'));
	Route::get('/form',array('as'=>'form','uses'=>'AdminController@form'));
	Route::get('/formvalid',array('as'=>'formvalid','uses'=>'AdminController@formvalid'));
	Route::get('/general',array('as'=>'general','uses'=>'AdminController@general'));
	Route::get('/grid',array('as'=>'grid','uses'=>'AdminController@grid'));
	Route::get('/table',array('as'=>'table','uses'=>'AdminController@table'));
	Route::get('/profile',array('as'=>'profile','uses'=>'AdminController@profile'));
	Route::get('/widgets',array('as'=>'widgets','uses'=>'AdminController@widgets'));
	Route::get('/database',array('as'=>'database','uses'=>'AdminController@database'));
	Route::resource('/task', 'TaskController');
	Route::resource('/user', 'UserController');
	Route::resource('/sale', 'SaleController');
    // Route::post('/users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});