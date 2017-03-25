<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
     public function awal()
    {
    	return view('mahasiswa.awal',['data'=>Mahasiswa::all()]);
    }
	public function tambah()
	{
		return view('mahasiswa.tambah');

	}
	public function simpan(Requests $input)
	{
		$mahasiswa = new Mahasiswa();
		$mahasiswa-> name = $input->name;
		$mahasiswa-> nim = $input->nim;
		$mahasiswa-> alamat = $input->alamat;
		$mahasiswa-> pengguna_id = $input->pengguna_id;
		$informasi = $mahasiswa->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	}
public function edit($id)
	{
		$mahasiswa = Mahasiswa::find($id);
		return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
	}
public function lihat($id)
	{
		$mahasiswa = Mahasiswa::find($id);
		return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
	}
public function update($id, Requests $input)
	{
		$mahasiswa = Mahasiswa::find($id);
		$mahasiswa-> name = $input->name;
		$mahasiswa-> nim = $input->nim;
		$mahasiswa-> alamat = $input->alamat;
		$informasi = $mahasiswa->save() ? 'Berhasil Update Data' : 'Gagal Update Data';
		return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	}	
public function hapus($id)
	{
		$mahasiswa = Mahasiswa::find($id);
		$informasi = $mahasiswa->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	}
}
