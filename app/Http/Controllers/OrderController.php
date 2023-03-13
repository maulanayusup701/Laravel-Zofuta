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

        $waktu_now = Carbon::now();
        $day_now = Carbon::now();
        $tanggal_main = $request->input('tanggal_main');
        $jam_mulai = $request->input('jam_mulai');
        $jam_selesai = $request->input('jam_selesai');
        $jamconv = Carbon::createFromFormat('H:m', $jam_mulai);
        $result_jam_selesai = $jamconv->addHours($jam_selesai);
        $tanggalconv = Carbon::createFromFormat('d/m/Y', $tanggal_main);

        //sub total
        $durasi = $request->input('durasi');
        $sub_total = intval($field_harga_sewa) * intval($durasi);

        $data = [
            'user_id' => auth()->user()->id,
            'gor_id' => $request->input('gor_id'),
            'field_id' => $field_id,
            'sub_total' => $sub_total,
            // 'foto_struk' => '' //nulleble
            'durasi' => $durasi
        ];

        if ($tanggalconv->lt($day_now)) {
            return 'Tanggal yang Anda pilih sudah lewat';
        } else {
            $data['tanggal_main'] = $tanggalconv;
        }

        if ($jamconv->lt($waktu_now)) {
            return $data['jam_mulai'] = $jam_mulai;
        } else {
            return 'jam bisa disimpan';
        }
    }
}
