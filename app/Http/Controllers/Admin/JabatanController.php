<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        $kategoris = Jabatan::all();
        return view('backend/admin/jabatan.index', compact('jabatans'));
    }

    public function post(Request $request){
        $this->validate($request,[
            'nm_jabatan'   =>  'required'
        ]);
        Jabatan::create([
            'nm_jabatan'   =>  $request->nm_jabatan,
        ]);

        return redirect()->route('admin.jabatan')->with(['success' =>  'Jabatan baru berhasil ditambahkan']);
    }

    public function delete(Request $request){
        $jabatan = Jabatan::find($request->id);
        $jabatan->delete();

        return redirect()->route('admin.jabatan')->with(['success'  =>  'Jabatan Berhasil Dihapus !!']);
    }
}
