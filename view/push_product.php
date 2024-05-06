<?php
    $conn = new mysqli('localhost', 'root', '', 'vinfast');
	if (isset($_POST['submit'])) {
		// Tên Sản phẩm
		if ($_POST['name'] == '') {
			$error_name_product = '<span style="color:red;">(*)<span>';
		} else {
			$name = $_POST['name'];
		}
        if ($_POST['anh1'] == '') {
			$error_anh1 = '<span style="color:red;">(*)<span>';
		} else {
			$anh1 = $_POST['anh1'];
		}
        if ($_POST['anh2'] == '') {
			$error_anh2 = '<span style="color:red;">(*)<span>';
		} else {
			$anh2 = $_POST['anh2'];
		}
        if ($_POST['anh3'] == '') {
			$error_anh3 = '<span style="color:red;">(*)<span>';
		} else {
			$anh3 = $_POST['anh3'];
		}
        if ($_POST['anh4'] == '') {
			$error_anh4 = '<span style="color:red;">(*)<span>';
		} else {
			$anh4 = $_POST['anh4'];
		}
        if ($_POST['desc'] == '') {
            $error_desc = '<span style="color:red;">(*)<span>';
        } else {
            $desc = $_POST['desc'];
        }
        if ($_POST['price'] == '') {
            $error_price = '<span style="color:red;">(*)<span>';
        } else {
            $price = $_POST['price'];
        }
        if ($_POST['length'] == '') {
            $error_length = '<span style="color:red;">(*)<span>';
        } else {
            $length = $_POST['length'];
        }
        if ($_POST['power'] == '') {
            $error_power = '<span style="color:red;">(*)<span>';
        } else {
            $power = $_POST['power'];
        }
        if ($_POST['distance'] == '') {
            $error_distance = '<span style="color:red;">(*)<span>';
        } else {
            $distance = $_POST['distance'];
        }
        $sqlInsert = "INSERT INTO oto (Ten, Anh1, Anh2, Anh3, Anh4, MoTa, GiaGomPin, Dai, CongSuat, QuangDuongDiChuyen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sqlInsert);
        
        $stmt->bind_param('ssssssssss', $name, $anh1, $anh2, $anh3, $anh4, $desc, $price, $length, $power, $distance);
        
        $stmt->execute();
		}
        header("Location: /profile/view_product");
    	?>