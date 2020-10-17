@extends('layouts.backend')
@section('title', 'Data Produk')
@section('login_as', 'Administrator')
@section('user-login')
    {{-- @if (Auth::check())
    {{ Auth::user()->nm_user }}
    @endif --}}
@endsection
@section('user-login2')
    {{-- @if (Auth::check())
    {{ Auth::user()->nm_user }}
    @endif --}}
@endsection
@section('sidebar-menu')
    @include('backend/admin/sidebar')
@endsection
@section('content')
    <section class="panel" style="margin-bottom:20px;">
        <header class="panel-heading" style="color: #ffffff;background-color: #074071;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
            <i class="fa fa-home"></i>&nbsp;Manajemen Skim Penelitian
        </header>
        <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
            <div class="row" style="margin-right:-15px; margin-left:-15px;">
                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block" id="berhasil">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><i class="fa fa-info-circle"></i>&nbsp;Berhasil: </strong> {{ $message }}
                        </div>
                    @endif
                    <div class="alert alert-primary alert-block" id="keterangan">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong><i class="fa fa-info-circle"></i>&nbsp;Perhatian: </strong> Berikut adalah semua kategori produk yang tersedia, silahkan tambahkan kategori produk baru jika diperlukan !!
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('admin.produk_putri.add') }}" style="color:white; cursor:pointer;" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Produk Putri</a>
                </div>

                @include('backend/admin/kategori.add')

                <div class="col-md-12">
                    <table class="table table-striped table-bordered" id="table" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemilik</th>
                                <th>Nama Vendor</th>
                                <th>Harga</th>
                                <th>Thumbnail</th>
                                <th>Status Kerja Sama</th>
                                <th>Ubah Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($produks as $produk)
                                <tr>
                                    <td> {{ $no++ }} </td>
                                    <td> {{ $produk->nm_pemilik }} </td>
                                    <td> {{ $produk->nm_vendor }} </td>
                                    <td> {{ $produk->harga_sewa }} </td>
                                    <td>
                                        <img src="{{ asset('storage/'.$produk->foto_thumbnail) }}" style="width: 100px;" alt="">
                                    </td>
                                    <td class="text-center">
                                        @if ($produk->status == "1")
                                            <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i></label>
                                            @else
                                            <label for="" class="badge badge-danger"><i class="fa fa-close"></i></label>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($produk->status == "1")
                                            <form action="{{ route('admin.produk_putri.non_aktifkan_status', [$produk->id]) }}" method="POST">
                                                {{ csrf_field() }} {{ method_field('PATCH') }}
                                                <button type="submit" class="btn btn-danger btn-sm" style="color:white; cursor:pointer;"><i class="fa fa-thumbs-down"></i></button>
                                            </form>
                                            @else
                                            <form action="{{ route('admin.produk_putri.aktifkan_status', [$produk->id]) }}" method="POST">
                                                {{ csrf_field() }} {{ method_field('PATCH') }}
                                                <button type="submit" class="btn btn-primary btn-sm" style="color:white; cursor:pointer;"><i class="fa fa-thumbs-up"></i></button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.produk_putri.detail',[$produk->id, $produk->slug]) }}" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i>&nbsp; Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                responsive: true,
            });
        } );
    </script>
@endpush