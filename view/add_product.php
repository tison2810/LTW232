<?php require_once "view/profile.php"; ?>
<div class="change-info">
    <div class="component"><div class="title" style="font-weight: bold;">THÊM MẪU XE MỚI</div></div>
        <div class="change-info-car">
            <form method="POST" action="/profile/push_product">
                <input class="form-control mt-3" type="text" name="name" id="name" placeholder="Tên">
                <input class="form-control mt-3" type="text" name="anh1" id="anh1" placeholder="Link ảnh 1">
                <input class="form-control mt-3" type="text" name="anh2" id="anh2" placeholder="Link ảnh 2">
                <input class="form-control mt-3" type="text" name="anh3" id="anh3" placeholder="Link ảnh 3">
                <input class="form-control mt-3" type="text" name="anh4" id="anh4" placeholder="Link ảnh 4">
                <input class="form-control mt-3" type="text" name="desc" id="desc" placeholder="Mô tả">
                <input class="form-control mt-3" type="text" name="price" id="price" placeholder="Giá gồm pin">
                <input class="form-control mt-3" type="text" name="length" id="length" placeholder="Chiều dài">
                <input class="form-control mt-3" type="text" name="power" id="power" placeholder="Công suất">
                <input class="form-control mt-3" type="text" name="distance" id="distance" placeholder="Quãng đường di chuyển">
            </div>
        <div class="submit-button-car">
            <div class="container-login100-form-btn" style="margin-left: 100px;">
                <button class="form btn btn-outline-primary mt-3" type="submit" name="submit" style="font-size: 20px; font-weight: bold;">
                        Thêm mẫu mới
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
