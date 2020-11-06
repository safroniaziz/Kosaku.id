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
        return view('frontend.index',compact('sliders','rekomendasis','allkategoris'));
    }

    
}
