<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Keunggulan;
use Illuminate\Http\Request;

class KeunggulanController extends Controller
{
    public function index() {
        $keunggulan = Keunggulan::select('id','judul','isi')->get();
        return view('backend/admin/keunggulan.index',compact('keunggulan'));
    }

    public function add(){
        return view('backend/admin/keunggulan.add');
    }

    public function post(Request $request) {
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
        ]);
        Keunggulan::create($request->all());
        return redirect()->route('admin.keunggulan')->with(['success' =>  'keunggulan baru berhasil ditambahkan !']);
    }

    public function edit($id) {
        $keunggulan= Keunggulan::find($id);
        return view('backend/admin/keunggulan.edit',compact('keunggulan'));
    }

    public function update(Request $request, $id) {
        Keunggulan::where('id',$id)->update([
            'judul' =>  $request->judul,
            'isi' =>  $request->isi,
        ]);

        return redirect()->route('admin.keunggulan')->with(['success' =>  'keunggulan baru berhasil ditambahkan !']);
    }

    public function delete(Request $request) {
        $keunggulan = Keunggulan::find($request->id);
        $keunggulan->delete();

        return redirect()->route('admin.keunggulan')->with(['success' => 'keunggulan telah dihapus !']);
    }
}
