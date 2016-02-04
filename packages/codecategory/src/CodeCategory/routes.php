<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 30/01/2016
 * Time: 19:37
 */

/*
 *['middleware' => 'web'] cria o csrf e outros grupos de mildwere veio no 5.2
 */
Route::group(['prefix' => 'admin/categories', 'as' => 'admin.categories.',
               'namespace' => 'CodePress\CodeCategory\Controllers','middleware' => 'web'], function(){
   Route::get('',['uses'=> 'AdminCategoriesController@index', 'as' => 'index']);
   Route::get('/create',['uses'=> 'AdminCategoriesController@create', 'as' => 'create'] );
   Route::post('/store',['uses'=> 'AdminCategoriesController@store', 'as' => 'store'] );

});