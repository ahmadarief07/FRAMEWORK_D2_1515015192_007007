<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;
class RuanganController extends Controller
{
    public function awal()
    {
    	return "Hello Ahmad Arifin, Cek ruangan kamu disini";
    }
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$ruangan = new Ruangan();
		$ruangan-> id = '1';
		$ruangan-> title = 'Framework Programming';
		$ruangan-> save();
		return "{$ruangan->title} telah disimpan";
	}
}
