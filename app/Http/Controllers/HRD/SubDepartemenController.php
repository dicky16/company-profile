<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubDepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subDepartemens = DB::table('sub_departemen')
            ->select('sub_departemen.*', 'department.name as departemen')
            ->leftJoin('department', 'sub_departemen.id_department', '=', 'department.id')
            ->orderBy('sub_departemen.id', 'desc')->get();
        return view('hrd.sub-departemen.index', ['subDepartemens' => $subDepartemens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemens = DB::table('department')->get();
        return view('hrd.sub-departemen.create', ['departemens' => $departemens]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subDepartemen = $request->all();
        unset($subDepartemen['_token']);
        try {
            DB::table('sub_departemen')->insert($subDepartemen);
            return redirect()->route('sub-departemen.index')->with('success', 'Add Sub-Departemen Successfully');
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
        $departemens = DB::table('department')->get();
        $subDepartemen = DB::table('sub_departemen')->where('id', $id)->get();
        return view('hrd.sub-departemen.edit', ['subDepartemen' => $subDepartemen[0], 'departemens' => $departemens]);
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
        $subDepartemen = $request->all();
        unset($subDepartemen['_token']);
        unset($subDepartemen['_method']);
        try {
            DB::table('sub_departemen')
                ->where('id', $id)
                ->update($subDepartemen);
            return redirect()->route('sub-departemen.index')->with('success', 'Update Sub-Departemen Successfully');
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
            DB::table('sub_departemen')->where('id', $id)->delete();
            return redirect()->route('sub-departemen.index')->with('success', 'Delete Sub-Departemen Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
