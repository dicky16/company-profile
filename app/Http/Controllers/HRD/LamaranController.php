<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LamaranExport;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $status = $data['status'] ?? '';
        if (isset($data['status'])) {
            $lamarans = DB::table('pelamar')
                ->select('pelamar.*', 'lowongan_kerja.name as lowongan')
                ->leftJoin('lowongan_kerja', 'pelamar.id_lowongan_kerja', '=', 'lowongan_kerja.id')
                ->where('pelamar.status', '=', $data['status'])
                ->orderBy('pelamar.id', 'desc')
                ->get();
        } else {
            $lamarans = DB::table('pelamar')
                ->select('pelamar.*', 'lowongan_kerja.name as lowongan')
                ->leftJoin('lowongan_kerja', 'pelamar.id_lowongan_kerja', '=', 'lowongan_kerja.id')
                ->orderBy('pelamar.id', 'desc')
                ->get();
        }
        $lowongans = DB::table('lowongan_kerja')->orderBy('id', 'desc')->get();
        return view('hrd.lamaran.index', [
            'lamarans' => $lamarans,
            'lowongans' => $lowongans,
            'status' => $status
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lamaran = DB::table('pelamar')
            ->select('pelamar.*', 'lowongan_kerja.name as lowongan', 'lowongan_kerja.open as open', 'lowongan_kerja.close as close')
            ->leftJoin('lowongan_kerja', 'pelamar.id_lowongan_kerja', '=', 'lowongan_kerja.id')
            ->where('pelamar.id', $id)->get();
        return view('hrd.lamaran.show', ['pelamar' => $lamaran[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
            DB::table('pelamar')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Berhasil hapus pelamar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', $th->getMessage());
        }
    }

    public function export($id)
    {
        return (new LamaranExport)->setParams($id)->download('pelamar armas.xlsx');
    }

    public function putStatus(Request $request, $id)
    {
        $status = $request->status;
        try {
            DB::table('pelamar')->where('id', $id)->update(['status' => $status]);
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ]);
        }
    }
}
