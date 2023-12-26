<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KscareController extends Controller
{
    public function index()
    {
        $kscare = DB::table('relawan')->get();
        return view('dataRelawan', ['kscare' => $kscare]);
    }


    public function form(?string $nir = null)
    {
        if ($nir) {
            $kscare = DB::table('relawan')->where('nir', $nir)->first();
            return view('tambahRelawan', ['kscare' => $kscare]);
        }
        return view('tambahRelawan', ['kscare' => null]);
    }

    //fungsi tambah
    public function tambah(Request $request)
    {
        try {
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                // Ubah path direktori sesuai dengan kebutuhan Anda
                $tujuan_upload = 'foto';
                $file->move($tujuan_upload, $nama_file);

                DB::table('relawan')->insert([
                    'nir' => $request->nir,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'alamat' => $request->alamat,
                    'no_telp' => $request->no_telp,
                    'foto' => $nama_file, // Simpan nama file foto ke dalam basis data
                ]);

                return redirect('/dataRelawan')->with('status', 'Data Berhasil Ditambahkan');
            } else {
                return redirect('/dataRelawan')->with('status', 'Foto Gagal Diunggah');
            }
        } catch (\Throwable $th) {
            return redirect('/dataRelawan')->with('status', 'Data Gagal Ditambahkan');
        }
    }


    //fungsi update
    public function ubah(Request $request, $nir)
    {
        try {
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                // Ubah path direktori sesuai dengan kebutuhan Anda
                $tujuan_upload = 'foto';
                $file->move($tujuan_upload, $nama_file);

                DB::table('relawan')->where('nir', $nir)->update([
                    'nir' => $request->nir,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'alamat' => $request->alamat,
                    'no_telp' => $request->no_telp,
                    'foto' => $nama_file, // Simpan nama file foto ke dalam basis data
                ]);

                return redirect('/dataRelawan')->with('status', 'Data Berhasil Diubah');
            } else {
                return redirect('/dataRelawan')->with('status', 'Foto Gagal Diunggah');
            }
        } catch (\Throwable $th) {
            return redirect('/dataRelawan')->with('status', 'Data Gagal Diubah');
        }
    }

    //fungsi hapus
    public function hapus($nir)
    {
        try {
            DB::table('relawan')->where('nir', $nir)->delete();
            return redirect('/dataRelawan')->with('status', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect('/dataRelawan')->with('status', 'Data Gagal Dihapus');
        }
    }
}
