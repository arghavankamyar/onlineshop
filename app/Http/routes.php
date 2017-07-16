<?php
Route::auth();
Route::get('/','HomeController@index');
Route::get('about', 'AboutController@index');
Route::get('contact', 'ContactController@index');
Route::post('contact','ContactController@validator');
Route::resource('admin/product','ProductController');

Route::group(['prefix'=>'product'],function(){
    Route::get('brand/{id}/{brand}',['as'=>'brand','uses'=>'BrandController@index']);
    Route::get('{product}/{id}','SingleProductController@index');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('productslist','ListController@productList');
    Route::get('brandlist','ListController@brandList');
    Route::resource('messages','MessageController');
    Route::resource('users','UserController');
    Route::resource('brand','BrandListController');
    Route::get('comments','CommentsController@index');
    Route::post(' comments','CommentsController@manage');
});

Route::get('/serach' , ['as'=>'search','uses'=>'SearchController@search']);
