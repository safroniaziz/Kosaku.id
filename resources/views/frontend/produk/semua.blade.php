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

<!-- Properties section start -->
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12 col-md-push-4">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-2">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
                                <span class="hidden-xs">Daftar Produk</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 cod-pad">
                            <div class="sorting-options">
                                <select class="sorting" name="sorting">
                                    <option>Baru Ke Lama</option>
                                    <option>Lama Ke Baru</option>
                                    <option>Harga Murah Ke Tinggi</option>
                                    <option>Harga Tinggi Ke Murah</option>
                                </select>
                                <a class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                <a class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Option bar end -->
                <div class="clearfix"></div>

                <div class="row">
                    @foreach ($produks as $produk)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <a href="{{ route('produk.detail',[$produk->slug]) }}">
                                <div class="property-img">
                                    <div class="property-tag button alt featured">{{ $produk->jenis_kategori == 'putri' ? 'Khusus Putri' : ($produk->jenis_kategori == 'putra' ? 'Khusus Putra' : 'Campuran') }}</div>
                                    @if ($produk->diskon >0)
                                        <div class="property-tag button sale">Sedang Diskon</div>
                                        @else
                                        <div class="property-tag button sale">Harga Normal</div>
                                    @endif
                                    <div class="property-price">
                                        Rp.{{ number_format($produk->harga_sewa) }}
                                    <b style="color:black; font-size:12px;">Rp.{{ number_format($produk->harga_sewa - $produk->diskon) }}</b>
                                        @if ($produk->diskon>0)
                                            
                                        @endif
                                    </div>
                                    <img src="{{ asset('storage/'.$produk->foto_thumbnail) }}" alt="fp" class="img-responsive">
                                    <div class="property-overlay">
                                        
                                    </div>
                                </div>
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <h1 class="title">
                                    <a href="{{ route('produk.detail',[$produk->slug]) }}">{{ $produk->nm_vendor }}</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;Ada {{ $produk->kamar_kosong }} Kamar Kosong Dari {{ $produk->jumlah_kamar }} Kamar Tersedia</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="{{ route('produk.detail',[$produk->slug]) }}">
                                        <i class="fa fa-map-marker"></i>{{ $produk->nm_kelurahan }},{{ $produk->nm_kecamatan }},{{ $produk->nm_kota }}
                                    </a>
                                </h3>
                             
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Admin Kosaku</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($produk->created_at)->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    {{ $produks->links() }}
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-md-pull-8">
                <!-- Search contents sidebar start -->
                <div class="sidebar-widget">
                    <div class="main-title-2">
                        <h1><span>Pencarian</span> Produk</h1>
                    </div>

                    <form method="GET">
                        <div class="form-group">
                            <select name="provinsi_id" class="form-control search-fields custom-select minimal" id="provinsi_id">
                                <option value="semua">Semua Provinsi</option>
                                @foreach ($provinsis as $provinsi)
                                    <option value="{{ $provinsi->id }}">{{ $provinsi->nm_provinsi }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('provinsi_id'))
                                <small class="form-text text-danger">{{ $errors->first('provinsi_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <select name="kota_id" id="kota_id" class="form-control search-fields custom-select minimal">
                                <option value="semua">Semua Kota</option>
                            </select>
                            @if ($errors->has('kota_id'))
                                <small class="form-text text-danger">{{ $errors->first('kota_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <select name="kecamatan_id" id="kecamatan_id" class="form-control search-fields custom-select minimal">
                                <option value="semua">Semua Kecamatan</option>
                            </select>
                            @if ($errors->has('kecamatan_id'))
                                <small class="form-text text-danger">{{ $errors->first('kecamatan_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <select name="kelurahan_id" id="kelurahan_id" class="form-control search-fields custom-select minimal">
                                <option value="semua">Semua Kelurahan</option>
                            </select>
                            @if ($errors->has('kelurahan_id'))
                                <small class="form-text text-danger">{{ $errors->first('kelurahan_id') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <select name="jenis" id="jenis" class="form-control search-fields custom-select minimal">
                                <option value="semua">Semua Kategori</option>
                                <option value="pondokan">Pondokan</option>
                                <option value="kontrakan">Kontrakan</option>
                            </select>
                            @if ($errors->has('jenis'))
                                <small class="form-text text-danger">{{ $errors->first('jenis') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <select name="jenis" id="jenis" class="form-control search-fields custom-select minimal">
                                <option value="semua">Campuran</option>
                                <option selected value="putri">Khusus Putri</option>
                                <option value="putra">Khusus Putra</option>
                            </select>
                            @if ($errors->has('jenis'))
                                <small class="form-text text-danger">{{ $errors->first('jenis') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <select name="jenis" id="jenis" class="form-control search-fields custom-select minimal">
                                <option value="semua">Semua Harga</option>
                                <option value="4">1 - 4 Juta</option>
                                <option value="7">5-7 Juta</option>
                                <option value="8">>7 Juta</option>
                            </select>
                            @if ($errors->has('jenis'))
                                <small class="form-text text-danger">{{ $errors->first('jenis') }}</small>
                            @endif
                        </div>

                        <div class="form-group mb-0">
                            <button class="search-button">Search</button>
                        </div>
                    </form>
                </div>

                <!-- Helping box Start -->
                <div class="sidebar-widget helping-box clearfix">
                    <div class="main-title-2">
                        <h1><span>Pusat</span> Informasi</h1>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <h4>Email</h4>
                        <p> kosakujaya@gmail.com / hello@kosaku.id</p>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h4>Telephone / WhatsApp</h4>
                        <p><a href="https://api.whatsapp.com/send?phone=6285709586249&text=Hallo%20Kosaku%20Saya%20Mau%20Bertanya%20Mengenai%20Kostan%20Yang%20Ada%20Di%20Website%20Nih.">0857-0958-6249</a> </p>
                    </div>
                </div>

                <!-- Latest reviews start -->
                <div class="sidebar-widget latest-reviews mb-30">
                    <div class="main-title-2">
                        <h1><span>Terakhir</span> Ditambahkan</h1>
                    </div>
                    @foreach ($latest as $last)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('storage/'.$last->foto_thumbnail) }}" alt="avatar-1">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">{{ $last->nm_vendor }}</a></h3>
                            <div class="rating">
                                @if ($last->diskon > 0)
                                    Rp. {{ number_format($last->harga_sewa - $last->diskon,2) }}
                                    @else
                                    Rp. {{ number_format($last->harga_sewa,2) }}
                                @endif
                            </div>
                            <p>
                                {{ $produk->nm_kelurahan }},{{ $produk->nm_kecamatan }},{{ $produk->nm_kota }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties section end -->

@endsection

@push('scripts')
<script>
    $(document).on('change','#provinsi_id',function(){
        var provinsi_id = $(this).val();
        var div = $(this).parent().parent();
        var op=" ";
        $.ajax({
        type :'get',
        url: "{{ url('rumah_kosaku/wilayah/kecamatan/cari_kota') }}",
        data:{'provinsi_id':provinsi_id},
            success:function(data){
                op+='<option value="0" selected disabled>-- pilih kota --</option>';
                for(var i=0; i<data.length;i++){
                    // alert(data[i].id);
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
        url: "{{ url('rumah_kosaku/wilayah/kelurahan/cari_kecamatan') }}",
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
        url: "{{ url('rumah_kosaku/wilayah/kelurahan/cari_kelurahan') }}",
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