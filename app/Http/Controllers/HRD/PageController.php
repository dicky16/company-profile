<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function dashboard()
    {
        $totalVisitor = 0;
        $totalPelamarUmur = [0, 0, 0, 0];
        $totalPelamarPengalaman = [0, 0, 0, 0, 0];
        $totalPelamarPendidikan = [0, 0, 0, 0, 0, 0];
        $totalLowongan = DB::table('lowongan_kerja')->count('id');
        $totalPelamar = DB::table('pelamar')->count('id');
        if ($lowongan = DB::table('lowongan_kerja')->get()) {
            foreach ($lowongan as $row) {
                $totalVisitor += intval($row->visitor);
            }
        }
        if ($pelamar = DB::table('pelamar')->get()) {
            foreach ($pelamar as $row) {
                if ($row->sudah_bekerja === 'belum') {
                    $totalPelamarPengalaman[0] += 1;
                } elseif ($row->sudah_bekerja === 'iya') {
                    if (floatval($row->lama_bekerja) > 0 && floatval($row->lama_bekerja) <= 1) {
                        $totalPelamarPengalaman[1] += 1;
                    } elseif (floatval($row->lama_bekerja) > 1 && floatval($row->lama_bekerja) <= 2) {
                        $totalPelamarPengalaman[2] += 1;
                    } elseif (floatval($row->lama_bekerja) > 2 && floatval($row->lama_bekerja) <= 3) {
                        $totalPelamarPengalaman[3] += 1;
                    } elseif (floatval($row->lama_bekerja) > 3) {
                        $totalPelamarPengalaman[4] += 1;
                    }
                }

                if (intval($row->umur) >= 18 && intval($row->umur) <= 25) {
                    $totalPelamarUmur[0] += 1;
                } elseif (intval($row->umur) >= 26 && intval($row->umur) <= 30) {
                    $totalPelamarUmur[1] += 1;
                } elseif (intval($row->umur) >= 31 && intval($row->umur) <= 40) {
                    $totalPelamarUmur[2] += 1;
                } elseif (intval($row->umur) > 40) {
                    $totalPelamarUmur[3] += 1;
                }

                switch ($row->pendidikan_terakhir) {
                    case 'smp':
                        $totalPelamarPendidikan[0] += 1;
                        break;
                    case 'sma':
                        $totalPelamarPendidikan[1] += 1;
                        break;
                    case 'd1':
                        $totalPelamarPendidikan[2] += 1;
                        break;
                    case 'd2':
                        $totalPelamarPendidikan[3] += 1;
                        break;
                    case 'd3':
                        $totalPelamarPendidikan[4] += 1;
                        break;
                    case 's1':
                        $totalPelamarPendidikan[5] += 1;
                        break;
                }
            }
        }

        return view('hrd.dashboard', compact(
            'totalLowongan',
            'totalPelamar',
            'totalVisitor',
            'totalPelamarUmur',
            'totalPelamarPengalaman',
            'totalPelamarPendidikan',
        ));
    }

    public function profil()
    {
        return view('hrd.profil');
    }
}
