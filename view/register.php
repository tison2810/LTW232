<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  
	<title>demo</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<?php
  		include_once('navbar.php');
?>
<body>
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
							<a href="../indextemp.php" class="txt1" style="font-size: 18px!important; color: #1464f4;">
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

</body>
</html>