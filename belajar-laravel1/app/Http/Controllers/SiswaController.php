<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function siswa (){
        $siswa= DB ::table ('siswa')->get();

        return view ('siswa', ['siswa' =>$siswa]);
    }

    public function tambah(){
        return view('tambah');
    }      


        
    
    public function store(Request $request){
                DB ::table ('siswa')->insert([
                    'nama_siswa'=>$request->nama,
                    'umur_siswa'=>$request->umur,
                ]);
                return redirect('/');
    }

 

    public function edit($id){
        $siswa= DB::table('siswa')->where('id_siswa',$id)->get();
        return view('edit',['siswa' =>$siswa]);
    }
    
    public function update(Request $request){
    DB::table('siswa')->where('id_siswa',$request->id)->update([
        'nama_siswa'=>$request->nama,
        'umur_siswa'=>$request->umur,
    ]);
    return redirect('/');
}
 public function hapus($id){
   DB::table('siswa')->where('id_siswa',$id)->delete();
        return redirect('/');
 }

}
