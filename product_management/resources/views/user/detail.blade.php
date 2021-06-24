@extends('layouts.app')
<!-- action="../../user/{{$user->id}}" -->
<form id="" action="{{route('user.update',['user'=>$user->id])}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group d-flex pt-2">
        <label class="col-sm-2  pt-2" for="name">Họ và tên:</label>
        <input type="text" class="form-control col-sm-6" id="name" placeholder="Nhập họ và tên" name="name" value="{{$user->name}}">
        <span class="error-message text-danger  col-sm-3 pt-2"></span>
    </div>
    <!-- <div class="form-group d-flex">
                            <label class="col-sm-2  pt-2" for="gender_sign_up">Giới tính:</label><br>
                            <label>
                                <select name="gender_sign_up" id="gender_sign_up" class="form-control">
                                    <option value="male">Nam</option>
                                    <option value="female">Nữ</option>
                                    <option value="other">Khác</option>
                                </select>
                            </label>
                        </div> -->
    <div class="form-group d-flex">
        <label class="col-sm-2 pt-2" for="date_of_birth">Ngày sinh:</label>
        <input type="date" class="form-control col-sm-6" id="date_of_birth" name="date_of_birth" value="{{$user->date_of_birth}}">
    </div>
    <!-- <div class="form-group d-flex">
                            <label class="col-sm-2 pt-2" for="address_sign_up">Địa chỉ:</label>
                            <input type="text" class="form-control col-sm-6" id="address_sign_up" placeholder="Nhập địa chỉ" name="address_sign_up">
                            <span class="error-message text-danger col-sm-3 pt-2"></span>
                        </div> -->
    <div class="form-group d-flex">
        <label class="col-sm-2 pt-2" for="email">Email:</label>
        <input type="email" class="form-control col-sm-6" id="email" placeholder="Nhập email" name="email" value="{{$user->email}}">
        <span class="error-message text-danger col-sm-4 pt-2"></span>
    </div>
    <!-- <div class="form-group d-flex">
                            <label class="col-sm-2 pt-2" for="phone_number_sign_up">Số điện thoại:</label>
                            <input type="text" class="form-control col-sm-6" id="phone_number_sign_up" placeholder="Nhập số điện thoại" name="phone_number_sign_up">
                            <span class="error-message text-danger col-sm-3 pt-2"></span>
                        </div> -->
    <!-- <div class="form-group d-flex">
                            <label class="col-sm-2 pt-2" for="account_name_sign_up">Tên tài khoản:</label>
                            <input type="text" class="form-control col-sm-6" id="account_name_sign_up" placeholder="Nhập tên tài khoản" name="account_name_sign_up">
                            <span class="error-message text-danger col-sm-3 pt-2"></span>
                        </div> -->
    <button type="submit" class="btn btn-primary mb-2" name="sign_up" id="sign_up">Lưu</button>
</form>