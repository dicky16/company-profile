@extends('hrd.master')
@push('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ url('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
@endpush
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Lowongan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('departemen.index')}}">Lowongan</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Tambah
                                Lowongan
                            </h3>
                            <div class="card-tools">
                                <a href="{{route('lowongan.index')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <form action="{{route('lowongan.update', $lowongan->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-select" id="departemen" name="id_department" aria-label="Default select example" 
                                    onchange="loadSubDepartemen(this)" >
                                        <option selected value="">Pilih Departemen</option>
                                        @foreach($departemens as $departemen)
                                            <option value="{{$departemen->id}}" {{($lowongan->id_department == $departemen->id ? 'selected' : '')}}>{{$departemen->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_department')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select class="form-select sub-departemen" name="id_sub_department" aria-label="Default select example" >
                                        <option selected value="">Pilih Sub Departemen</option>
                                        @foreach($subDepartemens as $subDepartemen)
                                        <option value="{{$subDepartemen->id}}" {{($lowongan->id_sub_department == $subDepartemen->id ? 'selected' : '')}}>{{$subDepartemen->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_sub_department')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="isi">Lowongan Kerja</label>
                                    <input type="text" class="form-control" value="{{$lowongan->name}}" name="name" >
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="isi">Deskripsi</label>
                                    <textarea id="summernote" name="description" >{{$lowongan->description}}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="isi">Open</label>
                                        <input type="date" class="form-control" value="{{$lowongan->open}}" name="open" >
                                        @error('open')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="isi">Close</label>
                                        <input type="date" class="form-control" value="{{$lowongan->close}}" name="close" >
                                        @error('close')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="isi">Cover</label>
                                    <input type="file" class="form-control" name="cover" id="cover">
                                    @error('cover')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
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




<script>
    function loadSubDepartemen(departemen) {
        var idDepartemen = departemen.value;
        console.log(idDepartemen);
        $.get('{{url('hrd/sub-departemen-data')}}/'+idDepartemen, {webname: name}, function (data) {
                // console.log(data.status)
                if (data.status == 'success') {
                    var html = "<option selected>Pilih Sub Departemen</option>";
                    for (let index = 0; index < data.sub_departemen.length; index++) {
                        html += '<option value="' + data.sub_departemen[index].id + '" >' + data.sub_departemen[index].name + '</option>';
                    }
                    $(".sub-departemen").html(html);
                }
            });
    }

</script>
@if(session('error'))
<script>
    Swal.fire(
        'Error!',
        '{{session('error')}}',
        'error'
    )
</script>
@endif
@if ($errors->any())
    <script>
        Swal.fire(
            'Error!',
            'Tolong lengkapi dan check kembali data yang anda isi.',
            'error'
        )
    </script>
@endif
@endpush
