<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <!-- <script src="script.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link id="import_link_font_icon" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700&amp;display=swap&amp;subset=vietnamese">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
</head>
<?php
include_once ('navbar.php');
?>

<body>
    <div class="bgm">
        <br></br>
        <br></br>
        <br></br>
        <div class="profile">
            <div class="greetname">
                <i class="fas fa-user-circle"></i>
                <div class="greet">
                    Xin chào,
                    <h6><?php echo $authService->getLoggedInUser()->getName(); ?></h6>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar-item">THÔNG TIN XE</div>
                <a class="item-select" href="#">Xe của tôi</a>
                <div class="sidebar-item">ĐẶT HÀNG VÀ DỊCH VỤ</div>
                <a class="item-select" href="#">Lịch sử giao dịch</a><br>
                <a class="item-select" href="#">Bảo dưỡng sửa chữa</a><br>
                <a class="item-select" href="#">Thuê pin</a><br>
                <div class="sidebar-item">TÀI KHOẢN</div>
                    <a class="item-select" href="/profile">Thông tin cá nhân</a><br>
                    <a class="item-select" href="/profile/change_info">Chỉnh sửa thông tin</a><br>
                    <a class="item-select" href="/profile/change_password">Đổi mật khẩu </a><br>
            </div>
			<?php
                        $action = $_GET['action'];
                        switch ($action) {
                            case 'change_info':
                                require_once 'change_info.php';
                                break;
                            case 'change_password':
                                require_once 'change_password.php';
                                break;
                            // case 'site_settings':
                            //     require_once 'site_settings.php';
                            //     break;
                            case 'delete_account':
                                require_once 'delete_account.php';
                                break;
                            default: // Show the Current User view by default
                                require_once 'user_info.php';
                                break;
                        }
                        ?>
				<!-- <div class="maincontent">
					<div class="component">
						<div class="title" style="font-weight: bold;">THÔNG TIN CÁ NHÂN</div>
							<div class="component-form">
								<div class="username" style="font-weight: bold; font-size: 14px">Họ và tên</div>
								<div class="email" style="font-weight: bold; font-size: 14px">Email</div>
								<div class="phone" style="font-weight: bold; font-size: 14px">Số điện thoại</div>
							</div>
							<br></br>
							<div class="password" style="font-weight: bold; font-size: 14px">Mật khẩu</div>
					</div>
					<div class="data">
						<div class="data-form">
							<div class="username" style="font-size: 14px"><?= $user->getName(); ?></div>
							<div class="email" style="font-size: 14px"><?= $user->getEmail(); ?></div>
							<div class="phone" style="font-size: 14px"><?= $user->getPhone(); ?></div>
							<br></br>
							<a class="password" style="font-size: 14px; text-decoration: none;" href="#">Đổi mật khẩu</a>
						</div>
					</div>
					<div class="edit">
						<a class="edit-profile" href="#">Chỉnh sửa thông tin</a>
					</div>
            	</div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>