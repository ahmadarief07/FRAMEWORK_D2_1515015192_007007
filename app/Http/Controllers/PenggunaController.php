<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;
class PenggunaController extends Controller
{
    public function awal()
    {
    	return "Hello Ahmad Arifin";
    }
public function tambah()
	{
		return $this->simpan();
	}
public function simpan()
	{
		$pengguna = new pengguna();
		$pengguna-> username = 'Ahmad Arifin';
		$pengguna-> password = '123456789';
		$pengguna-> save();
		return "username {$pengguna->username} telah disimpan";
	}
}
