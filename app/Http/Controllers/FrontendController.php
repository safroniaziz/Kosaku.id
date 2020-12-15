<?php

namespace App\Http\Controllers;

use App\Kelurahan;
use App\PesertaSeminar;
use App\Produk;
use App\Provinsi;
use App\Seminar;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $rekomendasis = DB::table('produks_view')
                        ->select('id','nm_vendor','jumlah_kamar','foto_thumbnail','diskon','nm_kategori','slug','jenis_kategori','harga_sewa','kamar_kosong','nm_kota','nm_provinsi','nm_kecamatan','nm_kelurahan','created_at',
                        DB::raw('kamar_kosong / jumlah_kamar * 100 as persentase'))
                        ->where('status','1')
                        ->where('jenis_kerja_sama','premium')
                        ->get();
        $allkategoris = DB::table('produks_view')
                        ->select('id','nm_vendor','jumlah_kamar','wifi','ac','lahan_parkir','listrik','air','pengamanan','foto_thumbnail','diskon','nm_kategori','slug','jenis_kategori','harga_sewa','kamar_kosong','nm_kota','nm_provinsi','nm_kecamatan','nm_kelurahan','created_at',
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

        $provinsis = Provinsi::all();
        return view('frontend.index',compact('sliders','rekomendasis','allkategoris','unib','umb','iain','unihaz','unived','putra','putri','campuran','total_kamar','kerjasama','provinsis'));
    }

    public function pendaftaranSeminar(){
        $seminars = Seminar::where('id',3)->get();
        return view('frontend/pendaftaran_seminar',compact('seminars'));
    }

    public function pendaftaranSeminarPost(Request $request){
        $this->validate($request,[
            'seminar_id'    =>  'required',
            'nm_peserta'    =>  'required',
            'nim'    =>  'required',
            'prodi'    =>  'required',
            'fakultas'    =>  'required',
            'universitas'    =>  'required',
            'email'    =>  'required:email',
            'password'    =>  'required',
            'telephone'    =>  'required',
        ]);
        DB::beginTransaction();
        try {
            PesertaSeminar::create([
                'seminar_id'    =>  $request->seminar_id,
                'nm_peserta'    =>  $request->nm_peserta,
                'nim'    =>  $request->nim,
                'prodi'    =>  $request->prodi,
                'fakultas'    =>  $request->fakultas,
                'universitas'    =>  $request->universitas,
                'telephone'    =>  $request->telephone,
            ]);
            User::create([
                'name'  =>  $request->nm_peserta,
                'email'  =>  $request->email,
                'password'  =>  bcrypt($request->password),
            ]); 
            DB::commit();
            return redirect()->route('pendaftaran_seminar')->with(['success'    =>  'Pendaftaran Berhasil, Silahkan Tunggu Pengumuman Selanjutnya di Instagram Kosaku.id !!']);
        } catch (Exception $e) {
            // Rollback Transaction
            DB::rollback();
            // ada yang error
            return redirect()->route('pendaftaran_seminar')->with(['error'    =>  'Pendaftaran Gagal, Silahkan Coba Lagi !!']);
        }
    }

    public function pendaftaranSeminarAll(){
        $datas = PesertaSeminar::groupBy('nm_peserta')->get();
        return view('frontend/pendaftaran_seminar_all',compact('datas'));
    }
}
