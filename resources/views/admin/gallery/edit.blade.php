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
                    <h1 class="m-0">Edit Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('slider.index')}}">Gallery</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Edit Gallery
                            </h3>
                            <div class="card-tools">
                                <a href="{{url('admin/gallery')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <form action="{{route('gallery.update', $gallery[0]->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value='PUT'>
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-select sub-departemen" name="jenis" id="jenis" onchange="showGallery()" aria-label="Default select example" required>
                                        <option selected value="">Pilih Jenis</option>
                                        <option value="foto" {{($gallery[0]->jenis == 'foto') ? 'selected' : ''}}>Foto</option>
                                        <option value="video" {{($gallery[0]->jenis == 'video') ? 'selected' : ''}}>Video</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Judul</label>
                                    <input type="text" class="form-control" value="{{$gallery[0]->judul}}" name="judul" placeholder="Judul" required>
                                </div>
                                <div class="form-group foto">
                                    <label for="cover">Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto">
                                            <label class="custom-file-label" for="cover">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group video">
                                    <label for="cover">Link Video</label>
                                    <input type="text" class="form-control" name="path" placeholder="Link video" value="{{$gallery[0]->path}}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
      hideForm();
      function hideForm()
      {
          //hide form
          if('{{$gallery[0]->jenis}}' == 'foto') {
            $(".video").addClass("d-none");
          } else {
            $(".foto").addClass("d-none");
          }
      }
      function showGallery()
      {
          var jenis = $("#jenis").val();
          if(jenis == 'foto') {
            $(".foto").removeClass("d-none");
            $(".video").addClass("d-none");
          } else if(jenis == 'video') {
            $(".video").removeClass("d-none");
            $(".foto").addClass("d-none");
          }
      }
    $(function () {
      // Summernote
      $('#summernote').summernote()

      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
  </script>
  @if(session('error'))
    <script>
    Swal.fire(
    'Gagal!',
    '{{session('error')}}',
    'error'
    )
    </script>
    @endif
@endsection
