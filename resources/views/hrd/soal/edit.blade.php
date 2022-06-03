@extends('hrd.master')
@push('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endpush
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Soal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('skill.index')}}">Soal</a></li>
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
                            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Edit
                            Soal
                            </h3>
                            <div class="card-tools">
                                <a href="{{route('soal.index')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <form action="{{route('soal.update', $soal[0]->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="PUT" name="_method">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" name="id_lowongan_kerja" required>
                                        <option value="" selected>Pilih Jenis Soal</option>
                                        <option value="0">Umum</option>
                                        @foreach($lowongans as $lowongan)
                                        <option value="{{$lowongan->id}}" {{($lowongan->id == $soal[0]->id_lowongan_kerja) ? 'selected' : ''}}>{{$lowongan->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Pertanyaan</label>
                                    <input type="text" class="form-control" value="{{$soal[0]->pertanyaan}}" name="pertanyaan" required>
                                </div>
                                <div class="row">
                                    <div class="form-group col-2">
                                        <input type="text" class="form-control" id="pilihan" name="pilihan" placeholder="Pilihan">
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text" class="form-control" id="jawaban" placeholder="Jawaban">
                                    </div>
                                    <div class="form-group col-2">
                                        <input type="number" class="form-control" id="score" placeholder="Score">
                                    </div>
                                    <div class="form-group col-2">
                                        <button type="button" class="btn btn-success"
                                            id="btnAddJawaban">Add</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Jawaban</label>
                                    <div id="listJawaban">
                                        <table>
                                        @foreach($jawabans as $jawaban)
                                        <tr id="row{{$jawaban->id}}" class="dynamic-added">
                                            <td><input type="text" value="{{$jawaban->pilihan}}" name="pilihan[]" placeholder="Pilihan" class="form-control name_list" required /></td>
                                            <td><input type="text" value="{{$jawaban->jawaban}}" name="jawaban[]" placeholder="jawaban" class="form-control name_list" required /></td>
                                            <td><input type="text" value="{{$jawaban->score}}" name="score[]" placeholder="Score" class="form-control name_list" required />
                                            <td><button type="button" name="remove" id="{{$jawaban->id}}" class="btn btn-danger btn_remove">X</button></td>
                                        </tr>
                                        @endforeach
                                        </table>
                                    </div>
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
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- Page specific script -->
<script>
$(document).ready(function(){
    var i=1;
    $('#btnAddJawaban').click(function(){  
        i++;  
    var jawaban = $("#jawaban").val();
    var pilihan = $("#pilihan").val();
    var score = $("#score").val();
        $('#listJawaban').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" value="'+pilihan+'" name="pilihan[]" placeholder="Pilihan" class="form-control name_list" required /></td><td><input type="text" value="'+jawaban+'" name="jawaban[]" placeholder="jawaban" class="form-control name_list" required /></td><td><input type="text" value="'+score+'" name="score[]" placeholder="Score" class="form-control name_list" required /><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        $("#jawaban").val("");
        $("#pilihan").val("");
    });

    $(document).on('click', '.btn_remove', function(){  
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
    });
});

</script>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    })

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
@endpush