<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $data = ['kelas'=>$kelas];
        return $data;
    }

    public function create(Request $request)
    {
        $kelas = new Kelas;

        $kelas->kelas = $request->kelas;
        $kelas->save();

        return " Data Tersimpan ";

    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->kelas = $request->kelas;
        $kelas->save();
        if($kelas){
            return ' Berhasil edit data '. ' Silahkan dicek kembali';
        }else{
            return ' Gagal edit data ' . ' Silahkan dicek kembali';
        }
    
        // return " Data Ter-Update";
    }

    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return " Data Ter-Delete";

    }

    public function detail($id)
    {
        $kelas = Kelas::find($id);
        return $kelas;  
    }

}
