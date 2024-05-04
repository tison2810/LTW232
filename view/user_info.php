<div class="maincontent">
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
</div>