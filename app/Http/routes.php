<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route :: get('Hello-World', function() {
	return 'Hello World';
	});

/*
Route::get("pengguna/{pengguna}", function($pengguna)
	{
	return "Hello World dari pengguna $pengguna";
	});
*/

Route::get('kelasd2/framework/{mhs?}', function ($mhs="Anonim")
	{
		return "Selamat Datang $mhs";
	});

Route:: get('pengguna','PenggunaController@awal');
Route:: get('pengguna/tambah','PenggunaController@tambah');
Route:: get('pengguna/{pengguna}','PenggunaController@lihat');
Route:: get('pengguna/simpan','PenggunaController@simpan');
Route:: get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route:: get('pengguna/edit/{pengguna}','PenggunaController@update');
Route:: get('pengguna/hapus/{pengguna}','PenggunaController@hapus');



Route:: get('dosen','DosenController@awal');
Route:: get('dosen/tambah','DosenController@tambah');
Route:: get('dosen/{dosen}','DosenController@lihat');
Route:: get('dosen/simpan','DosenController@simpan');
Route:: get('dosen/edit/{dosen}','DosenController@edit');
Route:: get('dosen/edit/{dosen}','DosenController@update');
Route:: get('dosen/hapus/{Dosen}','DosenController@hapus');



Route:: get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route:: get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route:: get('dosen_matakuliah/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');
Route:: get('dosen_matakuliah/simpan','Dosen_Controller@simpan');
Route:: get('dosen_matakuliah/simpan','Dosen_Controller@simpan');
Route:: get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route:: get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route:: get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');





Route:: get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route:: get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route:: get('jadwal_matakuliah/{jadwal_matakuliah}','Jadwal_MatakuliahController@lihat');
Route:: get('jadwal_matakuliah/simpan','Jadwal_Controller@simpan');
Route:: get('jadwal_matakuliah/simpan','Jadwal_Controller@simpan');
Route:: get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@edit');
Route:: get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@update');
Route:: get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','Jadwal_MatakuliahController@hapus');



Route:: get('mahasiswa','MahasiswaController@awal');
Route:: get('mahasiswa/tambah','MahasiswaController@tambah');
Route:: get('mahasiswa/{mahasiswa}','MatakuliahController@lihat');
Route:: get('mahasiswa/simpan','MahasiswaController@simpan');
Route:: get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route:: get('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route:: get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');



Route:: get('matakuliah','MatakuliahController@awal');
Route:: get('matakuliah/tambah','MatakuliahController@tambah');
Route:: get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route:: get('matakuliah/simpan','MatakuliahController@simpan');
Route:: get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route:: get('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route:: get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');



Route:: get('ruangan','RuanganController@awal');
Route:: get('ruangan/tambah','RuanganController@tambah');
Route:: get('ruangan/{ruangan}','RuanganController@lihat');
Route:: get('ruangan/simpan','RuanganController@simpan');
Route:: get('ruangan/edit/{ruangan}','RuanganController@edit');
Route:: get('ruangan/edit/{ruangan}','RuanganController@update');
Route:: get('ruangan/hapus/{ruangan}','RuanganController@hapus');
