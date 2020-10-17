@extends('layouts.backend')
@section('title', 'Data Provinsi')
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
            <i class="fa fa-home"></i>&nbsp;Manajemen Data Provinsi
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
                        <strong><i class="fa fa-info-circle"></i>&nbsp;Perhatian: </strong> Berikut adalah semua data provinsi yang tersedia, silahkan tambahkan provinsi baru atau generate ulang jika diperlukan !!
                    </div>
                </div>
                <div class="col-md-12">
                    <a onclick="tambah()" style="color:white; cursor:pointer;" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Data Provinsi</a>
                </div>
                <div class="col-md-12" id="formtambah" style="display: none">
                    <form action="{{ route('admin.wilayah.provinsi.post') }}" method="POST">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <hr width="50%">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="">Tambahkan Provinsi</label>
                                <input type="text" name="nm_provinsi" value="{{ old('nm_provinsi') }}" class="form-control">
                                @if ($errors->has('nm_provinsi'))
                                    <small class="form-text text-danger">{{ $errors->first('nm_provinsi') }}</small>
                                @endif
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>&nbsp; Simpan Data</button>
                                <button type="reset" class="btn btn-warning btn-sm text-white"><i class="fa fa-refresh"></i>&nbsp; Ulangi</button>
                                <a onclick="batalkan()" class="btn btn-danger btn-sm text-white" style="cursor: pointer"><i class="fa fa-close"></i>&nbsp; Batalkan</a>
                            </div>
                        </div>
                        <hr width="50%">
                    </form>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" id="table" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($provinsis as $provinsi)
                                <tr>
                                    <td> {{ $no++ }} </td>
                                    <td> {{ $provinsi->nm_provinsi }} </td>
                                    <td>
                                        <a onclick="hapusProvinsi({{ $provinsi->id }})" class="btn btn-danger btn-sm text-white" style="cursor: pointer;"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Modal Hapus -->
                    <div class="modal modal-danger fade" id="modalhapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header modal-header-danger">
                                <p style="font-size:15px;" class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i>&nbsp;Form Konfirmasi Hapus Data Skim</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            Apakah anda yakin akan menghapus skim ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-light btn-sm " style="color:white;" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close</button>
                                <form method="POST" action="{{ route('admin.wilayah.provinsi.delete') }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="id" id="id">
                                    <button type="submit" class="btn btn-outline-light btn-sm" style="color:white;"><i class="fa fa-check-circle"></i>&nbsp; Ya, Hapus Data !</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
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

        function tambah(){
            $('#formtambah').show(300);
        }
        
        function batalkan(){
            $('#formtambah').hide(300);
        }

        function hapusProvinsi(id){
            $('#modalhapus').modal('show');
            $('#id').val(id);
        }

        @if($errors->has('nm_provinsi'))
            $('#formtambah').show();
        @endif
    </script>
@endpush