<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class SiswaController extends Controller
{
    public function siswa(){
        $siswa = DB::table('siswa')->get();

        return view('siswa',['siswa' => $siswa]);

    }

    public function store(Request $request){
        DB::table('siswa')->insert([
            'nama_siswa' =>$request->nama,
            'umur_siswa' =>$request->umur,
            'nama_alamat' =>$request->alamat,
        ]);

        return redirect('/');
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $siswa = DB::table('siswa')->where('id',$id)->get();

        return view('edit',['siswa' => $siswa]);


    }

    public function update(Request $request){
        DB::table('siswa')->where('id',$request->id)->update([
            'nama_siswa' =>$request->nama,
            'umur_siswa' =>$request->umur,
            'nama_alamat' =>$request->alamat,
        ]);

        return redirect('/'); 
    }

    public function hapus($id){
     DB::table('siswa')->where('id',$id)->delete();

        return redirect('/'); 
    }
}