<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class Dosen_MatakuliahController extends Controller
{
     public function awal()
    {
    	return view('dosen_matakuliah.awal',['data'=>Dosen_Matakuliah::all()]);
    }
	public function tambah()
	{
		return view('dosen_matakuliah.tambah');
	}
	public function simpan(Requests $input)
	{
		$dosen_matakuliah = new Dosen_Matakuliah();
		$dosen_matakuliah-> dosen_id = $input->dosen_id;
		$dosen_matakuliah-> matakuliah_id = $input->matakuliah_id;
		$informasi = $dosen_matakuliah->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$dosen_matakuliah = Dosen_Matakuliah::find($id);
		return view('dosen_matakuliah.edit')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
	}
public function lihat($id)
	{
		$dosen_matakuliah = Dosen_Matakuliah::find($id);
		return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
	}
public function update($id, Requests $input)
	{
		$dosen_matakuliah = Dosen_Matakuliah::find($id);
		$dosen_matakuliah-> dosen_id = $input->dosen_id;
		$dosen_matakuliah-> matakuliah_id = $input->matakuliah_id;
		$informasi = $dosen_matakuliah->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
	}	
public function hapus($id)
	{
		$dosen_matakuliah = Dosen_Matakuliah::find($id);
		$informasi = $dosen_matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
	}
}