<div class="modal" id="updateModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thông tin người dùng</h4>
                <button type="button" id="close-update" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <!-- <form id="update-user-form" action="{{route('user.update','')}}" method="post"> -->
                <form id="update-user-form" action="{{route('user.update','')}}" method="post">
                @csrf
                @method('PUT')
                    
                    <div class="d-none"><input id="user_id"></div>
                    <div class="form-group d-flex pt-2">
                        <label class="col-sm-2  pt-2" for="name_update">Họ và tên:</label>
                        <input type="text" class="form-control col-sm-6" id="name_update" placeholder="Nhập họ và tên" name="name_update">
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
                        <label class="col-sm-2 pt-2" for="date_of_birth_update">Ngày sinh:</label>
                        <input type="date" class="form-control col-sm-6" id="date_of_birth_update" name="date_of_birth_update">
                    </div>
                    <!-- <div class="form-group d-flex">
                            <label class="col-sm-2 pt-2" for="address_sign_up">Địa chỉ:</label>
                            <input type="text" class="form-control col-sm-6" id="address_sign_up" placeholder="Nhập địa chỉ" name="address_sign_up">
                            <span class="error-message text-danger col-sm-3 pt-2"></span>
                        </div> -->
                    <div class="form-group d-flex">
                        <label class="col-sm-2 pt-2" for="email_update">Email:</label>
                        <input type="email" class="form-control col-sm-6" id="email_update" placeholder="Nhập email" name="email_update">
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
                    <button type="submit" data-url="" class="btn btn-primary mb-2" name="update-user" id="update-user">Lưu</button>
                </form>
            </div>

            <!-- Modal footer -->
            <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

        </div>
    </div>
</div>