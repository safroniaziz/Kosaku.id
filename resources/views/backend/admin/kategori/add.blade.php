<div class="col-md-12" style="display:none;" id="form-kategori">
    <hr style="width:50% !important;">
    <form action="" method="POST" action="{{ route('admin.kategori.post') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Nama Kategori</label>
            <input type="text" name="nm_kategori" id="nm_kategori" class="form-control @error('nm_kategori') is-invalid @enderror" placeholder="masukan nama kategori">
            @error('nm_kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-12" style="text-align:center;">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>&nbsp; Simpan Data</button>
            <button type="reset" class="btn btn-warning btn-sm text-white"><i class="fa fa-refresh"></i>&nbsp; Ulangi</button>
            <a onclick="batalkan()" class="btn btn-danger btn-sm text-white" style="cursor: pointer"><i class="fa fa-close"></i>&nbsp; Batalkan</a>
        </div>
    </form>
    <hr style="width:50%;">
</div>

@push('scripts')
    <script>
            @if($errors->has('nm_kategori'))
                $('#form-kategori').show();
            @endif
    </script>
@endpush