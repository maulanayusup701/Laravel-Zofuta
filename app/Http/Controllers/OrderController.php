<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function orderStore(Request $request)
    {
        $field = explode('|', $request->input('field'));
        $field_id = [0];
        $field_harga_sewa = [1];
        $user = auth()->user()->fullname;
        $durasi = $request->input('durasi');
        $waktu_now = Carbon::now();
        $day_now = Carbon::now();
        $tanggal_main = $request->input('tanggal_main');
        $jam_mulai = $request->input('jam_mulai');
        $jamconv = Carbon::createFromFormat('H:m', $jam_mulai);
        $tanggalconv = Carbon::createFromFormat('d/m/Y', $tanggal_main);

        if ($tanggalconv->lt($day_now)) {
            echo 'Tanggal yang Anda pilih sudah lewat';
        } else {
            echo 'Tanggal yang Anda pilih bisa digunakan.';
        }

        if ($jamconv->lt($waktu_now)) {
            return 'jam bisa disimpan';
        } else {
            return 'Jam yang ada isi sudah lewat. inputkan kembali.';
        }

        $data = $request->validate([
            'user_id' => 'required',
            'gor_id' => 'required',
            'field_id' => 'required',
            'jam_mulai' => 'required',
            'durasi' => 'required',
            'foto_struk' => 'required',
            'status' => '',
        ]);
    }
}
