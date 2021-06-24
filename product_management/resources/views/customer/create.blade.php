<div class="modal" id="modalAddCustomer">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm khách hàng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="form_sign_up">
                
                @method('POST')
                @csrf
                    <div class="form-group d-flex pt-2">
                        <label class="col-sm-2  pt-2" for="name">Họ và tên:</label>
                        <input type="text" class="form-control col-sm-6" id="name" placeholder="Nhập họ và tên" name="name">
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
                        <input type="date" class="form-control col-sm-6" id="date_of_birth" name="date_of_birth">
                    </div>
                    <!-- <div class="form-group d-flex">
                            <label class="col-sm-2 pt-2" for="address_sign_up">Địa chỉ:</label>
                            <input type="text" class="form-control col-sm-6" id="address_sign_up" placeholder="Nhập địa chỉ" name="address_sign_up">
                            <span class="error-message text-danger col-sm-3 pt-2"></span>
                        </div> -->
                    <div class="form-group d-flex">
                        <label class="col-sm-2 pt-2" for="email">Email:</label>
                        <input type="email" class="form-control col-sm-6" id="email" placeholder="Nhập email" name="email">
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
                    <div class="form-group d-flex">
                        <label class="col-sm-2 pt-2" for="password">Mật khẩu:</label>
                        <input type="password" class="form-control col-sm-6" id="password" placeholder="Nhập mật khẩu" name="password">
                        <span class="error-message text-danger col-sm-3 pt-2"></span>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" name="create-customer" id="create-customer">OK</button>
                </form>
            </div>
        </div>
    </div>
</div>