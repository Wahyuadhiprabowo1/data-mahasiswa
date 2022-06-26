<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class MahasiswaController extends Controller
{
    //
    public function index(Request $request){
        if($request->has('cari')){
            $data_mahasiswa = Mahasiswa::where('nama_depan', 'LIKE', '%'.$request->cari. '%')->get();
       
        }else{
            $data_mahasiswa = Mahasiswa::all()->sortBy('nim');
        }
        
        return view('mahasiswa.index', compact('data_mahasiswa'));
    }
    public function create(Request $request){
        Mahasiswa::create($request->all());
        return redirect('mahasiswa')->with('sukses','Data berhasil di simpan!');
    }
    public function edit($id){
         $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update(Request $request,$id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('mahasiswa')->with('sukses','Data berhasil di update!');
    }
    public function destroy($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa')->with('sukses','Data berhasil di Hapus');
    }
}
