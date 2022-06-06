@extends('hrd.master')
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lamaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Lamaran</li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Lamaran
                            </h3>
                            <div class="card-tools">
                                <div class="row">
                                    <div class="col">
                                    <select name="" class="form-select" id="lowongan">
                                        @foreach($lowongans as $lowongan)
                                        <option value="{{$lowongan->id}}">{{$lowongan->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:void(0)" id="exportExcel" class="btn btn-sm btn-info float-right">
                                        <i class="fas fa-print"></i> Export Excel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="tbl" class="table table-bordered table-striped">
                            <div class="row">
                                <!-- <div class="col-2">
                                    <select name="" class="form-select">
                                        <option value="">Short</option>
                                        <option value="">Diterima</option>
                                    </select>
                                </div> -->
                            </div>
                            <br>
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Lowongan Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @php
                                    $no=1
                                    @endphp
                                    @foreach($lamarans as $lamaran)
                                    <tr>
                                        <td>{{$lamaran->nik}}</td>
                                        <td>{{$lamaran->nama_lengkap}}</td>
                                        <td>{{$lamaran->umur}}</td>
                                        <td>{{$lamaran->jenis_kelamin}}</td>
                                        <td>{{$lamaran->lowongan}}</td>
                                        <td>
                                            <form action="{{route('lamaran.destroy', $lamaran->id)}}" method="post">
                                                @csrf
                                                <a href="{{route('lamaran.show', $lamaran->id)}}"
                                                class="btn btn-xs btn-warning" title="Show"><i class="fa fa-eye"></i>
                                                Show</a>
                                                <!-- <a href="{{route('lamaran.edit', $lamaran->id)}}"
                                                class="btn btn-xs btn-success" title="Edit"><i class="fa fa-edit"></i>
                                                Edit</a> -->
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
        var table = $('#tbl').DataTable( {
            orderCellsTop: true,
            fixedHeader: true
        } );
        });

</script>
<script>
    $("#exportExcel").on('click', function () {
        var idLowongan = $("#lowongan").val();
        // alert(idLowongan);
        window.location.replace("{{url('hrd/lamaran/export/excel')}}/"+idLowongan);
        // $.get("{{url('hrd/lamaran/export/excel')}}/"+idLowongan, 
        // function (data) {
        //     console.log(data);
        // });
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