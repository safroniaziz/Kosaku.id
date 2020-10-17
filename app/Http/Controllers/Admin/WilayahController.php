<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kecamatan;
use App\Kelurahan;
use App\Kota;
use App\Provinsi;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function provinsi(){
        $provinsis = Provinsi::all();
        return view('backend/admin/wilayah/provinsi.index',compact('provinsis'));
    }
    
    public function provinsiPost(Request $request){
        $this->validate($request,[
            'nm_provinsi'   =>  'required',
        ]);

        Provinsi::create([
            'nm_provinsi'   =>  $request->nm_provinsi,
        ]);
        return redirect()->route('admin.wilayah.provinsi')->with(['success' =>  'Data Provinsi Berhasil Ditambahkan !']);
    }

    public function provinsiDelete(Request $request){
        $provinsi = Provinsi::find($request->id);
        $provinsi->delete();
        return redirect()->route('admin.wilayah.provinsi')->with(['success' =>  'Data Provinsi Berhasil Dihapus !']);
    }

    public function kota(){
        $kotas = Kota::join('provinsis','provinsis.id','kotas.provinsi_id')->select('kotas.id as id','nm_kota','nm_provinsi')->get();
        $provinsis = Provinsi::all();
        return view('backend/admin/wilayah/kota.index',compact('kotas','provinsis'));
    }
    
    public function kotaPost(Request $request){
        $this->validate($request,[
            'nm_kota'   =>  'required',
            'provinsi_id'   =>  'required',
        ]);

        Kota::create([
            'provinsi_id'   =>  $request->provinsi_id,
            'nm_kota'   =>  $request->nm_kota,
        ]);
        return redirect()->route('admin.wilayah.kota')->with(['success' =>  'Data kota Berhasil Ditambahkan !']);
    }

    public function kotaDelete(Request $request){
        $kota = Kota::find($request->id);
        $kota->delete();
        return redirect()->route('admin.wilayah.kota')->with(['success' =>  'Data kota Berhasil Dihapus !']);
    }

    public function kecamatan(){
        $kecamatans = Kecamatan::join('kotas','kotas.id','kecamatans.kota_id')
                        ->join('provinsis','provinsis.id','kotas.provinsi_id')
                        ->select('kecamatans.id as id','nm_kecamatan','nm_kota','nm_provinsi')
                        ->get();
        $provinsis = Provinsi::all();
        return view('backend/admin/wilayah/kecamatan.index',compact('kecamatans','provinsis'));
    }
    
    public function kecamatanPost(Request $request){
        $this->validate($request,[
            'nm_kecamatan'   =>  'required',
            'kota_id'   =>  'required',
            'provinsi_id'   =>  'required',
        ]);

        Kecamatan::create([
            'kota_id'   =>  $request->kota_id,
            'nm_kecamatan'   =>  $request->nm_kecamatan,
        ]);
        return redirect()->route('admin.wilayah.kecamatan')->with(['success' =>  'Data kecamatan Berhasil Ditambahkan !']);
    }

    public function kecamatanDelete(Request $request){
        $kecamatan = Kecamatan::find($request->id);
        $kecamatan->delete();
        return redirect()->route('admin.wilayah.kecamatan')->with(['success' =>  'Data kecamatan Berhasil Dihapus !']);
    }

    public function kelurahan(){
        $kelurahans = Kelurahan::join('kecamatans','kecamatans.id','kelurahans.kecamatan_id')
                        ->join('kotas','kotas.id','kecamatans.kota_id')
                        ->join('provinsis','provinsis.id','kotas.provinsi_id')
                        ->select('kelurahans.id as id','nm_kelurahan','nm_kecamatan','nm_kota','nm_provinsi')
                        ->get();
        $provinsis = Provinsi::all();
        return view('backend/admin/wilayah/kelurahan.index',compact('kelurahans','provinsis'));
    }
    
    public function kelurahanPost(Request $request){
        $this->validate($request,[
            'nm_kelurahan'   =>  'required',
            'kecamatan_id'   =>  'required',
            'provinsi_id'   =>  'required',
            'kota_id'   =>  'required',
        ]);

        Kelurahan::create([
            'kecamatan_id'   =>  $request->kecamatan_id,
            'nm_kelurahan'   =>  $request->nm_kelurahan,
        ]);
        return redirect()->route('admin.wilayah.kelurahan')->with(['success' =>  'Data kelurahan Berhasil Ditambahkan !']);
    }

    public function kelurahanDelete(Request $request){
        $kelurahan = Kelurahan::find($request->id);
        $kelurahan->delete();
        return redirect()->route('admin.wilayah.kelurahan')->with(['success' =>  'Data kelurahan Berhasil Dihapus !']);
    }

    public function cariKota(Request $request){
        $kotas = Kota::where('provinsi_id',$request->provinsi_id)->get();
        return $kotas;
    }

    public function cariKecamatan(Request $request){
        $kotas = Kecamatan::where('kota_id',$request->kota_id)->get();
        return $kotas;
    }

    public function cariKelurahan(Request $request){
        $kotas = Kelurahan::where('kecamatan_id',$request->kecamatan_id)->get();
        return $kotas;
    }
}