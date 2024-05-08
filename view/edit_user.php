
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <!-- <script src="script.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../style.css">
    <link id="import_link_font_icon" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700&amp;display=swap&amp;subset=vietnamese">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
</head>
<body>
<div class="change-info">
    <div class="component"><div class="title" style="font-weight: bold;">CHỈNH SỬA THÔNG TIN</div></div>
        <div class="change-info-form">
            <form action="/profile/update_user/<?php echo $user->getId(); ?>" method="POST">
                <input class="form-control mt-3" type="text" name="name" id="name" placeholder="Họ tên" value="<?= $user->getName(); ?>">
                <input class="form-control mt-3" type="text" name="phone" id="phone" placeholder="Số điện thoại" value="<?= $user->getPhone(); ?>">
                <input class="form-control mt-3" type="text" name="address" id="address" placeholder="Địa chỉ" value="<?= $user->getAddress(); ?>">
                <input class="form-control mt-3" type="text" name="email" id="email" placeholder="Email" value="<?= $user->getEmail(); ?>">
                <select class="form-control mt-3" name="role" id="role">
                    <option value="USER" <?php if ($user->getRole() == 'USER')
                        echo 'selected'; ?>>    
                    User</option>
                    <option value="ADMIN" <?php if ($user->getRole() == 'ADMIN')
                    echo 'selected'; ?>>
                    Admin</option>
                </select>
            </div>
        <div class="submit-button">
            <div class="container-login100-form-btn" style="margin-left: 100px;">
                <button class="form btn btn-outline-primary mt-3" type="submit" name="update_user" style="font-size: 20px; font-weight: bold;">
                        Cập nhật thay đổi
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="../script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>