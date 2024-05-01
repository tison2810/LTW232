<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  
	<title>demo</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<?php
  		include_once('./navbar.php');
?>
<body>
	<div class = "limiter">
		<div class="container-login100">
			<!-- <div class="content__left">
				<div class="login100-more" style="background-image: url('https://lh3.googleusercontent.com/pobuAfGspbPGYKNqPTzeBvYcZb8-KHcJ18Yre2y38u9lbNEC0LV5t37Byk1PdhHQpDw')">
				</div>
			</div> -->
			<div class="container mt-3" style="width: 400px">
				<form action="index.php?page=main&controller=login&action=index" method="POST" class="validate-form login100-form">
                    <div class="row">
                        <h3 class="fw-bold text-center mt-2">ĐĂNG NHẬP</h3>
                    </div>
					
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="form-control mt-3" type="text" name="email" placeholder="Email">
                    </div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="form-control mt-3" type="password" name="password" placeholder="Password">
					</div>

					<?php
						if (isset($err))
						{
							echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
							unset($err);
						}
					?>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							Bạn chưa có tài khoản? 
							<a href="register.php" class="txt1" style="font-size: 18px!important; color: #1464f4;">
								Đăng ký ngay nào!
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="form btn btn-outline-primary mt-3" name="submit-btn" style="font-size: 20px; font-weight: bold;">
							Đăng nhập
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../script.js"></script>

</body>
</html>