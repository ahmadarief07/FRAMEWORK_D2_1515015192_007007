<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
class Jadwal_MatakuliahController extends Controller
{
     public function awal()
    {
    	return "Hello Ahmad Arifin, cari jadwal matakuliah kamu disini";
    }
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$jadwal_matakuliah = new Jadwal_Matakuliah();
		$jadwal_matakuliah-> id = '1';
		$jadwal_matakuliah-> mahasiswa_id = '1';
		$jadwal_matakuliah-> ruangan_id = '1';
		$jadwal_matakuliah-> dosen_matakuliah = 'Will';
		$jadwal_matakuliah-> save();
		return "id {$jadwal_matakuliah->id} telah disimpan";
	}
}
