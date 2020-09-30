<li>
    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
</li>

<li>
    <a href="{{ route('admin.kategori') }}"><i class="fa fa-tag"></i>Kategori Produk</a>
</li>

<li><a><i class="fa fa-check-square"></i>Data Vendor Kostan <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu"
        @if (Route::current()->getName() == "admin.produk_putri.add")
            style="display:block !important;"
        @endif
    >
        <li
            @if (Route::current()->getName() == "admin.produk_putri.add")
                class="current-page"
            @endif
        ><a href="{{ route('admin.produk_putri') }}">Kost Putri</a></li>
        <li><a href="{{ route('admin.produk_putri') }}">Kost Putra</a></li>
        <li><a href="{{ route('admin.produk_putri') }}">Kost Campuran</a></li>
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