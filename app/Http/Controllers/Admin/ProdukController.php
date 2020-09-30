<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all();
        return view('backend/admin/produk.index',compact('produks'));
    }

    public function add(){
        $kategoris = Kategori::all();
        return view('backend/admin/produk.add', compact('kategoris'));
    }
}
