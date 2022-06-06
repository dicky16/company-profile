<table class="table table-bordered">
    <thead>
        <tr>
            <th>Lowongan Kerja</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>NIK</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Link Sosial Media</th>
            <th>Sudah Bekerja?</th>
            <th>Terakhir Bekerja?</th>
            <th>Lama Bekerja</th>
            <th>Jabatan Terakhir</th>
            <th>Gaji Terakhir</th>
            <th>Nilai Soal</th>
            <th>Skor Pilihan Ganda</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lamaran as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->nama_lengkap }}</td>
                <td>{{ $row->tanggal_lahir }}</td>
                <td>{{ $row->nik }}</td>
                <td>{{ $row->umur }}</td>
                <td>{{ $row->jenis_kelamin }}</td>
                <td>{{ $row->no_tlp }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->link_sosmed }}</td>
                <td>{{ $row->sudah_bekerja }}</td>
                <td>{{ $row->terakhir_bekerja }}</td>
                <td>{{ $row->lama_bekerja }}</td>
                <td>{{ $row->jabatan_terakhir }}</td>
                <td>{{ $row->gaji_terakhir }}</td>
                <td>{{ $row->nilai_soal }}</td>
                <td>{{ $row->score_pilgan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>