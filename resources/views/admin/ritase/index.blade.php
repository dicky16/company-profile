@extends('admin.master')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ritase</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ritase</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Ritase
                            </h3>
                            <div class="card-tools">
                                <a href="{{route('ritase.create')}}" class="btn btn-sm btn-info float-right">
                                    <i class="fas fa-plus"></i> Tambah Ritase</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="tbl" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @php
                                    $no=1
                                    @endphp
                                    @foreach($ritases as $ritase)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td align="center">{{$ritase->tahun}}</td>
                                        <td align="center">{{$ritase->jumlah}}</td>
                                        <td align="center">
                                            <form action="{{route('ritase.destroy', $ritase->id)}}" method="post">
                                                @csrf
                                                <a href="{{route('ritase.edit', $ritase->id)}}"
                                                class="btn btn-xs btn-warning" title="Edit"><i class="fa fa-edit"></i>
                                                Edit</a>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-xs btn-danger" title="Hapus"><i
                                                        class="fa fa-trash"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                    $no++
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ url('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/admin/dist/js/adminlte.min.js') }}"></script>
<!-- Page specific script -->
<script>
    $(document).ready(function () {
        $('#tbl').DataTable();
    });

</script>
@if(session('success'))
<script>
Swal.fire(
  'Berhasil!',
  '{{session('success')}}',
  'success'
)
</script>
@endif
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