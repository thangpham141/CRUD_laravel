@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="col-sm-10">
        <h1>Danh sách khách hàng</h1>
    </div>
    <div class="col-sm-2">
        <button id="add-customer" class="btn btn-success" data-toggle="modal" data-target="">Thêm người dùng</button>
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
        @foreach($customers as $customer)
        <tr>
            <td>{{$STT}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->date_of_birth}}</td>
            <td>{{$customer->email}}</td>
            <td><button data-keyboard="false" class="btn" data-id="{{$customer->id}}" id="edit-customer" data-toggle="modal" data-target="#updateModal"><i class="fas fa-edit"></i></button></td>
            <td><button class="btn" data-id="{{$customer->id}}" id="delete-customer" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></button></td>
        </tr>
        <?php
        $STT++
        ?>
        @endforeach
    </tbody>
</table>
@include('customer.create')
@include('customer.update')
@include('customer.delete')
<script>
    $(document).ready(function() {
        ajaxToken();
        CreateCustomer();
        GetInfoCustomer();
        UpdateCustomer();
        DeleteCustomer();
    })

    function ajaxToken() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    function CreateCustomer() {
        $(document).on('click', '#add-customer', function() {
            $('#modalAddCustomer').modal('show');
        })
        $(document).on('click', '#create-customer', function() {
            var name = $('#name').val();
            var date_of_birth = $('#date_of_birth').val();
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                type: 'POST',
                url: 'customer/store',
                data: {
                    name: name,
                    date_of_birth: date_of_birth,
                    email: email,
                    password: password,
                },
                success: function(res) {
                    alert(res);
                }
            })
        })
    }

    function GetInfoCustomer() {
        $(document).on('click', '#edit-customer', function() {
            // var url = $(this).attr('data-url');
            var id = $(this).attr('data-id');
            $.ajax({
                type: 'get',
                url: 'customer/show/' + id,
                success: function(res) {
                    $("#customer_id").val(res.data.id);
                    $('#name_update').val(res.data.name);
                    $('#date_of_birth_update').val(res.data.date_of_birth);
                    $('#email_update').val(res.data.email);
                    // var url = $('#update-user-form').attr('action');
                    // var url = url + '/' + res.data.id;
                    // $('#update-user-form').attr('action',url);
                }
            })
        })
    };

    function UpdateCustomer() {
        $(document).on('click', '#update-customer', function() {
            var id = $('#customer_id').val();
            var name = $('#name_update').val();
            var date_of_birth = $('#date_of_birth_update').val();
            var email = $('#email_update').val();
            $.ajax({
                type: 'put',
                url: 'customer/update/' + id,
                data: {
                    name: name,
                    date_of_birth: date_of_birth,
                    email: email,
                },
                success: function(res) {
                    $('#updateModal').modal('hide');
                    alert(res);
                    location.reload();
                }
            })
        })

    }

    function DeleteCustomer(){
        $(document).on('click','#delete-customer',function(){
            var id = $(this).attr('data-id');
            $('#btn-delete').attr('data-id',id);
        })
    //     $('#delete-customer').jConfirm().on('confirm', function(e){
    //     var btn = $(this),
    //         record_id = btn.data('record_id');
    //     alert('Deleting record: '+record_id);
    // });
        $(document).on('click','#btn-delete',function(){
            var id = $(this).attr('data-id');
            console.log(id);
            $.ajax({
                type:'delete',
                url: 'customer/destroy/'+id,
                success: function(res){
                    $('#deleteModal').modal('hide');
                    alert(res);
                    location.reload();
                }
            })
        })
    }
</script>
@endsection