<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lamaran(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('hrd.lamaran.laporan');
        } elseif ($request->isMethod('post')) {
            $request->validate([
                'date_start' => 'required|date',
                'date_end' => 'required|date',
            ]);

            $data = $request->all();
            unset($data['_token']);
            $laporanPelamar = [];

            $pelamar = DB::table('pelamar')
                ->select('pelamar.*', 'lowongan_kerja.name as lowongan')
                ->leftJoin('lowongan_kerja', 'lowongan_kerja.id', '=', 'pelamar.id_lowongan_kerja')
                ->whereBetween('pelamar.created_at', [$data['date_start'], $data['date_end']])
                ->orderBy('pelamar.id', 'desc')
                ->get();

            foreach ($pelamar as $row) {
                if (!isset($laporanPelamar[strtoupper($row->lowongan)])) {
                    $laporanPelamar[strtoupper($row->lowongan)]['semua'] = 0;
                    $laporanPelamar[strtoupper($row->lowongan)]['diterima'] = 0;
                    $laporanPelamar[strtoupper($row->lowongan)]['ditolak'] = 0;
                    $laporanPelamar[strtoupper($row->lowongan)]['pendaftaran'] = 0;
                }

                $laporanPelamar[strtoupper($row->lowongan)]['semua'] += 1;
                if ($row->status === 'diterima') {
                    $laporanPelamar[strtoupper($row->lowongan)]['diterima'] += 1;
                } elseif ($row->status === 'ditolak') {
                    $laporanPelamar[strtoupper($row->lowongan)]['ditolak'] += 1;
                } else {
                    $laporanPelamar[strtoupper($row->lowongan)]['pendaftaran'] += 1;
                }
            }

            $params = [
                'laporanPelamar' => $laporanPelamar,
                'date_start' => $data['date_start'],
                'date_end' => $data['date_end'],
            ];

            return view('hrd.lamaran.laporan', $params);
        }
    }
}
