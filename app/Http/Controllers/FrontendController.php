<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('layouts/frontend',compact('sliders'));
    }

    public function semuaProduk(){
        return view('frontend/produk.semua');
    }
}
