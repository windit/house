<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'the-loai'], function(){
		Route::get('danh-sach', 'CategoryController@index');

		Route::get('them', 'CategoryController@create');
		Route::post('them', 'CategoryController@store');

		Route::get('sua/{id}', 'CategoryController@edit');
		Route::post('sua/{id}', 'CategoryController@update');

		Route::get('xoa/{id}', 'CategoryController@destroy');
	});

	Route::group(['prefix'=>'tinh-thanh-pho'], function(){
		Route::get('danh-sach', 'CityController@index');

		Route::get('them', 'CityController@create');
		Route::post('them', 'CityController@store');

		Route::get('sua/{id}', 'CityController@edit');
		Route::post('sua/{id}', 'CityController@update');

		Route::get('xoa/{id}', 'CityController@destroy');
	});

	Route::group(['prefix'=>'quan-huyen'], function(){
		Route::get('danh-sach', 'DistrictController@index');

		Route::get('them', 'DistrictController@create');
		Route::post('them', 'DistrictController@store');

		Route::get('sua/{id}', 'DistrictController@edit');
		Route::post('sua/{id}', 'DistrictController@update');

		Route::get('xoa/{id}', 'DistrictController@destroy');
	});

	Route::group(['prefix'=>'xa-phuong'], function(){
		Route::get('danh-sach', 'WardController@index');

		Route::get('them', 'WardController@create');
		Route::post('them', 'WardController@store');

		Route::get('sua/{id}', 'WardController@edit');
		Route::post('sua/{id}', 'WardController@update');

		Route::get('xoa/{id}', 'WardController@destroy');
	});

	Route::group(['prefix'=>'nha'], function(){
		Route::get('danh-sach', 'HouseController@index');

		Route::get('them', 'HouseController@create');
		Route::post('them', 'HouseController@store');

		Route::get('sua/{id}', 'HouseController@edit');
		Route::post('sua/{id}', 'HouseController@update');

		Route::get('xoa/{id}', 'HouseController@destroy');
	});

	Route::group(['prefix'=>'loai-nha'], function(){
		Route::get('danh-sach', 'KindController@index');

		Route::get('them', 'KindController@create');
		Route::post('them', 'KindController@store');

		Route::get('sua/{id}', 'KindController@edit');
		Route::post('sua/{id}', 'KindController@update');

		Route::get('xoa/{id}', 'KindController@destroy');
	});

	Route::group(['prefix'=>'du-an'], function(){
		Route::get('danh-sach', 'ProjectController@index');

		Route::get('them', 'ProjectController@create');
		Route::post('them', 'ProjectController@store');

		Route::get('sua/{id}', 'ProjectController@edit');
		Route::post('sua/{id}', 'ProjectController@update');

		Route::get('xoa/{id}', 'ProjectController@destroy');
	});

	Route::group(['prefix'=>'duong-pho'], function(){
		Route::get('danh-sach', 'StreetController@index');

		Route::get('them', 'StreetController@create');
		Route::post('them', 'StreetController@store');

		Route::get('sua/{id}', 'StreetController@edit');
		Route::post('sua/{id}', 'StreetController@update');

		Route::get('xoa/{id}', 'StreetController@destroy');
	});

	Route::group(['prefix'=>'huong-nha'], function(){
		Route::get('danh-sach', 'TrendController@index');

		Route::get('them', 'TrendController@create');
		Route::post('them', 'TrendController@store');

		Route::get('sua/{id}', 'TrendController@edit');
		Route::post('sua/{id}', 'TrendController@update');

		Route::get('xoa/{id}', 'TrendController@destroy');
	});

	Route::group(['prefix'=>'vai-tro'], function(){
		Route::get('danh-sach', 'RoleController@index');

		Route::get('them', 'RoleController@create');
		Route::post('them', 'RoleController@store');

		Route::get('sua/{id}', 'RoleController@edit');
		Route::post('sua/{id}', 'RoleController@update');

		Route::get('xoa/{id}', 'RoleController@destroy');
	});

	Route::group(['prefix'=>'nguoi-dung'], function(){
		Route::get('danh-sach', 'UserController@index');

		Route::get('them', 'UserController@create');
		Route::post('them', 'UserController@store');

		Route::get('sua/{id}', 'UserController@edit');
		Route::post('sua/{id}', 'UserController@update');

		Route::get('xoa/{id}', 'UserController@destroy');
	});


});

Route::group(['prefix' => 'ajax'], function(){
	Route::get('{idCity}', 'AjaxController@getDistricts');
	Route::get('ward/{idDistrict}', 'AjaxController@getWards');
	Route::get('sd/{idCity}/{idDistrict}', 'AjaxController@getSelectedDistrict');
	Route::get('sw/{idDistrict}/{idWard}', 'AjaxController@getSelectedWard');
	//ajax load kinds
	Route::get('kinds/{idCategory}', 'AjaxController@getKinds');
});

//Route::any('{all?}', 'HouseController@index')->where('all', '(.*)');

Route::get('dang-nhap', 'PagesController@getLogin');
Route::post('dang-nhap', 'PagesController@postLogin');
Route::get('dang-xuat', 'PagesController@getLogout');
Route::get('trang-chu', 'PagesController@index');
Route::get('dang-ky-thanh-vien', 'PagesController@getRegister');
Route::post('dang-ky-thanh-vien', 'PagesController@postRegister');
Route::get('chi-tiet', 'PagesController@detail');


Route::group(['middleware' => 'userLogin'], function(){
	Route::get('dang-tin-rao-nha', 'PagesController@getCreateHouse');
	Route::post('dang-tin-rao-nha', 'PagesController@postCreateHouse');
	Route::get('trang-ca-nhan', 'PagesController@person');
});