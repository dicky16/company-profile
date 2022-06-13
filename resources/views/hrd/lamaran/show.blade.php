@extends('hrd.master')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pelamar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="post.php">Post</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Detail Pelamar
                            </h3>
                            <div class="card-tools">
                                <a href="{{url('hrd/lamaran')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-responsive">
                                <tr>
                                    <td>
                                        <div class="col-auto">
                                            <label for="inputPassword6" class="col-form-label">Foto</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{url($pelamar->foto)}}" alt="" width="200" height="200">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Lowongan Kerja</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->lowongan}}</td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <label class="col-form-label">Lowongan Dibuka</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{date('d-m-Y', strtotime($pelamar->open))}}</td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <label class="col-form-label">Lowongan Ditutup</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{date('d-m-Y', strtotime($pelamar->close))}}</td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <label class="col-form-label">Tanggal Melamar</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{date('d-m-Y', strtotime($pelamar->created_at))}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="inputPassword6" class="col-form-label">Nama</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->nama_lengkap}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Tanggal Lahir</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{date('d-m-Y', strtotime($pelamar->tanggal_lahir))}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">NIK</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->nik}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Umur</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->umur}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Jenis Kelamin</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->jenis_kelamin}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">No Telepon</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->no_tlp}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Email</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->email}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="col-form-label">Link Sosial Media</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->link_sosmed}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Pendidikan Terakhir</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{strtoupper($pelamar->pendidikan_terakhir)}}</td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <label class="col-form-label">Sudah Bekerja ?</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->sudah_bekerja}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Terakhir Bekerja ?</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->terakhir_bekerja}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Lama Bekerja</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->lama_bekerja}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Jabatan Terakhir</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->jabatan_terakhir}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="col-form-label">Gaji terakhir</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->gaji_terakhir}}</td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="col-form-label">Nilai soal</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->nilai_soal}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="col-form-label">CV</label>
                                    </td>
                                    <td>
                                        <div class="col-auto">
                                            <embed src="{{url($pelamar->cv)}}" type="application/pdf" style="width: 100%; height: <?php echo (file_exists($pelamar->cv) ? '600px' : '100px') ?>" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="col-form-label">Score Pilihan Ganda</label>
                                    </td>
                                    <td style="vertical-align: middle;">{{$pelamar->score_pilgan}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-form-label">Status</label>
                                    </td>
                                    <td>
                                        <div class="col-auto">
                                            <select name="" class="form-select" id="status" onchange="putStatus();">
                                                <option value="">Status Pelamar</option>
                                                    <option value="verifikasi" {{($pelamar->status == 'verifikasi') ? 'selected' : ''}}>Belum Diverifikasi</option>
                                                    <option value="diterima" {{($pelamar->status == 'diterima') ? 'selected' : ''}}>Tahap Selanjutnya</option>
                                                    <option value="ditolak" {{($pelamar->status == 'ditolak') ? 'selected' : ''}}>Ditolak</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                            <!-- <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Foto</label>
                                </div>
                                <div class="col-auto">
                                    <img src="{{url($pelamar->foto)}}" alt="" width="200" height="200">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Nama</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="inputPassword6" value="{{$pelamar->nama_lengkap}}" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">Tanggal Lahir</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" value="{{$pelamar->tanggal_lahir}}" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                </div>
                            </div> -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function putStatus()
    {
        var status = $("#status").val();
        var idPelamar = "{{$pelamar->id}}";
        $.get("{{url('hrd/lamaran/status')}}/"+idPelamar,
        {
            status: status
        },
        function(data) {
            console.log(data);
            if(data.success) {
                window.location.reload();
            }
        });
    }
</script>
@endpush