<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class Jadwal_MatakuliahController extends Controller
{
     public function awal()
    {
    	return view('jadwal_matakuliah.awal',['data'=>Jadwal_Matakuliah::all()]);
    }
	public function tambah()
	{
		return view('jadwal_matakuliah.tambah');
	}
	public function simpan(Requests $input)
	{
		$jadwal_matakuliah = new Jadwal_Matakuliah();
		$jadwal_matakuliah-> mahasiswa_id = $input->mahasiswa_id;
		$jadwal_matakuliah-> ruangan_id = $input->ruangan_id;
		$jadwal_matakuliah-> dosen_matakuliah = $input->dosen_matakuliah;
		$informasi = $jadwal_matakuliah->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$jadwal_matakuliah = Jadwal_Matakuliah::find($id);
		return view('jadwal_matakuliah.edit')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
	}
public function lihat($id)
	{
		$jadwal_matakuliah = Jadwal_Matakuliah::find($id);
		return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
	}
public function update($id, Requests $input)
	{
		$jadwal_matakuliah = Jadwal_Matakuliah::find($id);
		$jadwal_matakuliah = new Jadwal_Matakuliah();
		$jadwal_matakuliah-> mahasiswa_id = $input->mahasiswa_id;
		$jadwal_matakuliah-> ruangan_id = $input->ruangan_id;
		$jadwal_matakuliah-> dosen_matakuliah = $input->dosen_matakuliah;
		$informasi = $jadwal_matakuliah->save() ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data';
		return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
	}	
public function hapus($id)
	{
		$jadwal_matakuliah = Jadwal_Matakuliah::find($id);
		$informasi = $jadwal_matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
	}
}
