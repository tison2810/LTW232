<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <!-- <script src="script.js"></script> -->
    <link rel="stylesheet" href="../style.css">
    <link id="import_link_font_icon" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700&amp;display=swap&amp;subset=vietnamese">
</head>
<header>
        <div class="header">
            <!-- icon -->
            <div>
                <!-- return main page -->
                <a href="#">
                    <img class="logo-main" alt="VinFast-logo"
                        src="https://vinfastauto.com/themes/porto/img/new-home-page/VinFast-logo.svg">
                </a>
            </div>
            <!-- head-center -->
            <div class="header-center">
                <ul>
                    <!-- Return Giới thiệu page -->
                    <li>
                        <a href="#" target="_self" class="gioithieu">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#" class="car-header">Ô tô</a>
                    </li>
                    <li>
                        <a href="#">Xe máy điện</a>
                    </li>
                    <!-- Return Dịch vụ page -->
                    <li>
                        <a href="#" target="_self" class="dichvu">Dịch vụ</a>
                    </li>
                </ul>
            </div>
            <!-- head-right -->
            <div class="head-right">
                <!-- Account -->
                <?php if ($authService !== null && $authService->isLoggedIn()): ?>
                    <div class="account">
                        <a class="button-account" href="/profile">
                            <?php echo $authService->getLoggedInUser()->getName(); ?>
                        </a>
                    </div>
                    <div class="logout">
                        <a class="button-logout" href="/logout">Đăng xuất</a>
                    </div>
                <?php else: ?>
                    <div class="account">
                        <a class="button-account" href="/login">TÀI KHOẢN</a>
                    </div>
                <?php endif; ?>
                <div class="account-icon">
                    <a href="#"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 8C10.21 8 12 6.21 12 4C12 1.79 10.21 0 8 0C5.79 0 4 1.79 4 4C4 6.21 5.79 8 8 8ZM8 10C5.33 10 0 11.34 0 14V16H16V14C16 11.34 10.67 10 8 10Z"
                                fill="#7A99AC"></path>
                        </svg></a>
                </div>
                <!-- Menu-content -->
            </div>
        </div>
    </header>
</html>