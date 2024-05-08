<div class="change-info">
    <div class="component"><div class="title" style="font-weight: bold;">TẠO TÀI KHOẢN</div></div>
    <div class="change-info-form">
        <form action="/create_user" method="POST">
            <input class="form-control mt-3" type="text" name="email" id="email" placeholder="Email">
			<input class="form-control mt-3" type="password" name="password" id="password" placeholder="Mật khẩu">
			<input class="form-control mt-3" type="text" name="name" id="name" placeholder="Họ tên">
            <input class="form-control mt-3" type="text" name="phone" id="phone" placeholder="Số điện thoại">
            <input class="form-control mt-3" type="text" name="address" id="address" placeholder="Địa chỉ">
            <select class="form-control mt-3" name="role" id="role">
                    <option value="USER">User</option>
                    <option value="ADMIN">Admin</option>
            </select>
    </div>
    <div class="submit-button">
        <div class="container-login100-form-btn" style="margin-left: 100px;">
            <button class="form btn btn-outline-primary mt-3" type="submit" name="create_user" style="font-size: 20px; font-weight: bold;">
                    Tạo tài khoản
            </button>
        </div>
        </form>
    </div>
</div>
