<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
     public function awal()
    {
    	return view('dosen.awal',['data'=>Dosen::all()]);
    }
	public function tambah()
	{
		return view('dosen.tambah');
	}
	public function simpan(Requests $input)
	{
		$dosen = new Dosen();
		$dosen-> name = $input->name;
		$dosen-> nip = $input->nip;
		$dosen-> alamat = $input->alamat;
		$dosen-> pengguna_id = $input->pengguna_id;
		$informasi = $dosen->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('dosen')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$dosen = Dosen::find($id);
		return view('dosen.edit')->with(array('dosen'=>$dosen));
	}
public function lihat($id)
	{
		$dosen = Dosen::find($id);
		return view('dosen.lihat')->with(array('dosen'=>$dosen));
	}
public function update($id, Requests $input)
	{
		$dosen = Dosen::find($id);
		$dosen-> name = $input->name;
		$dosen-> nip = $input->nip;
		$dosen-> alamat = $input->alamat;
		$dosen-> pengguna_id = $input->pengguna_id;
		$informasi = $dosen->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('dosen')->with(['informasi'=>$informasi]);
	}	
public function hapus($id)
	{
		$dosen = Dosen::find($id);
		$informasi = $dosen->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('dosen')->with(['informasi'=>$informasi]);
	}
}
