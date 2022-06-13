<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Carbon\Carbon;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('berita')->orderBy('id', 'desc')->get();
        return view('admin.berita.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $rilis = ($request->rilis == "on") ? 1 : 0;
        unset($data['_token']);
        try {
            $destination = "assets/images/berita/berita-" . time() . "." . $request->file('gambar')->extension();
            move_uploaded_file($request->file('gambar'), $destination);
            DB::table('berita')->insert(array_merge(
                $data,
                [
                    'gambar' => $destination,
                    'id_user' => session('id'),
                    'rilis' => $rilis
                ]
            ));
            return redirect('admin/berita')->with('sukses', 'Berhasil tambah data');
        } catch (\Throwable $th) {
            return redirect('admin/berita/create')->with('error', $th->getMessage());
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
        $berita = DB::table('berita')
            ->select('berita.*', 'user.nama')
            ->leftJoin('user', 'berita.id_user', '=', 'user.id')
            ->where('berita.id', $id)
            ->get();
        return view('admin.berita.show', ['berita' => $berita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = DB::table('berita')
            ->select('berita.*', 'user.nama')
            ->leftJoin('user', 'berita.id_user', '=', 'user.id')
            ->where('berita.id', $id)
            ->get();
        return view('admin.berita.edit', ['berita' => $berita]);
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
                $destination = "assets/images/berita/berita-" . time() . "." . $request->file('gambar')->extension();
                move_uploaded_file($request->file('gambar'), $destination);
                $pathDelete = DB::table('berita')->where('id', $id)->value('gambar');
                File::delete($pathDelete);
                DB::table('berita')
                    ->where('id', $id)
                    ->update(array_merge(
                        $data,
                        [
                            'gambar' => $destination,
                            'updated_at' => Carbon::now(),
                            'rilis' => $rilis
                        ]
                    ));
                return redirect('admin/berita')->with('sukses', 'Berhasil ubah data');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', $th->getMessage());
            }
        } else {
            unset($data['gambar']);
            try {
                DB::table('berita')
                    ->where('id', $id)
                    ->update(array_merge($data, ['rilis' => $rilis, 'updated_at' => Carbon::now()]));
                return redirect('admin/berita')->with('sukses', 'Berhasil ubah data');
            } catch (\Throwable $th) {
                dd($th->getMessage());
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
        try {
            $gambar = DB::table('berita')->where('id', $id)->value('gambar');
            File::delete($gambar);
            DB::table('berita')->where('id', $id)->delete();
            return redirect('admin/berita')->with('success', 'Berhasil hapus berita');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
