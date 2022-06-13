<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Carbon\Carbon;

class PenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('penghargaan')->get();
        return view('admin.penghargaan.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penghargaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rilis = ($request->rilis == "on") ? 1 : 0;
        $data = $request->all();
        unset($data['_token']);
        try {
            $destination = "assets/images/penghargaan/penghargaan-" . time() . "." . $request->file('gambar')->extension();
            move_uploaded_file($request->file('gambar'), $destination);
            DB::table('penghargaan')->insert(array_merge(
                $data,
                [
                    'gambar' => $destination,
                    'id_user' => session('id'),
                    'rilis' => $rilis
                ]
            ));
            return redirect()->route('penghargaan.index')->with('success', 'Add data successfully');
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
        $penghargaan = DB::table('penghargaan')
            ->select('penghargaan.*', 'user.nama')
            ->leftJoin('user', 'penghargaan.id_user', '=', 'user.id')
            ->where('penghargaan.id', $id)
            ->get();
        return view('admin.penghargaan.show', ['penghargaan' => $penghargaan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penghargaan = DB::table('penghargaan')
            ->select('penghargaan.*', 'user.nama')
            ->leftJoin('user', 'penghargaan.id_user', '=', 'user.id')
            ->where('penghargaan.id', $id)
            ->get();
        return view('admin.penghargaan.edit', ['penghargaan' => $penghargaan[0]]);
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
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        $rilis = ($request->rilis == "on") ? 1 : 0;
        if ($request->file('gambar')) {
            try {
                $destination = "assets/images/penghargaan/berita-" . time() . "." . $request->file('gambar')->extension();
                move_uploaded_file($request->file('gambar'), $destination);
                $pathDelete = DB::table('penghargaan')->where('id', $id)->value('gambar');
                File::delete($pathDelete);
                DB::table('penghargaan')
                    ->where('id', $id)
                    ->update(array_merge(
                        $data,
                        [
                            'gambar' => $destination,
                            'updated_at' => Carbon::now(),
                            'rilis' => $rilis
                        ]
                    ));
                return redirect('admin/penghargaan')->with('success', 'Berhasil ubah data');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', $th->getMessage());
            }
        } else {
            unset($data['gambar']);
            try {
                DB::table('penghargaan')
                    ->where('id', $id)
                    ->update(array_merge($data, ['rilis' => $rilis, 'updated_at' => Carbon::now()]));
                return redirect('admin/penghargaan')->with('success', 'Berhasil ubah data');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', $th->getMessage());
            }
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
        //
    }
}
