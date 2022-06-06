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
                    <h1 class="m-0">Edit Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="post.php">Post</a></li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Edit Post</h3>
                            <div class="card-tools">
                                <a href="{{url('admin/berita')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <form action="{{route('berita.update', $berita[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="judul" class="form-control" id="judul" name="judul" value="{{$berita[0]->judul}}" placeholder="Masukkan judul">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi</label>
                                    <textarea id="summernote" name="deskripsi">
                                    {!! $berita[0]->deskripsi !!}
                                    </textarea> 
                                </div>
                                <div class="form-group">
                                    <label for="cover">Cover</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="gambar" id="cover">
                                            <label class="custom-file-label" for="cover">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" data-bootstrap-switch data-off-color="danger"
                                        data-on-color="success" name="rilis" {{($berita[0]->rilis == 1) ? 'checked' : ''}}>
                                    <label class="form-check-label" for="rilis">Rilis Sekarang</label>
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
    $(function () {
        // Summernote
        $('#summernote').summernote()

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    })

</script>
@endsection
