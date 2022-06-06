@extends('admin.master')
@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ url('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pesan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/pesan')}}">Pesan</a></li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Detail Pesan
                            </h3>
                            <div class="card-tools">
                                <a href="{{url('admin/pesan')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="judul text-center">
                                <div class="h2 mt-2">{{$pesan[0]->nama}}</div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-around mb-2">
                                <div class="created_at">created_at: {{$pesan[0]->created_at}}</div>
                                <div class="updated_at">updated_at: {{$pesan[0]->updated_at}}</div>
                                <div class="released">Released: <span class="badge bg-success">{{$pesan[0]->status}}</span></div>
                                <div class="penulis">Writer: {{$pesan[0]->nama}}</div>
                            </div>
                            <div class="isi">
                                {!! $pesan[0]->pesan !!}
                            </div> -->
                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label class="col-form-label">Nama</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" aria-describedby="passwordHelpInline" value="{{$pesan[0]->nama}}">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label class="col-form-label">Email</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" aria-describedby="passwordHelpInline" value="{{$pesan[0]->email}}">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label class="col-form-label">Nomor HP</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" aria-describedby="passwordHelpInline" value="{{$pesan[0]->no_hp}}">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label class="col-form-label">Pesan</label>
                                </div>
                                <div class="col-6">
                                    <textarea name="" id="" cols="70" rows="10">{{$pesan[0]->pesan}}</textarea>
                                    <!-- <input type="text" class="form-control" aria-describedby="passwordHelpInline" value="{{$pesan[0]->pesan}}"> -->
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-2">
                                    <label class="col-form-label">Status</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" aria-describedby="passwordHelpInline" 
                                    value="{{($pesan[0]->status == 1) ? 'sudah dibalas' : 'belum dibalas'}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- Summernote -->
<script src="{{ url('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ url('assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    })
</script>
@endsection