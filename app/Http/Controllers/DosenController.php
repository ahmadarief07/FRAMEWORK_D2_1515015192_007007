<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
class DosenController extends Controller
{
     public function awal()
    {
    	return "Hello Ahmad Arifin, ini adalah dosen kamu";
    }
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new Dosen();
		$dosen-> id = '1';
		$dosen-> name = 'Will Slavia Adam';
		$dosen-> nip = '078573146763';
		$dosen-> alamat = 'Semarang';
		$dosen-> pengguna_id = 'Will';
		$dosen-> save();
		return "name {$dosen->name} telah disimpan";
	}
}
