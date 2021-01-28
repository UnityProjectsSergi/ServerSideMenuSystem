<?php

Route::get('/', function () {
    return view('welcome');
});
//Route::get("test",'Test@test')->name("web.test");
//Route::get("GetGameData",'Test@GetGameData')->name("web.getgamedata");
Route::post('login', 'AuthController@login')->name('auth.login');
Route::post('register', 'AuthController@register')->name('auth.register');
/* Route::prefix("v1")->group(function(){
    Route::get("gameobj","GameObjectController@index");
    
}); */