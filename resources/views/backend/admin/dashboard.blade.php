@extends('layouts.backend')
@section('title', 'Dashboard')
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
    @include('backend/admin.sidebar')
@endsection
@push('styles')
    <!-- Styles -->
    <style>
        #chartdiv, #chartdiv2 {
            width: 100%;
            height: 200px;
        }

        #chartdiv3, #chartdiv4 {
            width: 100%;
            height: 300px;
        }
    </style>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading" style="color: #ffffff;background-color: #074071;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
                    <i class="fa fa-bar-chart"></i>&nbsp;Statistik Data Aplikasi
                </header>
                <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
                    <div class="row">
                        <div class="col-lg-3 col-xs-3 col-md-3" style="padding-bottom:10px !important;">
                            <!-- small box -->
                            <div class="small-box bg-aqua" style="margin-bottom:0px;">
                                <div class="inner">

                                <p>Jumlah Vendor</p>
                                </div>
                                <div class="icon">
                                <i class="fa fa-list"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-3 col-md-3" style="padding-bottom:10px !important;">
                            <!-- small box -->
                            <div class="small-box bg-red" style="margin-bottom:0px;">
                                <div class="inner">

                                <p>Jumlah Kamar Kost</p>
                                </div>
                                <div class="icon">
                                <i class="fa fa-list-alt"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-3 col-md-3" style="padding-bottom:10px !important;">
                            <!-- small box -->
                            <div class="small-box bg-yellow" style="margin-bottom:0px;">
                                <div class="inner">

                                <p>Jumlah Transaksi</p>
                                </div>
                                <div class="icon">
                                <i class="fa fa-wpforms"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-3 col-md-3" style="padding-bottom:10px !important;">
                            <!-- small box -->
                            <div class="small-box bg-green" style="margin-bottom:0px;">
                                <div class="inner">

                                <p>Jumlah Customer Terdaftar</p>
                                </div>
                                <div class="icon">
                                <i class="fa fa-check-circle"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row" style="margin-bottom:10px; margin-top:10px;">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading" style="color: #ffffff;background-color: #074071;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
                    <i class="fa fa-bar-chart"></i>&nbsp;Statistik Pengeluaran Per Bulan
                </header>
                <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- @section('charts')
                                chart.data = [
                                    @foreach ($penelitians as $data)
                                        {
                                            "country": "{{ substr($data['nm_skim'],11) }}",
                                            "litres": {{ $data['jumlah'] }}
                                        },
                                    @endforeach
                                ];
                            @endsection --}}
                            <div id="chartdiv"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading" style="color: #ffffff;background-color: #074071;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
                    <i class="fa fa-bar-chart"></i>&nbsp;Statistik Pemasukan Per Bulan
                </header>
                <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- @section('charts2')
                                chart.data = [
                                    @foreach ($pengabdians as $data)
                                        {
                                            "country2": "{{ $data['nm_skim'] }}",
                                            "litres2": {{ $data['jumlah'] }}
                                        },
                                    @endforeach
                                ];
                            @endsection --}}
                            <div id="chartdiv2"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection