<div class="change-info">
    <div class="component"><div class="title" style="font-weight: bold;">CHỈNH SỬA THÔNG TIN</div></div>
    <div class="change-info-form">
        <form action="/update_profile" method="POST">
                <input class="form-control mt-3" type="text" name="name" id="name" placeholder="Họ tên" value="<?= $user->getName(); ?>">
                <input class="form-control mt-3" type="text" name="phone" id="phone" placeholder="Số điện thoại" value="<?= $user->getPhone(); ?>">
                <input class="form-control mt-3" type="text" name="address" id="address" placeholder="Địa chỉ" value="<?= $user->getAddress(); ?>">

                <div class="container-login100-form-btn">
                    <button class="form btn btn-outline-primary mt-3" type="submit" name="update_profile" style="font-size: 20px; font-weight: bold;">
                        Cập nhật thay đổi
                    </button>
                </div>
        </form>
    </div>
</div>
