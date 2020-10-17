<div class="form-group col-md-12">
    <div class="col-md-3">
        <table>
                <tr>
                    <td>1. </td>
                    <td>
                        Kamar Mandi Dalam
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="kamar_mandi_dalam" value="1" {{ $produk->kamar_mandi_dalam == "1" ? 'checked' : '' }}>
                        <label for="1">Tersedia</label> <br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="kamar_mandi_dalam" value="0" {{ $produk->kamar_mandi_dalam == "0" ? 'checked' : '' }}>
                        <label for="0">Tidak Tersedia</label> <br>
                    </td>
                </tr>
                @if ($errors->has('kamar_mandi_dalam'))
                    <small class="form-text text-danger">{{ $errors->first('kamar_mandi_dalam') }}</small>
                @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
                <tr>
                    <td>2. </td>
                    <td>
                        Dapur Dalam Kamar
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="dapur_dalam" value="1"{{ $produk->dapur_dalam == "1" ? 'checked' : '' }}>
                        <label for="1">Tersedia</label> <br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="dapur_dalam" value="0"{{ $produk->dapur_dalam == "0" ? 'checked' : '' }}>
                        <label for="0">Tidak Tersedia</label> <br>
                    </td>
                </tr>
                @if ($errors->has('dapur_dalam'))
                    <small class="form-text text-danger">{{ $errors->first('dapur_dalam') }}</small>
                @endif
        </table>
    </div>

    <div class="col-md-3">
        <table>
            <tr>
                <td>3. </td>
                <td>
                    Kamar Mandi Umum
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="kamar_mandi_umum" value="1"{{ $produk->kamar_mandi_umum == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="kamar_mandi_umum" value="0"{{ $produk->kamar_mandi_umum == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('kamar_mandi_umum'))
                <small class="form-text text-danger">{{ $errors->first('kamar_mandi_umum') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>4. </td>
                <td>
                    Dapur Umum
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="dapur_umum" value="1"{{ $produk->dapur_umum == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="dapur_umum" value="0"{{ $produk->dapur_umum == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('dapur_umum'))
                <small class="form-text text-danger">{{ $errors->first('dapur_umum') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>5. </td>
                <td>
                    Koneksi Interner
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="wifi" value="1"{{ $produk->wifi == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="wifi" value="0"{{ $produk->wifi == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('wifi'))
                <small class="form-text text-danger">{{ $errors->first('wifi') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>6. </td>
                <td>
                    Air Konditioner (AC)
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="ac" value="1"{{ $produk->ac == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="ac" value="0"{{ $produk->ac == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('ac'))
                <small class="form-text text-danger">{{ $errors->first('ac') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>7. </td>
                <td>
                    Kasur            
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="kasur" value="1"{{ $produk->kasur == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="kasur" value="0"{{ $produk->kasur == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('kasur'))
                <small class="form-text text-danger">{{ $errors->first('kasur') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>8. </td>
                <td>
                    Lemari
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="lemari" value="1"{{ $produk->lemari == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="lemari" value="0"{{ $produk->lemari == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('lemari'))
                <small class="form-text text-danger">{{ $errors->first('lemari') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>9. </td>
                <td>
                    Lahan Parkir
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="lahan_parkir" value="1"{{ $produk->lahan_parkir == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="lahan_parkir" value="0"{{ $produk->lahan_parkir == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('lahan_parkir'))
                <small class="form-text text-danger">{{ $errors->first('lahan_parkir') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>10. </td>
                <td>
                    Listrik
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="listrik" value="1"{{ $produk->listrik == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="listrik" value="0"{{ $produk->listrik == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('listrik'))
                <small class="form-text text-danger">{{ $errors->first('listrik') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>11. </td>
                <td>
                    Air Bersih
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="air" value="1"{{ $produk->air == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="air" value="0"{{ $produk->air == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('air'))
                <small class="form-text text-danger">{{ $errors->first('air') }}</small>
            @endif
        </table>
    </div>
    <div class="col-md-3">
        <table>
            <tr>
                <td>12. </td>
                <td>
                    Penjaga Kost
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="pengamanan" value="1"{{ $produk->pengamanan == "1" ? 'checked' : '' }}>
                    <label for="1">Tersedia</label> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="pengamanan" value="0"{{ $produk->pengamanan == "0" ? 'checked' : '' }}>
                    <label for="0">Tidak Tersedia</label> <br>
                </td>
            </tr>
            @if ($errors->has('pengamanan'))
                <small class="form-text text-danger">{{ $errors->first('pengamanan') }}</small>
            @endif
        </table>
    </div>
</div>