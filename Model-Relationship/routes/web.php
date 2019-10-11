<?php

Route::get('/', function () {
   
    $user = factory(App\User::class)->create();

    $user->phone()->create([
        'phone'=> '111-222-5453'
    ]);

});

Route::get('products','ProductController@product');
Route::get('test','QueryBuilderController@TestQuery');
Route::get('employees','Employee_Department_Controller@employee');
Route::get('department','Employee_Department_Controller@department');
Route::get('equi_join','Employee_Department_Controller@equi_join');

//image uploading task

Route::get('home','ImageController@home');

Route::get('create','ImageController@create');
Route::post('store','ImageController@store');
Route::get('show','ImageController@show');
