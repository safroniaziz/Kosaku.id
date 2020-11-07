@extends('layouts.produks')
@section('produk-title')
    Semua Kost-Kostan
@endsection
@section('second-title')
    Klik Untuk Informasi Lengkap
@endsection
@section('third-title')
    Pilih kostan yang anda inginkan    
@endsection
@section('produk-content')
    <!-- property section start -->
<div class="properties-section-body content-area" style="padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Option bar Start -->
                <div class="option-bar">
                    <div class="row">
                       <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                           <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
                                <span class="hidden-xs">Kost-Kostan Rekomendasi</span>
                            </h4>
                        </div>
                   </div>
               </div>
               <!-- Option bar end -->
                <div class="clearfix"></div>

                <!-- Property grid start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Perhatian : Khusus Kost-Kostan Rekomendasi, Maka Customer Akan Mendapatkan Penjemputan Barang Gratis Seputar Kota Bengkulu, dan Gratis Isi Ulang Air Galon Sebanyak 15 Kali
                        </div>
                    </div>
                    @foreach ($rekomendasis as $rekomendasi)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">{{ $rekomendasi->jenis_kategori == 'putri' ? 'Khusus Putri' : ($rekomendasi->jenis_kategori == 'putra' ? 'Khusus Putra' : 'Campuran') }}</div>
                                <div class="property-tag button sale">{{ $rekomendasi->nm_kategori }}</div>
                                <div class="property-price">Rp.{{ number_format($rekomendasi->harga_sewa) }}</div>
                                <img src="{{ asset('storage/'.$rekomendasi->foto_thumbnail) }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="{{ route('produk.detail',[$rekomendasi->slug]) }}">{{ $rekomendasi->nm_vendor }}</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;Ada {{ $rekomendasi->kamar_kosong }} Kamar Kosong Dari {{ $rekomendasi->jumlah_kamar }} Kamar Tersedia</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="{{ route('produk.detail',[$rekomendasi->slug]) }}">
                                        <i class="fa fa-map-marker"></i>{{ $rekomendasi->nm_kelurahan }},{{ $rekomendasi->nm_kecamatan }},{{ $rekomendasi->nm_kota }}
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="{{ $rekomendasi->wifi == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>WIFI</span>
                                    </li>
                                    <li>
                                        <i class="{{ $rekomendasi->ac == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>AC</span>
                                    </li>
                                    <li>
                                        <i class="{{ $rekomendasi->lahan_parkir == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>Lahan Parkir </span>
                                    </li>
                                    <li>
                                        <i class="{{ $rekomendasi->pengamanan == "1" ? 'fa fa-check-circle' : 'fa fa-close'  }}"></i>
                                        <span>Penjaga Kost</span>
                                    </li>
                                    <li>
                                        <i class="{{ $rekomendasi->listrik == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>Listrik</span>
                                    </li>
                                    <li>
                                        <i class="{{ $rekomendasi->air == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span> Air Bersih</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Admin Kosaku</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($rekomendasi->created_at)->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    @endforeach
                </div>
                <!-- Property grid end -->

                <!-- Option bar Start -->
                <div class="option-bar">
                    <div class="row">
                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">
                           <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
                                <span class="hidden-xs">Kost-Kostan Lainnya</span>
                            </h4>
                        </div>
                   </div>
               </div>
               <!-- Option bar end -->
                <div class="clearfix"></div>

                <!-- Property grid start -->
                <div class="row">
                    @foreach ($produks as $all)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">{{ $all->jenis_kategori == 'putri' ? 'Khusus Putri' : ($all->jenis_kategori == 'putra' ? 'Khusus Putra' : 'Campuran') }}</div>
                                <div class="property-tag button sale">{{ $all->nm_kategori }}</div>
                                <div class="property-price">Rp.{{ number_format($all->harga_sewa) }}</div>
                                <img src="{{ asset('storage/'.$all->foto_thumbnail) }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="{{ route('produk.detail',[$all->slug]) }}">{{ $all->nm_vendor }}</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;Ada {{ $all->kamar_kosong }} Kamar Kosong Dari {{ $all->jumlah_kamar }} Kamar Tersedia</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="{{ route('produk.detail',[$all->slug]) }}">
                                        <i class="fa fa-map-marker"></i>{{ $all->nm_kelurahan }},{{ $all->nm_kecamatan }},{{ $all->nm_kota }}
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="{{ $all->wifi == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>WIFI</span>
                                    </li>
                                    <li>
                                        <i class="{{ $all->ac == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>AC</span>
                                    </li>
                                    <li>
                                        <i class="{{ $all->lahan_parkir == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>Lahan Parkir </span>
                                    </li>
                                    <li>
                                        <i class="{{ $all->pengamanan == "1" ? 'fa fa-check-circle' : 'fa fa-close'  }}"></i>
                                        <span>Penjaga Kost</span>
                                    </li>
                                    <li>
                                        <i class="{{ $all->listrik == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span>Listrik</span>
                                    </li>
                                    <li>
                                        <i class="{{ $all->air == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                        <span> Air Bersih</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Admin Kosaku</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($all->created_at)->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    @endforeach
                </div>
                <!-- Property grid end -->
            </div>
        </div>
    </div>
</div>
<!-- property end -->

@endsection