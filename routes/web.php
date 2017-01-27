<?php
// Route::get('/', function () {
//     return view('welcome');
// });

//Halaman Index
Route::get('/','HomeController@index');//tampil halaman Indek utama

//halaman siswa
Route::group(['prefix' => '/siswa'], function () {
	Route::get('','SiswaController@siswa');//tampil Halaman Siswa
	Route::get('/create','SiswaController@create');//tampil Halaman create
	Route::post('/create','SiswaController@store');//simpan Halaman create
	Route::get('/detail/{id}','SiswaController@show');//tampil Detail Siswa
	Route::get('/edit/{id}','SiswaController@edit');//tampil sebelum edit Siswa
	Route::put('/update/{id}','SiswaController@update');//proses edit Siswa
	Route::delete('/delete/{id}','SiswaController@destroy');//hapus Siswa
});

//halaman matapelajaran
Route::group(['prefix' => '/mapel'], function () {
	Route::get('','MapelController@mapel');//tampil Halaman Siswa
	Route::get('/create','MapelController@create');//tampil Halaman create
	Route::post('/create','MapelController@store');//simpan Halaman create
	Route::get('/detail/{id}','MapelController@show');//tampil Detail Siswa
	Route::get('/edit/{id}','MapelController@edit');//tampil sebelum edit Siswa
	Route::put('/update/{id}','MapelController@update');//proses edit Siswa
	Route::delete('/delete/{id}','MapelController@destroy');//hapus Siswa
});


//membuat form pencarian
Route::get('/cari', 'CariController@index');;

// Route::group(['prefix' => '/search'], function () {
// 	Route::get('','CariController@cari');
// 	Route::get('/hasil', 'CariController@hasil');
// });




