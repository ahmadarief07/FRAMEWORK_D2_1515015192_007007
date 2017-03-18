<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class MahasiswaController extends Controller
{
     public function awal()
    {
    	return "Hello Ahmad Arifin, kamu adalah mahasiswa FKTI";
    }
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$mahasiswa = new Mahasiswa();
		$mahasiswa-> id = '1';
		$mahasiswa-> name = 'Ahmad Arifin';
		$mahasiswa-> nim = '1515015192';
		$mahasiswa-> alamat = 'Semarang';
		$mahasiswa-> pengguna_id = 'Arief';
		$mahasiswa-> save();
		return "Nama {$mahasiswa->name} telah disimpan";
	}
}
