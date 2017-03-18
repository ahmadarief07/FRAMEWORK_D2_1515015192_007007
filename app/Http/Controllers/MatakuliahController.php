<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;
class MatakuliahController extends Controller
{
     public function awal()
    {
    	return "Hello Ahmad Arifin, Ni ni matakuliah yang kamu ambil";
    }
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$matakuliah = new Matakuliah();
		$matakuliah-> id = '1';
		$matakuliah-> title = 'Framework Programming';
		$matakuliah-> keterangan = 'A';
		$matakuliah-> save();
		return "Matakuliah {$matakuliah->title} telah disimpan";
	}
}
