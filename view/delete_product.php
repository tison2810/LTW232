<?php
	$link = mysqli_connect('localhost', 'root', '', 'vinfast');
		$id = $_GET['id'];
		$sql = "DELETE FROM oto WHERE id = $id";
		$query = mysqli_query($link, $sql);
		header('location: /profile/view_product');
?>