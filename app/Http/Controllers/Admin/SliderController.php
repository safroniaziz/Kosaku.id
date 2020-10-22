<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::select('id','gambar','title','slogan')->get();
        return view('backend/admin/slider.index',compact('sliders'));
    }

    public function add(){
        return view('backend/admin/slider.add');
    }

    public function post(Request $request){
        $this->validate($request,[
            'title' =>  'required',
            'slogan' =>  'required',
            'slider' =>  'required|mimes:jpg,jpeg,png|max:2000',
        ]);
        $slider = $request->file('slider');
        $sliderUrl = $slider->store('public/foto_slider');
        $sliderUrl2 = $slider->store('foto_slider');
        Slider::create([
            'gambar'    =>  $sliderUrl,
            'title'    =>  $request->title,
            'slogan'    =>  $request->slogan,
        ]);
        return redirect()->route('admin.slider')->with(['success'    =>  'Data slider sudah ditambahkan !']);
    }

    public function delete(Request $request){
        $slider = Slider::find($request->id);
        $slider->delete();
        Storage::delete($slider->gambar);
        return redirect()->route('admin.slider')->with(['success'    =>  'Data slider sudah dihapus !']);
    }
}
