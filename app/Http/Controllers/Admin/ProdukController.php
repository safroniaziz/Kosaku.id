<?php

namespace App\Http\Controllers\Admin;

use App\FotoDetail;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\Produk;
use App\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all();
        return view('backend/admin/produk/putri.index',compact('produks'));
    }

    public function add(){
        $provinsis = Provinsi::all();
        $kategoris = Kategori::all();
        return view('backend/admin/produk/putri.add', compact('provinsis','kategoris'));
    }

    public function post(Request $request){
        $this->validate($request,[
            'provinsi_id'   =>  'required',
            'kota_id'   =>  'required',
            'kecamatan_id'   =>  'required',
            'kelurahan_id'   =>  'required',
            'kategori_id'   =>  'required',
            'nm_pemilik'   =>  'required',
            'nm_vendor'   =>  'required',
            'jumlah_kamar'   =>  'required',
            'kamar_kosong'   =>  'required',
            'luas_kamar'   =>  'required',
            'alamat_singkat'   =>  'required',
            'alamat_lengkap'   =>  'required',
            'latitude'   =>  'required',
            'longitude'   =>  'required',
            'harga_sewa'   =>  'required',
            'jenis_kategori'   =>  'required',
            'jenis_kerja_sama'   =>  'required',
            'deskripsi'   =>  'required',
            'foto_thumbnail'   =>  'required|mimes:jpg,jpeg,png|max:500',
            'kamar_mandi_dalam'   =>  'required',
            'dapur_dalam'   =>  'required',
            'kamar_mandi_umum'   =>  'required',
            'dapur_umum'   =>  'required',
            'wifi'   =>  'required',
            'ac'   =>  'required',
            'kasur'   =>  'required',
            'lemari'   =>  'required',
            'lahan_parkir'   =>  'required',
            'listrik'   =>  'required',
            'air'   =>  'required',
            'pengamanan'   =>  'required',
            'jarak_rs_terdekat'   =>  'required',
            'jarak_damkar'   =>  'required',
            'jarak_pusat_kota'   =>  'required',
            'jarak_polisi_terdekat'   =>  'required',
            'jarak_puskesmas'   =>  'required',
            'jarak_pasar'   =>  'required',
        ]);

        $slug_vendor = Str::slug($request->nm_vendor);
       
        $thumbnail = $request->file('foto_thumbnail');
        $thumbnailUrl = $thumbnail->store('foto_thumbnail/'.$slug_vendor);
        Produk::create([
            'kategori_id'   =>  $request->kategori_id,
            'provinsi_id'   =>  $request->provinsi_id,
            'kota_id'   =>  $request->kota_id,
            'kecamatan_id'   =>  $request->kecamatan_id,
            'kelurahan_id'   =>  $request->kelurahan_id,
            'nm_pemilik'    =>  $request->nm_pemilik,
            'nm_vendor'     =>  $request->nm_vendor,
            'slug'          =>  Str::slug($request->nm_vendor),
            'jumlah_kamar'  =>  $request->jumlah_kamar,
            'kamar_kosong'  =>  $request->kamar_kosong,
            'luas_kamar'    =>  $request->luas_kamar,
            'alamat_singkat'    =>  $request->alamat_singkat,
            'alamat_lengkap'    =>  $request->alamat_lengkap,
            'latitude'  =>  $request->latitude,
            'longitude' =>  $request->longitude,
            'harga_sewa'    =>  $request->harga_sewa,
            'jenis_kategori'    =>  $request->jenis_kategori,
            'jenis_kerja_sama'  =>  $request->jenis_kerja_sama,
            'deskripsi' =>  $request->deskripsi,
            'foto_thumbnail' =>  $thumbnailUrl,
            'kamar_mandi_dalam' =>  $request->kamar_mandi_dalam,
            'dapur_dalam'   =>  $request->dapur_dalam,
            'kamar_mandi_umum'  =>  $request->kamar_mandi_umum,
            'dapur_umum'    =>  $request->dapur_umum,
            'wifi'  =>  $request->wifi,
            'ac'    =>  $request->ac,
            'kasur' =>  $request->kasur,
            'lemari'    =>  $request->lemari,
            'lahan_parkir'  =>  $request->lahan_parkir,
            'listrik'   =>  $request->listrik,
            'air'   =>  $request->air,
            'pengamanan'    =>  $request->pengamanan,
            'jarak_rs_terdekat' =>  $request->jarak_rs_terdekat,
            'jarak_damkar'  =>  $request->jarak_damkar,
            'jarak_pusat_kota'  =>  $request->jarak_pusat_kota,
            'jarak_polisi_terdekat' =>  $request->jarak_polisi_terdekat,
            'jarak_puskesmas'   =>  $request->jarak_puskesmas,
            'jarak_pasar'   =>  $request->jarak_pasar,
        ]);

        return redirect()->route('admin.produk_putri')->with(['success' =>  'Data berhasil ditambahkan !']);
    }

    public function nonaktifkanStatus($id){
        Produk::where('id',$id)->update([
            'status'    =>  '0'
        ]);
        return redirect()->route('admin.produk_putri')->with(['success' =>  'Produk Berhasil Di Nonaktifkan !!']);
    }

    public function aktifkanStatus($id){
        Produk::where('id',$id)->update([
            'status'    =>  '1'
        ]);
        return redirect()->route('admin.produk_putri')->with(['success' =>  'Produk Berhasil Di Aktifkan !!']);
    }

    public function detail($id, $slug){
        $details = Produk::join('kategoris','kategoris.id','produks.kategori_id')
                        ->join('provinsis','provinsis.id','produks.provinsi_id')
                        ->join('kotas','kotas.provinsi_id','provinsis.id')
                        ->join('kecamatans','kecamatans.kota_id','kotas.id')
                        ->join('kelurahans','kelurahans.kecamatan_id','kecamatans.id')
                        ->select('produks.id','slug','nm_pemilik','nm_vendor','nm_provinsi','nm_kota','nm_kecamatan','nm_kelurahan',
                                'harga_sewa','alamat_lengkap','luas_kamar','jumlah_kamar','kamar_kosong','deskripsi','jenis_kategori',
                                'jenis_kerja_sama','nm_kategori'
                                )
                        ->where('produks.id',$id)
                        ->get();
        $fasilitas = Produk::select('kamar_mandi_dalam','dapur_dalam','kamar_mandi_umum','dapur_umum','wifi','ac','kasur','lemari',
                                    'lahan_parkir','listrik','air','pengamanan'
                                    )
                            ->where('id',$id)
                            ->get();
        $jaraks =   Produk::select('jarak_rs_terdekat','jarak_damkar','jarak_pusat_kota','jarak_polisi_terdekat','jarak_puskesmas','jarak_pasar')
                            ->where('id',$id)
                            ->get();
        $galeris = Produk::join('foto_details','foto_details.produk_id','produks.id')
                            ->select('foto_details.id','foto_detail')
                            ->where('produks.id',$id)
                            ->get();
        return view('backend/admin/produk/putri.detail',compact('details','fasilitas','jaraks','galeris'));
    }

    public function addGaleri($id,$slug){
        $id = $id;
        $slug = $slug;
        return view('backend/admin/produk/putri.add_galeri',compact('id','slug'));
    }

    public function galeriPost(Request $request, $id,$slug){
        $this->validate($request,[
            'foto_detail'   =>  'required',
            'foto_detail.*' =>  'mimes:jpg,jpeg,png|max:500',
        ]);

        $galeris = [];
        foreach ($request->file('foto_detail') as $file) {
            $galeriUrl = $file->store('foto_galeri/'.$slug);

            $galeris[] = [
                'foto_detail'   =>  $galeriUrl,
                'produk_id'     =>  $id
            ];
        }
        FotoDetail::insert($galeris);
        return redirect()->route('admin.produk_putri.detail',[$id,$slug])->with(['success' =>  'Galeri Produk Berhasil Di Tambahkan !!']);
    }

    public function galeriDelete($id, $produk_id, $slug){
        $foto = FotoDetail::find($id);
        $foto->delete();
        Storage::delete($foto->foto_detail);
        return redirect()->route('admin.produk_putri.detail',[$produk_id,$slug])->with(['success' =>  'Galeri Produk Berhasil Di Tambahkan !!']);
    }

    public function edit($id){
        $produk = Produk::find($id);
        $provinsis = Provinsi::all();
        $kategoris = Kategori::all();
        return view('backend/admin/produk/putri.edit',compact('produk','provinsis','kategoris'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'provinsi_id'   =>  'required',
            'kota_id'   =>  'required',
            'kecamatan_id'   =>  'required',
            'kelurahan_id'   =>  'required',
            'kategori_id'   =>  'required',
            'nm_pemilik'   =>  'required',
            'nm_vendor'   =>  'required',
            'jumlah_kamar'   =>  'required',
            'kamar_kosong'   =>  'required',
            'luas_kamar'   =>  'required',
            'alamat_lengkap'   =>  'required',
            'alamat_singkat'   =>  'required',
            'latitude'   =>  'required',
            'longitude'   =>  'required',
            'harga_sewa'   =>  'required',
            'jenis_kategori'   =>  'required',
            'jenis_kerja_sama'   =>  'required',
            'deskripsi'   =>  'required',
            'kamar_mandi_dalam'   =>  'required',
            'dapur_dalam'   =>  'required',
            'kamar_mandi_umum'   =>  'required',
            'dapur_umum'   =>  'required',
            'wifi'   =>  'required',
            'ac'   =>  'required',
            'kasur'   =>  'required',
            'lemari'   =>  'required',
            'lahan_parkir'   =>  'required',
            'listrik'   =>  'required',
            'air'   =>  'required',
            'pengamanan'   =>  'required',
            'jarak_rs_terdekat'   =>  'required',
            'jarak_damkar'   =>  'required',
            'jarak_pusat_kota'   =>  'required',
            'jarak_polisi_terdekat'   =>  'required',
            'jarak_puskesmas'   =>  'required',
            'jarak_pasar'   =>  'required',
        ]);

        $slug_vendor = Str::slug($request->nm_vendor);
        $file_lama = Produk::where('id',$id)->select('foto_thumbnail')->first();
        if (!empty(request()->file('foto_thumbnail'))) {
            Storage::delete($file_lama->foto_thumbnail);
            $thumbnailUrl = $request->foto_thumbnail->store('foto_thumbnail/'.$slug_vendor);
            Produk::where('id',$id)->update([
                'kategori_id'   =>  $request->kategori_id,
                'provinsi_id'   =>  $request->provinsi_id,
                'kota_id'   =>  $request->kota_id,
                'kecamatan_id'   =>  $request->kecamatan_id,
                'kelurahan_id'   =>  $request->kelurahan_id,
                'nm_pemilik'    =>  $request->nm_pemilik,
                'nm_vendor'     =>  $request->nm_vendor,
                'slug'          =>  Str::slug($request->nm_vendor),
                'jumlah_kamar'  =>  $request->jumlah_kamar,
                'kamar_kosong'  =>  $request->kamar_kosong,
                'luas_kamar'    =>  $request->luas_kamar,
                'alamat_singkat'    =>  $request->alamat_singkat,
                'alamat_lengkap'    =>  $request->alamat_lengkap,
                'latitude'  =>  $request->latitude,
                'longitude' =>  $request->longitude,
                'harga_sewa'    =>  $request->harga_sewa,
                'jenis_kategori'    =>  $request->jenis_kategori,
                'jenis_kerja_sama'  =>  $request->jenis_kerja_sama,
                'deskripsi' =>  $request->deskripsi,
                'foto_thumbnail' =>  $thumbnailUrl,
                'kamar_mandi_dalam' =>  $request->kamar_mandi_dalam,
                'dapur_dalam'   =>  $request->dapur_dalam,
                'kamar_mandi_umum'  =>  $request->kamar_mandi_umum,
                'dapur_umum'    =>  $request->dapur_umum,
                'wifi'  =>  $request->wifi,
                'ac'    =>  $request->ac,
                'kasur' =>  $request->kasur,
                'lemari'    =>  $request->lemari,
                'lahan_parkir'  =>  $request->lahan_parkir,
                'listrik'   =>  $request->listrik,
                'air'   =>  $request->air,
                'pengamanan'    =>  $request->pengamanan,
                'jarak_rs_terdekat' =>  $request->jarak_rs_terdekat,
                'jarak_damkar'  =>  $request->jarak_damkar,
                'jarak_pusat_kota'  =>  $request->jarak_pusat_kota,
                'jarak_polisi_terdekat' =>  $request->jarak_polisi_terdekat,
                'jarak_puskesmas'   =>  $request->jarak_puskesmas,
                'jarak_pasar'   =>  $request->jarak_pasar,
            ]);
        }
        else{
            Produk::where('id',$id)->update([
                'kategori_id'   =>  $request->kategori_id,
                'provinsi_id'   =>  $request->provinsi_id,
                'kota_id'   =>  $request->kota_id,
                'kecamatan_id'   =>  $request->kecamatan_id,
                'kelurahan_id'   =>  $request->kelurahan_id,
                'nm_pemilik'    =>  $request->nm_pemilik,
                'nm_vendor'     =>  $request->nm_vendor,
                'slug'          =>  Str::slug($request->nm_vendor),
                'jumlah_kamar'  =>  $request->jumlah_kamar,
                'kamar_kosong'  =>  $request->kamar_kosong,
                'luas_kamar'    =>  $request->luas_kamar,
                'alamat_lengkap'    =>  $request->alamat_lengkap,
                'latitude'  =>  $request->latitude,
                'longitude' =>  $request->longitude,
                'harga_sewa'    =>  $request->harga_sewa,
                'jenis_kategori'    =>  $request->jenis_kategori,
                'jenis_kerja_sama'  =>  $request->jenis_kerja_sama,
                'deskripsi' =>  $request->deskripsi,
                'kamar_mandi_dalam' =>  $request->kamar_mandi_dalam,
                'dapur_dalam'   =>  $request->dapur_dalam,
                'kamar_mandi_umum'  =>  $request->kamar_mandi_umum,
                'dapur_umum'    =>  $request->dapur_umum,
                'wifi'  =>  $request->wifi,
                'ac'    =>  $request->ac,
                'kasur' =>  $request->kasur,
                'lemari'    =>  $request->lemari,
                'lahan_parkir'  =>  $request->lahan_parkir,
                'listrik'   =>  $request->listrik,
                'air'   =>  $request->air,
                'pengamanan'    =>  $request->pengamanan,
                'jarak_rs_terdekat' =>  $request->jarak_rs_terdekat,
                'jarak_damkar'  =>  $request->jarak_damkar,
                'jarak_pusat_kota'  =>  $request->jarak_pusat_kota,
                'jarak_polisi_terdekat' =>  $request->jarak_polisi_terdekat,
                'jarak_puskesmas'   =>  $request->jarak_puskesmas,
                'jarak_pasar'   =>  $request->jarak_pasar,
            ]);
        }
        
        return redirect()->route('admin.produk_putri.detail')->with(['success' =>  'Data berhasil ditambahkan !']);
    }
}