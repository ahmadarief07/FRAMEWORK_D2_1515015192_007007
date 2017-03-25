<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
     public function awal()
    {
    	return view('matakuliah.awal',['data'=>Matakuliah::all()]);
    }
	public function tambah()
	{
		return view('ruangan.tambah');
	}
	public function simpan(Requests $input)
	{
		$matakuliah = new Matakuliah();
		$matakuliah-> title = $input->title;
		$matakuliah-> keterangan = $input->keterangan;
		$informasi = $matakuliah->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('matakuliah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$matakuliah = Matakuliah::find($id);
		return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
	}
public function lihat($id)
	{
		$matakuliah = Matakuliah::find($id);
		return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
	}
public function update($id, Requests $input)
	{
		$matakuliah = Matakuliah::find($id);
		$matakuliah-> title = $input->title;
		$matakuliah-> keterangan = $input->keterangan;
		$informasi = $matakuliah->save() ? 'Berhasil Update Data' : 'Gagal Update Data';
		return redirect('matakuliah')->with(['informasi'=>$informasi]);
	}	
public function hapus($id)
	{
		$matakuliah = Matakuliah::find($id);
		$informasi = $matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('matakuliah')->with(['informasi'=>$informasi]);

	}
}
