@extends('layouts.backend')
@section('title', 'Tambah Produk')
@section('login_as', 'Administrator')
@section('user-login')
@endsection
@section('user-login2')
@endsection
@section('login_as', 'Dosen Pengusul')
@section('sidebar-menu')
    @include('backend/admin/sidebar')
@endsection
@push('styles')
    <style>
        #selengkapnya{
            color:#5A738E;
            text-decoration:none;
            cursor:pointer;
        }
        #selengkapnya:hover{
            color:#007bff;
        }
    </style>
@endpush
@section('content')
    <section class="panel" style="margin-bottom:20px;">
        <header class="panel-heading" style="color: #ffffff;background-color: #074071;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
            <i class="fa fa-home"></i>&nbsp;Form Tambah Data Produk
        </header>
        <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
            <div class="row" style="margin-right:-15px; margin-left:-15px;">
                <div class="col-md-12">
                    <div class="alert alert-primary alert-block text-center" id="keterangan">
                        
                        <strong class="text-uppercase"><i class="fa fa-info-circle"></i>&nbsp;Perhatian: </strong><br> Silahkan tambahkan usulan kegiatan anda, harap melengkapi data terlebih dahulu agar proses pengajuan usulan tidak ada masalah kedepannya !!
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('admin.produk_putri.detail',[$produk->id,$produk->slug]) }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                </div>
                <form action="{{ route('admin.produk_putri.update',[$produk->id]) }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }} {{ method_field('PATCH') }}
                    <div class="col-md-12">
                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 1: Masukan Kelengkapan Data Wilayah</strong>
                        </div>
                        @include('backend/admin/produk/putri/edit.form_wilayah')

                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 2: Masukan Kelengkapan Data Produk</strong>
                        </div>
                        @include('backend/admin/produk/putri/edit.form_kelengkapan')

                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 3: Masukan Kelengkapan Fasilitas</strong>
                        </div>

                        @include('backend/admin/produk/putri/edit.form_fasilitas')

                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 4: Masukan Jarak Dengan Lokasi Darurat</strong>
                        </div>
                        @include('backend/admin/produk/putri/edit.form_jarak')
                    </div>
                    <div class="col-md-12 text-center">
                        <hr style="width: 50%" class="mt-0">
                        <button type="reset" name="reset" class="btn btn-danger btn-sm"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i>&nbsp;Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'deskripsi', {height:150});
        $(document).ready(function() {
            $('#table').DataTable({
                responsive : true,
            });
        } );

        $(document).on('change','#provinsi_id',function(){
            var provinsi_id = $(this).val();
            var div = $(this).parent().parent();
            var op=" ";
            $.ajax({
            type :'get',
            url: "{{ url('admin/wilayah/kecamatan/cari_kota') }}",
            data:{'provinsi_id':provinsi_id},
                success:function(data){
                    // alert(data['prodi'][0].prodiKodeUniv);
                    op+='<option value="0" selected disabled>-- pilih kota --</option>';
                    for(var i=0; i<data.length;i++){
                        // alert(data['jenis_publikasi'][i].provinsi_id);
                        op+='<option value="'+data[i].id+'">'+data[i].nm_kota+'</option>';
                    }
                    div.find('#kota_id').html(" ");
                    div.find('#kota_id').append(op);
                },
                    error:function(){
                }
            });
        })

        $(document).on('change','#kota_id',function(){
            var kota_id = $(this).val();
            var div = $(this).parent().parent();
            var op=" ";
            $.ajax({
            type :'get',
            url: "{{ url('admin/wilayah/kelurahan/cari_kecamatan') }}",
            data:{'kota_id':kota_id},
                success:function(data){
                    // alert(data['prodi'][0].prodiKodeUniv);
                    op+='<option value="0" selected disabled>-- pilih kecamatan --</option>';
                    for(var i=0; i<data.length;i++){
                        // alert(data['jenis_publikasi'][i].kota_id);
                        op+='<option value="'+data[i].id+'">'+data[i].nm_kecamatan+'</option>';
                    }
                    div.find('#kecamatan_id').html(" ");
                    div.find('#kecamatan_id').append(op);
                },
                    error:function(){
                }
            });
        });

        $(document).on('change','#kecamatan_id',function(){
            var kecamatan_id = $(this).val();
            var div = $(this).parent().parent();
            var op=" ";
            $.ajax({
            type :'get',
            url: "{{ url('admin/wilayah/kelurahan/cari_kelurahan') }}",
            data:{'kecamatan_id':kecamatan_id},
                success:function(data){
                    // alert(data['prodi'][0].prodiKodeUniv);
                    op+='<option value="0" selected disabled>-- pilih kelurahan --</option>';
                    for(var i=0; i<data.length;i++){
                        // alert(data['jenis_publikasi'][i].kecamatan_id);
                        op+='<option value="'+data[i].id+'">'+data[i].nm_kelurahan+'</option>';
                    }
                    div.find('#kelurahan_id').html(" ");
                    div.find('#kelurahan_id').append(op);
                },
                    error:function(){
                }
            });
        });
    </script>
@endpush