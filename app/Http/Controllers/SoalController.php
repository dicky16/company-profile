<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class soalController extends Controller
{
    public function index()
    {
        if (session('nik')) {
            return view('user.soal.soal');
        } else {
            return redirect('career');
        }
    }

    public function dataSoal($id)
    {
        // session()->put('nik', 'ok');
        // dd(session('nik'));
        $nik = session('nik');
        if ($nik) {
            try {
                $dataSoal = DB::table('soal')->where('id_lowongan_kerja', $id)->get();
                $soal = [];
                for ($i = 0; $i < count($dataSoal); $i++) {
                    $jawaban = DB::table('jawaban')->where('id_soal', $dataSoal[$i]->id)->get();
                    $jawabanPelamar = DB::table('jawaban_pelamar')
                        ->where('id_soal', $dataSoal[$i]->id)
                        ->where('id_pelamar', session('nik'))
                        ->get();
                    $stateJawaban = 0;
                    if (count($jawabanPelamar) > 0) {
                        $stateJawaban = $jawabanPelamar[0]->id_jawaban;
                    }
                    $soal[$i] = [
                        'soal' => $dataSoal[$i]->pertanyaan,
                        'id_soal' => $dataSoal[$i]->id,
                        'jawaban' => $jawaban,
                        'id_pelamar' => session('nik'),
                        'id_jawaban' => $stateJawaban
                    ];
                }
                return response()->json([
                    'status' => true,
                    'data' => $soal
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'error' => $th->getMessage(),
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'id_lowongan' => $id
            ]);
        }
    }

    public function simpanJawaban()
    {
        $nik = session('nik');
        $score = 0;
        $idPelamar = DB::table('pelamar')->where('nik', $nik)->value('nik');
        $jawaban = DB::table('jawaban_pelamar')
            ->select('jawaban_pelamar.*', 'jawaban.score')
            ->leftJoin('jawaban', 'jawaban_pelamar.id_jawaban', '=', 'jawaban.id')
            ->where('id_pelamar', $idPelamar)->get();
        // dd($jawaban);
        for ($i = 0; $i < count($jawaban); $i++) {
            $score += $jawaban[$i]->score;
        }
        try {
            DB::table('pelamar')->where('nik', $nik)->update([
                'score_pilgan' => $score
            ]);
            return response()->json([
                'status' => true
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'error' => $th->getMessage()
            ]);
        }
    }

    public function updateJawaban(Request $request)
    {
        $idSoal = $request->id_soal;
        $idJawaban = $request->id_jawaban;
        $idPelamar = $request->id_pelamar;
        $checkJawaban = DB::table('jawaban_pelamar')
            ->where('id_pelamar', $idPelamar)
            ->where('id_soal', $idSoal)
            ->get();
        if (count($checkJawaban) > 0) {
            try {
                DB::table('jawaban_pelamar')
                    ->where('id_pelamar', $idPelamar)
                    ->where('id_soal', $idSoal)
                    ->update(['id_jawaban' => $idJawaban]);
                return response()->json([
                    'status' => true
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'error' => $th->getMessage()
                ]);
            }
        } else {
            try {
                DB::table('jawaban_pelamar')->insert([
                    'id_soal' => $idSoal,
                    'id_pelamar' => $idPelamar,
                    'id_jawaban' => $idJawaban
                ]);
                return response()->json([
                    'status' => true
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'error' => $th->getMessage()
                ]);
            }
        }
    }
}
