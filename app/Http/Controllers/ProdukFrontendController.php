<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukFrontendController extends Controller
{
    public function semuaProduk(){
        return view('frontend.produk.semua');
    }

    public function detail($id){
        $produk = DB::table('produks_view')->where('id',$id)->get();
        return view('frontend/produk.detail',compact('produk'));
    }
}
