<?php



Route::get('/', function () {
    return redirect()->route('login');
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
	Route::get('/tracking',[
		'as'	=> 'track_view',
		'uses'	=> 'TrackingController@track_view'
	]);
	Route::post('/tracking',[
		'as'	=> 'track_check',
		'uses'	=> 'TrackingController@track_check'
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
	Route::get('/new',[
		'as'	=> 'user_new',
		'uses'	=> 'DocumentController@user_new'
	]);
	Route::post('/upload-docs',[
		'as'	=> 'upload_docs',
		'uses'	=> 'DocumentController@upload_docs'
	]);
	Route::get('/download-docs',[
		'as'	=> 'download_docs',
		'uses'	=> 'DocumentController@download_docs'
	]);
	Route::get('/pending',[
		'as'	=> 'user_pending',
		'uses'	=> 'UserController@user_pending'
	]);
	Route::get('/incoming',[
		'as'	=> 'user_incoming',
		'uses'	=> 'UserController@user_incoming'
	]);
	Route::get('/forwarded',[
		'as'	=> 'user_forwarded',
		'uses'	=> 'UserController@user_forwarded'
	]);

	Route::get('/accept-file/{id}',[
		'as'	=> 'accept_file',
		'uses'	=> 'UserController@accept_file'
	]);
	Route::get('/forwarding/{tracking_id}',[
		'as'	=> 'forwarding',
		'uses'	=> 'TrackingController@forwarding'
	]);
	Route::post('/forwarding/{tracking_id}',[
		'as'	=> 'forwarding_check',
		'uses'	=> 'TrackingController@forwarding_check'
	]);
	

});
