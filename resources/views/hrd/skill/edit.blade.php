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
                    <h1 class="m-0">Edit Skill</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('skill.index')}}">Skill</a></li>
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
                                Skill
                            </h3>
                            <div class="card-tools">
                                <a href="{{route('skill.index')}}" class="btn btn-sm btn-secondary float-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                        <form action="{{route('skill.update', $skill->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" name="id_lowongan" required>
                                        <option selected>Pilih Lowongan Kerja</option>
                                        @foreach($lowongans as $lowongan)
                                        <option value="{{$lowongan->id}}" {{($lowongan->id == $skill->id_lowongan_kerja) ? 'selected' : ''}}>{{$lowongan->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" class="skill-edit" value="{{$skill->skill}}">
                                <div class="row">
                                    <div class="form-group col-10">
                                        <input type="text" class="form-control" name="detail" id="skill" placeholder="Skill">
                                    </div>
                                    <div class="form-group col-2">
                                        <button type="button" class="btn btn-success"
                                            id="btnAddSkill">Add</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Skill</label>
                                    <div id="listSkill"></div>
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
$(document).ready(function(){
    var i=1;
    setSkill();
    function setSkill() {
        var skill = $(".skill-edit").val();
        const skillArray = skill.split(", ")
        for (let index = 0; index < skillArray.length; index++) {
            $('#listSkill').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" value="'+skillArray[index]+'" name="skill[]" placeholder="Skill" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        }
    }
    
    $('#btnAddSkill').click(function(){  
        i++;  
    var skill = $("#skill").val();
        $('#listSkill').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" value="'+skill+'" name="skill[]" placeholder="Skill" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        $("#skill").val("");  
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
