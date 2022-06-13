<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSoals = DB::table('soal')
            ->select('soal.*', 'lowongan_kerja.name as lowongan')
            ->leftJoin('lowongan_kerja', 'soal.id_lowongan_kerja', '=', 'lowongan_kerja.id')
            ->orderBy('soal.id', 'desc')
            ->get();
        if (count($dataSoals) > 0) {
            for ($i = 0; $i < count($dataSoals); $i++) {
                $soals[] = [
                    'id' => $dataSoals[$i]->id,
                    'lowongan' => $dataSoals[$i]->lowongan,
                    'pertanyaan' => $dataSoals[$i]->pertanyaan,
                    'jawaban' => DB::table('jawaban')->where('id_soal', $dataSoals[$i]->id)->get()
                ];
            }
            return view('hrd.soal.index', ['soals' => $soals]);
        }
        return view('hrd.soal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lowongans = DB::table('lowongan_kerja')->orderBy('id', 'desc')->get();
        return view('hrd.soal.create', ['lowongans' => $lowongans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idLowongaKerja = $request->id_lowongan_kerja;
        $pertanyaan = $request->pertanyaan;

        try {
            $id = DB::table('soal')->insertGetId(['id_lowongan_kerja' => $idLowongaKerja, 'pertanyaan' => $pertanyaan]);

            for ($i = 0; $i < count($request->pilihan); $i++) {
                $jawaban[] = [
                    'pilihan' => $request->pilihan[$i],
                    'jawaban' => $request->jawaban[$i],
                    'score' => $request->score[$i],
                    'id_soal' => $id
                ];
            }

            DB::table('jawaban')->insert($jawaban);
            return redirect()->route('soal.index')->with('success', 'Add Soal successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lowongans = DB::table('lowongan_kerja')->get();
        $soal = DB::table('soal')->where('id', $id)->get();
        $jawabans = DB::table('jawaban')->where('id_soal', $soal[0]->id)->get();
        // dd($jawaban);
        return view('hrd.soal.edit', compact('lowongans', 'soal', 'jawabans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idLowongaKerja = $request->id_lowongan_kerja;
        $pertanyaan = $request->pertanyaan;

        try {
            DB::table('soal')
                ->where('id', $id)
                ->update(['id_lowongan_kerja' => $idLowongaKerja, 'pertanyaan' => $pertanyaan]);

            for ($i = 0; $i < count($request->pilihan); $i++) {
                $jawaban[] = [
                    'pilihan' => $request->pilihan[$i],
                    'jawaban' => $request->jawaban[$i],
                    'score' => $request->score[$i],
                    'id_soal' => $id
                ];
            }
            DB::table('jawaban')->where('id_soal', $id)->delete();
            DB::table('jawaban')->insert($jawaban);
            return redirect()->route('soal.index')->with('success', 'Update Soal successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('jawaban')->where('id_soal', $id)->delete();
            DB::table('soal')->where('id', $id)->delete();
            return redirect()->route('soal.index')->with('success', 'Delete Soal successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
