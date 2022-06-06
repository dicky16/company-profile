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
                    <h1 class="m-0">Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">User</a></li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Edit User
                            </h3>
                            <div class="card-tools">
                                <a href="{{url('admin/user')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <form action="{{route('user.update', $user[0]->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="isi">NIK</label>
                                    <input type="text" class="form-control" value="{{$user[0]->nik}}" name="nik" required>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Nama</label>
                                    <input type="text" class="form-control" value="{{$user[0]->nama}}" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="custom-select" required>
                                        <option value="L" {{($user[0]->jenis_kelamin == 'L') ? 'selected' : ''}}>Laki-laki</option>
                                        <option value="P" {{($user[0]->jenis_kelamin == 'P') ? 'selected' : ''}}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="{{$user[0]->tanggal_lahir}}" name="tanggal_lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Username</label>
                                    <input type="text" class="form-control" value="{{$user[0]->username}}" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="isi untuk ganti password">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Role</label>
                                    <select name="role" class="custom-select" required>
                                        <option value="admin" {{($user[0]->role == 'admin') ? 'selected' : ''}}>ADMIN</option>
                                        <option value="hrd" {{($user[0]->jenis_kelamin == 'hrd') ? 'selected' : ''}}>HRD</option>
                                    </select>
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
  'Gagal!',
  '{{session('error')}}',
  'error'
)
</script>
@endif
@endpush
