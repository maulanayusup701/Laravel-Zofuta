<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Auth\Events\Validated;

class OrderController extends Controller
{
    public function orderStore(Request $request)
    {
        $field = explode('|', $request->input('field'));
        $field_id = $field[0];
        $field_harga_sewa = $field[1];

        //sub total
        $durasi = $request->input('durasi') . " jam";
        $sub_total = intval($field_harga_sewa) * intval($durasi);
        $durasi = intval($durasi);

        //tanggal inputan user
        $tanggal_inputan_user = $request->input('tanggal_main');
        $tanggal_inputan_usercon = Carbon::createFromFormat('d-m-Y', $tanggal_inputan_user);
        $tanggal_user = $tanggal_inputan_usercon->day;
        $bulan_user = $tanggal_inputan_usercon->month;
        $tahun_user = $tanggal_inputan_usercon->year;

        $tanggal_sekarang = Carbon::now()->day;
        $bulan_sekarang = Carbon::now()->month;
        $tahun_sekarang = Carbon::now()->year;

        $jam_mulai = $request->input('jam_mulai');
        $jam_inputan_usercon = Carbon::createFromFormat('H:i', $jam_mulai);
        $waktu_sekarang = Carbon::now();

        $jam_mulai = Carbon::parse($jam_mulai);
        $jam_selesai = $jam_mulai->addHours($durasi);

        if ($tanggal_user < $tanggal_sekarang) {
            return 'masukan kembali tanggal';
        } else {
            if ($bulan_user < $bulan_sekarang) {
                return 'masukan kembali bulan';
            } else {
                if ($tahun_user < $tahun_sekarang) {
                    return 'masukan kembali tahun';
                } else {
                    if ($jam_inputan_usercon->lt($waktu_sekarang)) {
                        return 'jam_sudah lewat';
                    } else {
                        $datas = [
                            'id_user' => auth()->user()->id,
                            'gor_id' => $request->input('gor_id'),
                            'field_id' => $field_id,
                            'harga_sewa' => $field_harga_sewa,
                            'subtotal' => $sub_total,
                            'jam_mulai' => $jam_inputan_usercon->format('H:i'),
                            'jam_selesai' => $jam_selesai->format('H:i'),
                            'durasi' => $durasi,
                            // 'foto_struk' => '' //nulleble
                            'tanggal_main' => '',
                            'status' => 'Waiting for Payment'
                        ];
                        $tgl = $tanggal_user . "-" . $bulan_user . "-" . $tahun_user;
                        $date = Carbon::createFromFormat('d-m-Y', $tgl)->format('d-m-Y');
                        $datas['tanggal_main'] = $date;
                        $datas['user_id'] = auth()->user()->id;

                        Order::create($datas);
                        return redirect('/profile')->with('success', 'Please make payment and upload struck for validation');
                    }
                }
            }
        }
    }
}
