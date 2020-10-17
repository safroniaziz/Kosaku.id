<li>
    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
</li>

<li><a><i class="fa fa-check-square"></i>Data Wilayah <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu"
        {{-- @if (Route::current()->getName() == "admin.produk_putri.add")
            style="display:block !important;"
        @endif --}}
    >
        <li
            {{-- @if (Route::current()->getName() == "admin.produk_putri.add")
                class="current-page"
            @endif --}}
        ><a href="{{ route('admin.wilayah.provinsi') }}">Data Provinsi</a></li>
        <li><a href="{{ route('admin.wilayah.kota') }}">Data Kota / Kabupaten</a></li>
        <li><a href="{{ route('admin.wilayah.kecamatan') }}">Data Kecamatan</a></li>
        <li><a href="{{ route('admin.wilayah.kelurahan') }}">Data Kelurahan</a></li>
    </ul>
</li>

<li><a><i class="fa fa-check-square"></i>Data Vendor Kostan <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu"
        @if (Route::current()->getName() == "admin.produk_putri.add" || Route::current()->getName() == "admin.produk_putri.detail" || Route::current()->getName() == "admin.produk_putri.add_galeri" || Route::current()->getName() == "admin.produk_putri.edit")
            style="display:block !important;"
        @endif
    >
        <li><a href="{{ route('admin.kategori') }}">Kategori Produk</a></li>
        <li
            @if (Route::current()->getName() == "admin.produk_putri.add" || Route::current()->getName() == "admin.produk_putri.detail" || Route::current()->getName() == "admin.produk_putri.add_galeri" || Route::current()->getName() == "admin.produk_putri.edit")
                class="current-page"
            @endif
        ><a href="{{ route('admin.produk_putri') }}">Produk Kostan</a></li>
    </ul>
</li>

<li><a><i class="fa fa-check-square"></i>Pengaturan Informasi <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu"
        @if (Route::current()->getName() == "admin.slider.add" || Route::current()->getName() == "admin.keunggulan.add" || Route::current()->getName() == "admin.keunggulan.edit")
            style="display:block !important;"
        @endif
    >
        <li
            @if (Route::current()->getName() == "admin.slider.add")
                class="current-page"
            @endif
        ><a href="{{ route('admin.slider') }}">Gambar Slider</a></li>
        <li
            @if (Route::current()->getName() == "admin.keunggulan.add" || Route::current()->getName() == "admin.keunggulan.edit")
                class="current-page"
            @endif
        ><a href="{{ route('admin.keunggulan') }}">Keunggulan Kami</a></li>
        <li><a href="{{ route('admin.wilayah.kelurahan') }}">Data Kelurahan</a></li>
    </ul>
</li>

<li><a><i class="fa fa-check-square"></i>Tim Kosaku <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu"
        {{-- @if (Route::current()->getName() == "admin.produk_putri.add")
            style="display:block !important;"
        @endif --}}
    >
        <li
            {{-- @if (Route::current()->getName() == "admin.produk_putri.add")
                class="current-page"
            @endif --}}
        ><a href="{{ route('admin.jabatan') }}">Data Jabatan</a></li>
    </ul>
</li>

<li style="padding-left:2px;">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <i class="fa fa-power-off text-danger"></i>{{__('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>