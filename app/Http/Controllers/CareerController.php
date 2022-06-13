<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('query');
        if ($query) {
            $lowonganKerjas = DB::table('lowongan_kerja')
                ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
                ->where('lowongan_kerja.name', 'like', '%' . $query . '%')
                ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
                ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
                ->paginate(8);
        } else {
            $lowonganKerjas = DB::table('lowongan_kerja')
                ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
                ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
                ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
                ->paginate(8);
        }
        $department = DB::table('department')->get();
        return view('user.career.index', ['lowonganKerjas' => $lowonganKerjas, 'department' => $department]);
    }

    public function show($id)
    {
        $lowonganKerjas = DB::table('lowongan_kerja')
            ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
            ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
            ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
            ->paginate(8);

        $lowonganKerja = DB::table('lowongan_kerja')
            ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
            ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
            ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
            ->where('lowongan_kerja.id', $id)
            ->get();
        // dd($lowonganKerjas);
        //update visitor
        $visitor = $lowonganKerja[0]->visitor;
        DB::table('lowongan_kerja')->where('id', $id)->update(['visitor' => $visitor + 1]);
        return view('user.career.show', ['lowonganKerja' => $lowonganKerja[0], 'lowongans' => $lowonganKerjas]);
    }

    public function form($id)
    {
        // $skills = DB::table('skill')->where('id_lowongan_kerja', $id)->get();
        $lowonganKerja = DB::table('lowongan_kerja')->where('id', $id)->get();
        // dd($lowonganKerja);
        if ($lowonganKerja) {
            $skills = explode(', ', $lowonganKerja[0]->skill);
        } else {
            $skills = '';
        }
        // dd($skills);
        return view('user.career.form', ['skills' => $skills, 'lowonganKerja' => $lowonganKerja[0]]);
    }

    public function store(Request $request, $id)
    {
        $rules = [
            'nama_lengkap' => 'required',
            'nik' => 'required|size:16',
            'tanggal_lahir' => 'required|date',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required',
            'email' => 'required|email',
            'link_sosmed' => 'required',
            'pendidikan_terakhir' => 'required',
            'sudah_bekerja' => 'required',
            'cv' => 'required|mimes:pdf',
            'foto' => 'required|image',
            'nilai_soal' => 'required',
        ];

        $data = $request->all();
        if ($data['sudah_bekerja'] === 'iya') {
            $rules['terakhir_bekerja'] = 'required';
            $rules['lama_bekerja'] = 'required';
            $rules['gaji_terakhir'] = 'required';
        }

        $nik = $request->nik;
        $email = $request->email;
        $checkNIK = DB::table('pelamar')->where('nik', $nik)->orWhere('email', $email)->get();
        if (count($checkNIK) > 0) {
            $request->session()->put('nik', $nik);
            // return redirect("soal/".$checkNIK[0]->id_lowongan_kerja);
            return redirect('career')->with('error', 'Email dan NIK sudah terdaftar!');
        }

        $request->session()->put('nama_lengkap', $data['nama_lengkap'] ?? '');
        $request->session()->put('tanggal_lahir', $data['tanggal_lahir'] ?? '');
        $request->session()->put('nik', $data['nik'] ?? '');
        $request->session()->put('umur', $data['umur'] ?? '');
        $request->session()->put('jenis_kelamin', $data['jenis_kelamin'] ?? '');
        $request->session()->put('no_tlp', $data['no_tlp'] ?? '');
        $request->session()->put('email', $data['email'] ?? '');
        $request->session()->put('link_sosmed', $data['link_sosmed'] ?? '');
        $request->session()->put('pendidikan_terakhir', $data['pendidikan_terakhir'] ?? '');
        $request->session()->put('sudah_bekerja', $data['sudah_bekerja'] ?? '');
        $request->session()->put('terakhir_bekerja', $data['terakhir_bekerja'] ?? '');
        $request->session()->put('lama_bekerja', $data['lama_bekerja'] ?? '');
        $request->session()->put('jabatan_terakhir', $data['jabatan_terakhir'] ?? '');
        $request->session()->put('gaji_terakhir', $data['gaji_terakhir'] ?? '');
        $request->session()->put('nilai_soal', $data['nilai_soal'] ?? '');

        $request->validate($rules);

        unset($data['_token']);
        $foto = $request->file('foto');
        $cv = $request->file('cv');

        $namaFoto = 'foto-' . time() . '.' . $foto->extension();
        $namaCv = 'cv-' . time() . '.' . $cv->extension();

        $lokasiFoto = 'assets/pelamar/foto';
        $lokasiCV = 'assets/pelamar/cv';

        try {

            // dd($skill);
            $foto->move($lokasiFoto, $namaFoto);

            $cv->move($lokasiCV, $namaCv);
            DB::table('pelamar')->insert(
                array_merge($data, [
                    'foto' => $lokasiFoto . '/' . $namaFoto,

                    'cv' => $lokasiCV . '/' . $namaCv,

                    'id_lowongan_kerja' => $id
                ])
            );
            // $request->session()->put('nik', $data['nik']);
            return redirect('soal/' . $id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function indexByDepartemen($id)
    {
        $lowonganKerjas = DB::table('lowongan_kerja')
            ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
            ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
            ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
            ->where('lowongan_kerja.id_department', $id)
            ->paginate(8);
        $department = DB::table('department')->get();
        return view('user.career.index', ['lowonganKerjas' => $lowonganKerjas, 'department' => $department]);
    }

    public function getCareer(Request $request)
    {
        $query = $request->get('query');
        try {
            $lowonganKerjas = DB::table('lowongan_kerja')
                ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
                ->where('lowongan_kerja.name', 'like', '%' . $query . '%')
                ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
                ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
                ->paginate(8);
            // $lowonganKerjas = DB::table('lowongan_kerja')
            // ->select('lowongan_kerja.*', 'department.name as departemen', 'sub_departemen.name as sub_departemen')
            // ->leftJoin('department', 'lowongan_kerja.id_department', '=', 'department.id')
            // ->leftJoin('sub_departemen', 'lowongan_kerja.id_sub_department', '=', 'sub_departemen.id')
            // ->paginate(8);
            $department = DB::table('department')->get();
            return view('user.career.index', ['lowonganKerjas' => $lowonganKerjas, 'department' => $department]);
            // return response()->json([
            //     'success' => true,
            //     'data' => $lowonganKerjas
            // ]);
        } catch (\Throwable $th) {
            // return response()->json([
            //     'success' => false,
            //     'error' => $th->getMessage()
            // ]);
        }
    }
}
