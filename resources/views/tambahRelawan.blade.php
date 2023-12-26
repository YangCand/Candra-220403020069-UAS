@extends('layout/app')
@section('content')

<center>
    @if(empty($kscare))
        <h1>Tambah Data Relawan</h1>
        <form action="/tambahRelawan" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table>
            <tr>
                <td><label for="nir">NIR</label></td>
                <td><input type="text" name='nir' id='nir' required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name='nama' id='nama' required></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                <td><input type="text" name='jenis_kelamin' id='jenis_kelamin' required></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" name='tanggal_lahir' id='tanggal_lahir' required></td>
            </tr>
            <tr>
                <td><label for="no_telp">No Telphone</label></td>
                <td><input type="text" name='no_telp' id='no_telp' required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><textarea type="text" name='alamat' id='alamat' required></textarea></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td><input type="file" name="foto" id="foto" accept="image/*"></td>
            </tr>
            <tr colspan=2>
                <td><button type="submit">Tambah</button></td>
            </tr>
        </table>
        </form>
        
        @else
        <h1>Update Data Relawan</h1>
        <form action="/ubahRelawan/{{$kscare->nir}}" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td><label for="nir">NIR</label></td>
                <td><input type="text" name='nir' id='nir' value="{{$kscare->nir}}" readonly></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name='nama' id='nama' value="{{$kscare->nama}}"  required></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                <td><input type="text" name='jenis_kelamin' id='jenis_kelamin' value="{{$kscare->jenis_kelamin}}" required></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" name='tanggal_lahir' id='tanggal_lahir' value="{{$kscare->tanggal_lahir}}" required></td>
            </tr>
            <tr>
                <td><label for="no_telp">No Telphone</label></td>
                <td><input type="text" name='no_telp' id='no_telp' value="{{$kscare->no_telp}}" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="text" name='alamat' id='alamat' value="{{$kscare->alamat}}" required></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td><input type="file" name="foto" id="foto" accept="public/foto"></td>
            </tr>
            <tr colspan=2>
                <td><button type="submit">Ubah</button></td>
            </tr>
        </table>
        </form>
        @endif
</center>
@endsection