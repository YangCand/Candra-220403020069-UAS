@extends('layout/app')

@section('content')
    <div style="padding: 30px;">
        <h1 style="text-align: center;">Data Relawan</h1>
        <div style="overflow-x: auto;">
            <a href="tambahRelawan">Tambah</a>
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; text-align: left;">
                <thead>
                    <tr style="background-color: #f2f2f2;">
                        <th style="padding: 12px;">NO</th>
                        <th style="padding: 12px;">Foto</th>
                        <th style="padding: 12px;">Nama</th>
                        <th style="padding: 12px;">NIR</th>
                        <th style="padding: 12px;">Jenis Kelamin</th>
                        <th style="padding: 12px;">Tanggal Lahir</th>
                        <th style="padding: 12px;">Alamat</th>
                        <th style="padding: 12px;">No.Telepon</th>
                        <th style="padding: 12px;">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kscare as $ksr)
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $loop->iteration }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">
                                @if ($ksr->foto == '')
                                    No Image
                                @else
                                    <img src="{{ URL::asset('foto/' . $ksr->foto) }}"style="width: 100px; height: 100px;">
                                @endif
                            </td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $ksr->nama }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $ksr->nir }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $ksr->jenis_kelamin }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $ksr->tanggal_lahir }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $ksr->alamat}}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $ksr->no_telp }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">
                                <a href="/ubahRelawan/{{ $ksr->nir }}" style="text-decoration: none; color: #2962ff; margin-right: 5px;">Edit</a>
                                <a href="/hapusRelawan/{{ $ksr->nir }}" style="text-decoration: none; color: #d50000;">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
