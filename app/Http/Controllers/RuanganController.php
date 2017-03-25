<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
    public function awal()
    {
    	return view('ruangan.awal',['data'=>Ruangan::all()]);
    }
	public function tambah(Requests $input)
	{
		return view('ruangan.tambah');
	}
	public function simpan()
	{
		$ruangan = new Ruangan();
		$ruangan-> title = $input->title;
		$informasi = $ruangan->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$ruangan = Ruangan::find($id);
		return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
	}
public function lihat($id)
	{
		$ruangan = Ruangan::find($id);
		return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
	}
public function update($id, Requests $input)
	{
		$ruangan = Ruangan::find($id);
		$ruangan-> title = $input->title;
		$informasi = $ruangan->save() ? 'Berhasil Update Data' : 'Gagal Update Data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
	}	
public function hapus($id)
	{
		$ruangan = Ruangan::find($id);
		$informasi = $ruangan->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);

	}
}
