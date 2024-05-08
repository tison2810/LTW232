<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  
	<title>demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../style.css">
    <link id="import_link_font_icon" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700&amp;display=swap&amp;subset=vietnamese">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
</head>
<?php
  		include_once('navbar.php');
?>
<body>
    <br/><br/>

    <br/><br/>
	<div class = "limiter">
		<div class="container-login100">
			<div class="container mt-3" style=" width: 400px">
                <form method="POST" action="../index.php?action=register">
                    <div class="row">
                        <h3 class="fw-bold text-center mt-2">ĐĂNG KÝ</h3>
                    </div>

                    <input class="form-control mt-3" type="text" name="email" id="email" placeholder="Email">
					
					<input class="form-control mt-3" type="password" name="password" id="password" placeholder="Mật khẩu">

					<input class="form-control mt-3" type="text" name="name" id="name" placeholder="Họ tên">

                    <input class="form-control mt-3" type="text" name="phone" id="phone" placeholder="Số điện thoại">

                    <input class="form-control mt-3" type="text" name="address" id="address" placeholder="Địa chỉ">

                    <!-- <div class="row">
                        <div class="col">
                            <label class="ms-2 mt-4">Ngày sinh:</label>
                        </div>
                        <div class="col">
                            <select name="day" class="form-select mt-3">
                                <option value="day">Ngày</option>
                                <?php
                                    for($i = 1; $i <= 31; $i++){
                                        if($day==$i) echo "<option value='$i' selected='selected'>$i</option>";
                                        else echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                            </select>
                            <div class="col">
                                <select name="month" class="form-select mt-3">
                                    <option value="month">Tháng</option>
                                    <?php 
                                        for ($i = 1; $i <= 12; $i ++) {
                                            if ($month == $i) echo "<option value='$i' selected='selected'>$i</option>";
                                            else echo "<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="col">
                                <select name="year" class="form-select mt-3">
                                    <option value="year">Năm</option>
                                    <?php 
                                        for ($i = 2022; $i >= 1930; $i --) {
                                            if ($year == $i) echo "<option value='$i' selected='selected'>$i</option>";
                                            echo "<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div> -->

                <!-- <div class="row">
                    <div class="col">
                        <label class="ms-2 mt-3"> Giới tính:</label>
                    </div>
                    
                    <div class="col">
                        <input type="radio" class="mt-4" name="gender" value="male"> Nam
                    </div>

                    <div class="col">
                        <input type="radio" class="mt-4" name="gender" value="female"> Nữ
                    </div>

                    <div class="col">
                        <input type="radio" class="mt-4" name="gender" value="other"> Khác
                    </div>
                </div> -->

					<?php
						if (isset($err))
						{
							echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
							unset($err);
						}
					?>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							Bạn đã có tài khoản?
							<a href="/login" class="txt1" style="font-size: 18px!important; color: #1464f4; text-decoration:none">
								Đăng nhập ngay nào!
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="form btn btn-outline-primary mt-3" type="submit" name="register" style="font-size: 20px; font-weight: bold;">
							Đăng ký
						</button>
					</div>
                    <!-- <div class="input-field button">
                        <input type="submit" name="register" value="Register">
                </div> -->
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