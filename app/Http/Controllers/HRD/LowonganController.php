<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongans = DB::table('lowongan_kerja')
            ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
            ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
            ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
            ->orderBy('lowongan_kerja.id', 'desc')
            ->get();
        return view('hrd.lowongan.index', ['lowongans' => $lowongans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemens = DB::table('department')->get();
        return view('hrd.lowongan.create', ['departemens' => $departemens]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id_department' => 'required',
            'id_sub_department' => 'required',
            'name' => 'required',
            'description' => 'required',
            'open' => 'required|date',
            'close' => 'required|date|after:open',
            'cover' => 'required|image',
        ];

        $lowongan = $request->all();
        unset($lowongan['_token']);
        $request->session()->put('id_department', $lowongan['id_department'] ?? '');
        $request->session()->put('id_sub_department', $lowongan['id_sub_department'] ?? '');
        $request->session()->put('name', $lowongan['name'] ?? '');
        $request->session()->put('description', $lowongan['description'] ?? '');
        $request->session()->put('open', $lowongan['open'] ?? '');
        $request->session()->put('close', $lowongan['close'] ?? '');
        $request->validate($rules);

        try {
            $cover = $request->file('cover');
            $coverName = time() . "." . $cover->extension();
            $destination = "assets/images/lowongan";
            $cover->move($destination, $coverName);



            $data = array_merge($lowongan, ['cover' => $destination . "/" . $coverName]);
            $idLowongan = DB::table('lowongan_kerja')->insertGetId($data);
            //store skill
            // $skill = $request->skill;
            // $skillString = "";
            // for ($i=0; $i < count($skill); $i++) { 
            //     $skillString .= $skill[$i].', ';
            // }
            // $skillString = substr($skillString, 0, -2);
            // // dd($skillString);
            //     DB::table('skill')->insert([
            //         'id_lowongan_kerja' => $idLowongan,
            //         'skill' => $skillString
            //     ]);

            return redirect()->route('lowongan.index')->with('success', 'Add Lowongan Successfully');
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
        $lowongan = DB::table('lowongan_kerja')->where('id', $id)->get();
        $skills = explode(", ", $lowongan[0]->skill);
        return view('hrd.lowongan.show', compact('lowongan', 'skills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departemens = DB::table('department')->get();
        $lowongan = DB::table('lowongan_kerja')->where('id', $id)->get();
        // dd($lowongan);
        if ($lowongan) {
            $subDepartemens = DB::table('sub_departemen')->where('id_department', $lowongan[0]->id_department)->get();
            // dd($subDepartemens);

            return view('hrd.lowongan.edit', [
                'lowongan' => $lowongan[0],
                'departemens' => $departemens,
                'subDepartemens' => $subDepartemens,

            ]);
        }
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
        $rules = [
            'id_department' => 'required',
            'id_sub_department' => 'required',
            'name' => 'required',
            'description' => 'required',
            'open' => 'required|date',
            'close' => 'required|date|after:open',
        ];

        $lowongan = $request->all();
        unset($lowongan['_token'], $lowongan['_method'], $lowongan['cover']);
        $request->session()->put('id_department', $lowongan['id_department'] ?? '');
        $request->session()->put('id_sub_department', $lowongan['id_sub_department'] ?? '');
        $request->session()->put('name', $lowongan['name'] ?? '');
        $request->session()->put('description', $lowongan['description'] ?? '');
        $request->session()->put('open', $lowongan['open'] ?? '');
        $request->session()->put('close', $lowongan['close'] ?? '');
        $request->validate($rules);

        if ($request->file('cover')) {
            try {
                $cover = $request->file('cover');
                $coverName = time() . "." . $cover->extension();
                $destination = "assets/images/lowongan";
                $cover->move($destination, $coverName);

                $coverOld = DB::table('lowongan_kerja')->where('id', $id)->value('cover');
                File::delete($coverOld);

                // ]));
                return redirect()->route('lowongan.index')->with('success', 'Update Lowongan Successfully');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', $th->getMessage());
            }
        } else {
            try {

                DB::table('lowongan_kerja')->where('id', $id)->update(array_merge($lowongan));
                return redirect()->route('lowongan.index')->with('success', 'Update Lowongan Successfully');
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
        try {
            $cover = DB::table('lowongan_kerja')->where('id', $id)->value('cover');
            File::delete($cover);
            DB::table('lowongan_kerja')->where('id', $id)->delete();
            return redirect()->route('lowongan.index')->with('success', 'Delete Lowongan Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function getSubDepartements($id)
    {
        try {
            $subDepartemens = DB::table('sub_departemen')->where('id_department', $id)->get();
            return response()->json([
                'status' => 'success',
                'sub_departemen' => $subDepartemens
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'msg' => $th->getMessage(),
            ]);
        }
    }
}
