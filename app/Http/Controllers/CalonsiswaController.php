<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalonsiswaController extends Controller
{
    public function index(){
        $csb = DB::table('calonsiswas')->get();
        return view('vw_calonsiswa',['calonsiswa'=>$csb]);
    }

    public function tambah(){
        return view('vw_tambahdata');
    }

    public function tambahdata(Request $request){
        DB::table('calonsiswas')->insert([
            'no'=>$request->no,
            'nama'=>$request->nama_siswa,
            'asal_sekolah'=>$request->asal_sekolah,
            'pilihan_jurusan1'=>$request->pilihan_jurusan1,
            'pilihan_jurusan2'=>$request->pilihan_jurusan2
        ]);
        return redirect('/calonsiswa');
    }

    public function edit($id){
        $csb = DB::table('calonsiswas')->where('id', $id)->get();
        return view('vw_editdata', ['calonsiswa' =>$csb]);
    }

    public function editdata(Request $request){
        DB::table('calonsiswas')->where('id', $request->id)->update([
            'no'=>$request->no,
            'nama'=>$request->nama_siswa,
            'asal_sekolah'=>$request->asal_sekolah,
            'pilihan_jurusan1'=>$request->pilihan_jurusan1,
            'pilihan_jurusan2'=>$request->pilihan_jurusan2
        ]);
        return redirect('/calonsiswa');
    }

    public function hapus($id){
        DB::table('calonsiswas')->where('id',$id)->delete();
        return redirect('/calonsiswa');
    }
}
