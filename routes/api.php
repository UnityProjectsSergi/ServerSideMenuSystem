<?php
Route::prefix("v1")->group(function(){
    Route::get("CheckConnection","Api\\v1\\CheckConection@CheckConection")->name("api.v1.checkConnection");
    Route::get("gameobj","GameObjectController@index");
    Route::get("slot",'SlotMController@index');
    Route::get("gameSlotResume","GameSlotResumeController@index");
    Route::get("GetGameData","Api\\v1\\TestApi@GetGameData")->name("api.v1.getgamemdata");
});
/* Route::prefix("v2")->group(function(){
    Route::get("gameobj","GameObjectController@index");
    Route::get("slot/{id}",'SlotMController@show');
    Route::get("gameSlotResume","GameSlotResumeController@index");
    
}); */
Route::post('login', 'AuthController@login')->name('auth.login');
Route::post('register', 'AuthController@register')->name('auth.register');

//Route::post('passord/email','')

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('profile', 'AuthController@profile')->name('auth.profile');
    Route::get('logout','AuthController@logout')->name('auth.logout');
    Route::resource('users', 'UserController')->except(['edit', 'create']);
    Route::resource('roles', 'RoleController')->except(['edit', 'create']);
    Route::resource('clients', 'ClientController')->except(['edit', 'create']);
});

//Route::get("test",'Test@test')->name("api.test");

//Route::post("SetGlobalGameData",'Test@SetGlobalGameData')->name("api.setglobalgamedata");
//sssssssssssss


