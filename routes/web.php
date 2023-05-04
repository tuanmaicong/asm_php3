<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','TrangChuController@index');

Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);
Route::get('/product',"ProductController@index");
Route::middleware(['auth'])->group(function (){
    //danh mục
    Route::get('/test',"DanhmucController@index")->name('route_BackEnd_NguoiDung_index');
    Route::get('/test/detail/{id}',"DanhmucController@detail")->name('route_BackEnd_NguoiDung_detail');
    Route::match(['get','post'],'/test/add','DanhmucController@add')->name('route_BackEnd_NguoiDung_add');
    Route::post('/test/detail/{id}',"DanhmucController@update")->name('route_BackEnd_NguoiDung_update');
    Route::get('/test/delete/{id}', 'DanhmucController@destroy')->name('route_BackEnd_NguoiDung_delete');
    //khóa học
    Route::get('/khoahoc',"KhoaHocController@index")->name('route_BackEnd_KhoaHoc_index');
    Route::match(['get','post'],'/khoahoc/add','KhoaHocController@add')->name('route_BackEnd_khoahoc_add');
    Route::get('/khoahoc/detail/{id}',"KhoaHocController@detail")->name('route_BackEnd_KhoaHoc_detail');
    Route::post('/khoahoc/detail/{id}',"KhoaHocController@update")->name('route_BackEnd_KhoaHoc_update');
    Route::get('/khoahoc/delete/{id}', 'KhoaHocController@destroy')->name('route_BackEnd_KhoaHoc_delete');
    //lớp
    Route::get('/lop',"LopController@index")->name('route_BackEnd_Lop_index');
    Route::match(['get','post'],'/lop/add','LopController@add')->name('route_BackEnd_Lop_add');
    Route::get('/lop/detail/{id}',"LopController@detail")->name('route_BackEnd_Lop_detail');
    Route::post('/lop/detail/{id}',"LopController@update")->name('route_BackEnd_Lop_update');
    Route::get('/lop/delete/{id}', 'LopController@destroy')->name('route_BackEnd_Lop_delete');
    //giảng viên
    Route::get('/giangvien',"GiangVienController@index")->name('route_BackEnd_giangvien_index');
    Route::match(['get','post'],'/giangvien/add','GiangVienController@add')->name('route_BackEnd_giangvien_add');
    Route::get('/giangvien/detail/{id}',"GiangVienController@detail")->name('route_BackEnd_giangvien_detail');
    Route::post('/giangvien/detail/{id}',"GiangVienController@update")->name('route_BackEnd_giangvien_update');
    Route::get('/giangvien/delete/{id}', 'GiangVienController@destroy')->name('route_BackEnd_giangvien_delete');
    //user
    Route::get('/nguoidung',"UserController@index")->name('route_BackEnd_User_index');
    Route::match(['get','post'],'/nguoidung/add','UserController@add')->name('route_BackEnd_User_add');
    Route::get('/nguoidung/detail/{id}','UserController@detail')->name('route_BackEnd_User_detail');
    Route::post('/nguoidung/update/{id}','UserController@update')->name('route_BackEnd_User_update');
    Route::get('/nguoidung/delete/{id}', 'UserController@destroy')->name('route_BackEnd_User_delete');
    //hoc vien
    Route::get('/hocvien',"HocVienController@index")->name('route_BackEnd_hocvien_index');
    Route::match(['get','post'],'/hocvien/add','HocVienController@add')->name('route_BackEnd_hocvien_add');
    Route::get('/hocvien/detail/{id}','HocVienController@detail')->name('route_BackEnd_hocvien_detail');
    Route::post('/hocvien/update/{id}','HocVienController@update')->name('route_BackEnd_hocvien_update');
    Route::get('/hocvien/delete/{id}', 'HocVienController@destroy')->name('route_BackEnd_hocvien_delete');
    //dang ky
    Route::get('/dangky',"DangKyController@index")->name('route_BackEnd_dangky_index');
    Route::match(['get','post'],'/dangky/add','DangKyController@add')->name('route_BackEnd_dangky_add');
    Route::get('/dangky/detail/{id}','DangKyController@detail')->name('route_BackEnd_dangky_detail');
    Route::post('/dangky/update/{id}','DangKyController@update')->name('route_BackEnd_dangky_update');
    Route::get('/dangky/delete/{id}', 'DangKyController@destroy')->name('route_BackEnd_dangky_delete');
    //danh gia
    Route::get('/danhgia',"DanhGiaController@index")->name('route_BackEnd_danhgia_index');
      Route::match(['get','post'],'/danhgia/add','HocVienController@add')->name('route_BackEnd_danhgia_add');
    Route::get('/danhgia/delete/{id}', 'DanhGiaController@destroy')->name('route_BackEnd_danhgia_delete');
});


