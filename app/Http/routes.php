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
// Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
Route::pattern('id', '[0-9]+');
Route::get('news/{id}', 'ArticlesController@show');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

if (Request::is('admin/*'))
{
    require __DIR__.'/admin_routes.php';
}
// });
//前台路由
Route::group(['namespace'=>'Home'],function(){
	Route::resource('/','HomeController@index');
});
// Route::group(['namespace'=>'Home/about'],function(){
//     echo 1111;
// });
		 