<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/koneksi', function () {
    return view('koneksi');
});





Route::group(['middleware' => ['auth']], function()
{
    Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
    Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
    Route::get('/mahasiswa/formmahasiswa', 'MahasiswaController@formmahasiswa');
    Route::post('/mahasiswa/simpanmahasiswa', 'MahasiswaController@simpanmahasiswa');
    Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');
    Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');
    Route::get('/mahasiswa/hapusmahasiswa/{id}', 'MahasiswaController@hapusmahasiswa');

    Route::get('/user', 'AuthController@user');
    Route::get('/user/formuliruser', 'AuthController@formuliruser');
    Route::post('/user/simpanuser', 'AuthController@simpanuser');
    Route::get('/user/edituser/{id}', 'AuthController@edituser');
    Route::put('/user/updateuser/{id}', 'AuthController@updateuser');
    Route::get('/user/hapususer/{id}', 'AuthController@hapususer');

    Route::get('/logout', 'AuthController@logout');
});
    Route::get('/', 'AuthController@login')->name('login');
    Route::post('/user/ceklogin', 'AuthController@ceklogin');

    Route::get('/registrasi', 'AuthController@registrasi');
    Route::post('/simpanregistrasi', 'AuthController@simpanregistrasi');





  
   


