<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;
class Dosen_MatakuliahController extends Controller
{
     public function awal()
    {
    	return "Hello Ahmad Arifin, ini adalah id dosen mata kuliah pilihan kamu";
    }
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen_matakuliah = new Dosen_Matakuliah();
		$dosen_matakuliah-> id = '1';
		$dosen_matakuliah-> dosen_id ='1';
		$dosen_matakuliah-> matakuliah_id = '1';
		$dosen_matakuliah-> save();
		return "{id dosen $dosen_matakuliah->id} telah disimpan";
	}
}
