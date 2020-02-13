<?php



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'auth'], function(){

	Route::get('/login',[
		'as'	=> 'login',
		'uses'	=> 'AuthController@login'
	]);
	Route::post('/login',[
		'as'	=> 'login_check',
		'uses'	=> 'AuthController@login_check'
	]);
	Route::get('/register',[
		'as'	=> 'register',
		'uses'	=> 'AuthController@register'
	]);
	Route::post('/register',[
		'as'	=> 'register_check',
		'uses'	=> 'AuthController@register_check'
	]);
});

Route::group(['prefix'=> 'user'], function(){
	Route::get('/home',[
		'as'	=> 'user_home',
		'uses'	=> 'UserController@user_home'
	]);
	Route::get('/logout',[
		'as'	=> 'user_logout',
		'uses'	=> 'UserController@user_logout'
	]);

});
