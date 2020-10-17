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
            <i class="fa fa-home"></i>&nbsp;Form Tambah Galeri Produk
        </header>
        <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
            <div class="row" style="margin-right:-15px; margin-left:-15px;">
                <div class="col-md-12">
                    <div class="alert alert-primary alert-block text-center" id="keterangan">
                        
                        <strong class="text-uppercase"><i class="fa fa-info-circle"></i>&nbsp;Perhatian: </strong><br> Silahkan tambahkan usulan kegiatan anda, harap melengkapi data terlebih dahulu agar proses pengajuan usulan tidak ada masalah kedepannya !!
                    </div>
                </div>
                <form action="{{ route('admin.keunggulan.post') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="col-md-12">
                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 1: Silahkan Inputkan Keunggulan</strong>
                        </div>
                        
                        @include('backend/admin/keunggulan/form')
                    </div>
                    <div class="col-md-12 text-center">
                        <hr style="width: 50%" class="mt-0">
                        <a href="{{ route('admin.keunggulan') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                        <button type="reset" name="reset" class="btn btn-warning btn-sm text-white"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i>&nbsp;Simpan Galeri</button>
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

    </script>
@endpush