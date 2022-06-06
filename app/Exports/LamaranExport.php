<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Lamaran;
use Maatwebsite\Excel\Concerns\FromView;

// class LamaranExport implements FromQuery, WithHeadings
class LamaranExport implements FromView
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */
    public $params = 0;

    public function setParams(int $params)
    {
        $this->params = $params;
        return $this;
    }

    // public function query()
    // {
    //     return Lamaran::query()->where('id_lowongan_kerja', "$this->params")->where('status', 'diterima')->orWhere('status', 'interview');
    // }

    public function view(): View
    {
        $lamaran = DB::table('pelamar')
            ->leftJoin('lowongan_kerja', 'pelamar.id_lowongan_kerja', '=', 'lowongan_kerja.id')
            ->select('pelamar.*', 'lowongan_kerja.name')
            ->where('pelamar.id_lowongan_kerja', "$this->params")
            ->where('pelamar.status', 'diterima')
            ->orWhere('pelamar.status', 'interview')
            ->get();
        return view('export.lamaran', ['lamaran' => $lamaran]);
    }

    // public function headings(): array
    // {
    //     return [
    //         'ID',
    //         'Nama',
    //         'Tanngal Lahir',
    //         'NIK',
    //         'Umur',
    //         'Jenis Kelamin',
    //         'Kewarganegaraan',
    //         'No Telepon',
    //         'Email',
    //         'Link Portofolio',
    //         'Link Medsos',
    //         'Sudah Bekerja',
    //         '',
    //         '',
    //         '',
    //         'KTP',
    //         'Foto',
    //         'CV',
    //         'Kelebihan dan Kekurangan',
    //         'Skill',
    //         'Skill Tambahan',
    //         'Created At',
    //         '',
    //         'Score Pilgan'
    //     ];
    // }
}
