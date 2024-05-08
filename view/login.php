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
			<div class="container mt-3" style="width: 400px">
				<form action="../index.php?action=login" method="POST">
                    <div class="row">
                        <h3 class="fw-bold text-center mt-2">ĐĂNG NHẬP</h3>
                    </div>
					
                    <input class="form-control mt-3" type="text" name="email" placeholder="Email">
					
					<input class="form-control mt-3" type="password" name="password" placeholder="Password">

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
							<a href="/register" class="txt1" style="font-size: 18px!important; color: #1464f4; text-decoration:none">
								Đăng ký ngay nào!
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="form btn btn-outline-primary mt-3" type="submit" name="login" style="font-size: 20px; font-weight: bold;">
							Đăng nhập
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