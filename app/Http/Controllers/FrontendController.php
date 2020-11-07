<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $rekomendasis = DB::table('produks_view')
                        ->select('id','nm_vendor','jumlah_kamar','foto_thumbnail','nm_kategori','slug','jenis_kategori','harga_sewa','kamar_kosong','nm_kota','nm_provinsi','nm_kecamatan','nm_kelurahan','created_at',
                        DB::raw('kamar_kosong / jumlah_kamar * 100 as persentase'))
                        ->where('status','1')
                        ->where('jenis_kerja_sama','premium')
                        ->take(4)->get();
        $allkategoris = DB::table('produks_view')
                        ->select('id','nm_vendor','jumlah_kamar','wifi','ac','lahan_parkir','listrik','air','pengamanan','foto_thumbnail','nm_kategori','slug','jenis_kategori','harga_sewa','kamar_kosong','nm_kota','nm_provinsi','nm_kecamatan','nm_kelurahan','created_at',
                        DB::raw('kamar_kosong / jumlah_kamar * 100 as persentase'))
                        ->where('status','1')
                        ->take(6)->get();
        $unib = count(Produk::where('area_kampus','like','%'.'unib'.'%')->get());
        $umb = count(Produk::where('area_kampus','like','%'.'umb'.'%')->get());
        $iain = count(Produk::where('area_kampus','like','%'.'iain'.'%')->get());
        $unihaz = count(Produk::where('area_kampus','like','%'.'unihaz'.'%')->get());
        $unived = count(Produk::where('area_kampus','like','%'.'unived'.'%')->get());

        $putri = Count(Produk::where('jenis_kategori','putri')->where('status','1')->get());
        $putra = Count(Produk::where('jenis_kategori','putra')->where('status','1')->get());
        $campuran = Count(Produk::where('status','1')->get());
        $total_kamar = Produk::where('status','1')->select(DB::raw('SUM(kamar_kosong) as total_kamar'))->first();

        $kerjasama = Produk::select('nm_vendor')->where('status','1')->get();
        return view('frontend.index',compact('sliders','rekomendasis','allkategoris','unib','umb','iain','unihaz','unived','putra','putri','campuran','total_kamar','kerjasama'));
    }

    
}
