<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukFrontendController extends Controller
{
    public function semuaProduk(){
        $kerjasama = Produk::select('nm_vendor')->where('status','1')->get();
        $rekomendasis = DB::table('produks_view')
                        ->select('id','nm_vendor','jumlah_kamar','wifi','ac','lahan_parkir','listrik','air','pengamanan','foto_thumbnail','nm_kategori','slug','jenis_kategori','harga_sewa','kamar_kosong','nm_kota','nm_provinsi','nm_kecamatan','nm_kelurahan','created_at',
                        DB::raw('kamar_kosong / jumlah_kamar * 100 as persentase'))
                        ->where('status','1')
                        ->where('jenis_kerja_sama','premium')
                        ->get();
        $produks = DB::table('produks_view')
                    ->select('id','nm_vendor','jumlah_kamar','wifi','ac','lahan_parkir','listrik','air','pengamanan','foto_thumbnail','nm_kategori','slug','jenis_kategori','harga_sewa','kamar_kosong','nm_kota','nm_provinsi','nm_kecamatan','nm_kelurahan','created_at',
                    DB::raw('kamar_kosong / jumlah_kamar * 100 as persentase'))
                    ->where('status','1')
                    ->where('jenis_kerja_sama','!=','premium')
                    ->orderBy('jenis_kategori')
                    ->get();
        return view('frontend.produk.semua',compact('kerjasama','rekomendasis','produks'));
    }

    public function detail($slug){
        $produk = DB::table('produks_view')->where('slug',$slug)->first();
        $galeris = DB::table('foto_details')->where('produk_id',$produk->id)->select('foto_detail')->get();
        $kerjasama = Produk::select('nm_vendor')->where('status','1')->get();
        $rekomendasis = DB::table('produks_view')
                        ->select('id','nm_vendor','jumlah_kamar','foto_thumbnail','nm_kategori','slug','jenis_kategori','harga_sewa','kamar_kosong','nm_kota','nm_provinsi','nm_kecamatan','nm_kelurahan','created_at',
                        DB::raw('kamar_kosong / jumlah_kamar * 100 as persentase'))
                        ->where('status','1')
                        ->where('jenis_kerja_sama','premium')
                        ->take(4)->get();
        return view('frontend/produk.detail',compact('produk','kerjasama','galeris','rekomendasis'));
    }
}
