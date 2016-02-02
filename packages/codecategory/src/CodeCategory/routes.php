<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 30/01/2016
 * Time: 19:37
 */

Route::group(['prefix' => 'admin/categories', 'namespace' => 'CodePress\CodeCategory\Controllers'], function(){
   Route::get('','AdminCategoriesController@index');
});