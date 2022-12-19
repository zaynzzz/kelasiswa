<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $data = ['siswa'=>$siswa];
        return $data;
    }

    public function create(Request $request)
    {
        $siswa = new Siswa;

        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->kode_kelas = $request->kode_kelas;
        $siswa->save();

        return " Data Tersimpan ";

    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->kode_kelas = $request->kode_kelas;
        $siswa->save();
        if($siswa){
            return ' Berhasil edit data '. ' Silahkan dicek kembali';
        }else{
            return ' Gagal edit data ' . ' Silahkan dicek kembali';
        }
    
        // return " Data Ter-Update";
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return " Data Ter-Delete";

    }

    public function detail($id)
    {
        $siswa = Siswa::find($id);
        return $siswa;  
    }

}
