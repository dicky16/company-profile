<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = DB::table('skill')
            ->select('skill.*', 'lowongan_kerja.name as lowongan')
            ->leftJoin('lowongan_kerja', 'skill.id_lowongan_kerja', '=', 'lowongan_kerja.id')
            ->orderBy('id', 'desc')
            ->get();
        return view('hrd.skill.index', ['skills' => $skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lowongans = DB::table('lowongan_kerja')->get();
        return view('hrd.skill.create', ['lowongans' => $lowongans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idLowongan = $request->id_lowongan;
        $skill = $request->skill;
        $skillString = "";
        for ($i = 0; $i < count($skill); $i++) {
            $skillString .= $skill[$i] . ', ';
        }
        $skillString = substr($skillString, 0, -2);
        try {
            DB::table('skill')->insert([
                'id_lowongan_kerja' => $idLowongan,
                'skill' => $skillString
            ]);
            return redirect()->route('skill.index')->with('success', 'Add Skill Successfully');
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
        //
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
        $skill = DB::table('skill')
            ->select('skill.*', 'lowongan_kerja.name as lowongan')
            ->leftJoin('lowongan_kerja', 'skill.id_lowongan_kerja', '=', 'lowongan_kerja.id')
            ->orderBy('id', 'desc')
            ->get();
        return view('hrd.skill.edit', ['skill' => $skill[0], 'lowongans' => $lowongans]);
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
        $idLowongan = $request->id_lowongan;
        $skill = $request->skill;
        $skillString = "";
        for ($i = 0; $i < count($skill); $i++) {
            $skillString .= $skill[$i] . ', ';
        }
        $skillString = substr($skillString, 0, -2);
        try {
            DB::table('skill')
                ->where('id', $id)
                ->update([
                    'id_lowongan_kerja' => $idLowongan,
                    'skill' => $skillString
                ]);
            return redirect()->route('skill.index')->with('success', 'Add Skill Successfully');
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
            DB::table('skill')->where('id', $id)->delete();
            return redirect()->route('skill.index')->with('success', 'Delete Skill Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
