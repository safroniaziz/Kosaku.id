<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategoris = Kategori::all();
        return view('backend/admin/kategori.index', compact('kategoris'));
    }

    public function post(Request $request){
        $this->validate($request,[
            'nm_kategori'   =>  'required'
        ]);
        Kategori::create([
            'nm_kategori'   =>  $request->nm_kategori,
        ]);

        return redirect()->route('admin.kategori')->with(['success' =>  'Kategori baru berhasil ditambahkan']);
    }

    public function delete(Request $request){
        $kategori = Kategori::find($request->id);
        $kategori->delete();

        return redirect()->route('admin.kategori')->with(['success'  =>  'Kategori Berhasil Dihapus !!']);
    }

    public function nonaktifkanStatus($id){
        Kategori::where('id',$id)->update([
            'status'    =>  '0'
        ]);
        return redirect()->route('admin.kategori')->with(['success' =>  'Kategori Berhasil Di Nonaktifkan !!']);
    }

    public function aktifkanStatus($id){
        Kategori::where('id',$id)->update([
            'status'    =>  '1'
        ]);
        return redirect()->route('admin.kategori')->with(['success' =>  'Kategori Berhasil Di Aktifkan !!']);
    }
}
