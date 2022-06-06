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
                    <h1 class="m-0">Detail Penghargaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('penghargaan.index')}}">Penghargaan</a></li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Detail Penghargaan
                            </h3>
                            <div class="card-tools">
                                <a href="{{route('penghargaan.index')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="cover text-center">
                                <img src="{{url('')}}/{{$penghargaan[0]->gambar}}" width="300" height="300" alt="cover"
                                    class="img-fluid">
                            </div>
                            <div class="judul text-center">
                                <div class="h2 mt-2">{{$penghargaan[0]->judul}}</div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-around mb-2">
                                <div class="created_at">created_at: {{$penghargaan[0]->created_at}}</div>
                                <div class="updated_at">updated_at: {{$penghargaan[0]->updated_at}}</div>
                                <div class="released">Released: <span class="badge bg-success">{{$penghargaan[0]->rilis}}</span></div>
                                <div class="penulis">Writer: {{$penghargaan[0]->nama}}</div>
                            </div>
                            <div class="isi">
                                {!! $penghargaan[0]->deskripsi !!}
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

      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })
    })
  </script>
@endsection
