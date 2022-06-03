@extends('hrd.master')
@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Departemen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('hrd.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('departemen.index')}}">Departemen</a></li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Edit Departemen
                            </h3>
                            <div class="card-tools">
                                <a href="{{route('departemen.index')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <form action="{{route('departemen.update', $departemen->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="isi">Nama</label>
                                    <input type="text" class="form-control" name="name" id="cover" value="{{$departemen->name}}" required>
                                </div>
                                <div class="form-group">
                                <label for="isi">Detail</label>
                                    <input type="text" class="form-control" name="detail" id="cover" value="{{$departemen->detail}}">
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
@push('scripts')
@if(session('error'))
<script>
Swal.fire(
  'Berhasil!',
  '{{session('error')}}',
  'error'
)
</script>
@endif
@endpush
