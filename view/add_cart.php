<?php
	session_start();
	$id = $_GET['id'];
	//Nếu đã tồn tại sản phẩm trong giỏ hàng thì tăng sl lên 1 đơn vị. Ngược lại, số lượng được gán = 1
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]+=1;
	}else{
		$_SESSION['cart'][$id]=1;
	}
	header("Location: /profile/cart");
?>