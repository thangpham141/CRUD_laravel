@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="col-sm-10">
        <h1>Danh sách người dùng</h1>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success" data-toggle="modal" data-target="#modalAddUser">Thêm người dùng</button>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Họ và tên</th>
            <th>Ngày sinh</th>
            <th>Email</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$STT}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>{{$user->email}}</td>
            <td><button data-keyboard="false" class="btn" data-url="{{ route('user.show',$user->id) }}" id="edit-user" data-toggle="modal" data-target="#updateModal"><i class="fas fa-edit"></i></button></td>
            <td><a class="btn"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
        $STT++
        ?>
        @endforeach
    </tbody>
</table>
@include('user.update')
@include('user.form_add_user')
<script>
    $(document).ready(function() {
        GetInfoUser();
        UpdateUser();
    })

    function GetInfoUser() {
        $(document).on('click', '#edit-user', function() {
            var url = $(this).attr('data-url');
            $.ajax({
                type: 'get',
                url: url,
                success: function(res) {
                    $("#user_id").val(res.data.id);
                    $('#name_update').val(res.data.name);
                    $('#date_of_birth_update').val(res.data.date_of_birth);
                    $('#email_update').val(res.data.email);
                    var url = $('#update-user-form').attr('action');
                    var url = url + '/' + res.data.id;
                    $('#update-user-form').attr('action',url);
                }
            })
        })
    };
    function UpdateUser(){
        
        $(document).on('click', '#update-user', function() {
            var url = $('#update-user-form').attr('action');
            var sub = url.substr(-2,2);
            url.replace(sub,"");

            // var id = $("#user_id").val();
            // $.ajax({
            //     type:'put',
            //     url: '/user/'+id,
            //     data: {
            //     $('#update-user-form').serialize()
            //     },
            //     success: function(data){
            //         alert(data);
            //     }
            // })
        });
        $(document).on('click', '#close-update', function() {
            var url = $('#update-user-form').attr('action');
            var sub = url.substr(-2,2);
            url.replace(sub,"");
        });
    }
</script>
@endsection