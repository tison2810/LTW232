            <?php
                if(isset($_SESSION['cart'])){
                if(isset($_POST['sl'])){
                foreach ($_POST['sl'] as $id => $sl) {
                //Nếu số lượng nhập vào là 0 thì unset sản phẩm đó
                    if($sl==0){
                        unset($_SESSION['cart'][$id]);
                    }else{
                //Nếu số khác 0 thì gán ngược lại.
                        $_SESSION['cart'][$id] = $sl;
                    }
                }
            }
            
            $arrId = array();
            //Lấy ra id sản phẩm từ mảng session
            foreach ($_SESSION['cart'] as $id => $sl) {
                $arrId[] = $id;
            }
            //Tách mảng arrId thành 1 chuỗi và ngăn cách bởi dấu ,
            $strID = implode(',', $arrId);
            if(isset($sl)){
            $link = mysqli_connect("localhost","root","","vinfast");
            $sql = "SELECT * FROM oto WHERE ID IN ($strID)";
            $query = mysqli_query($link, $sql);
            $totalPriceAll = 0;
           
        ?>
        <a class="button-account" href="/profile/add_product">Thanh toán</a>
            <table class="table">
                <thead>
                    <tr style="text-align:center">
                    <th scope="col">Tên</th>
                        <th scope="col">Ảnh</th>
                        
                        <th scope="col">Giá (Gồm Pin)</th>  
                        <th scope="col">Số lượng</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                        while($row = mysqli_fetch_assoc($query)){
                        $totalPrice = $_SESSION['cart'][$row['ID']]*$row['GiaGomPin'];
                    ?>
                    <tr style="text-align:center">
                        <td>
                            <?php echo $row['Ten'] ?>
                        </td>
                        <td>
                            <img style="height: 100px; width: 200px;" src="<?php echo $row["Anh1"] ?>">
                        </td>
                        <td><?php echo $row['GiaGomPin'] ?>Đ</td>
                        <td class="col-1">
                            <form action="" method="POST">
                                <input class="form-control" type="text" name="sl[<?php echo $row['ID'] ?>]" value="<?php echo $_SESSION['cart'][$row['ID']]?>" />
                            </form>
                        </td>
                        <td><?php echo $totalPrice ?>Đ</td>
                        <td>
                            <a href="/delete_cart/<?php echo $row['ID'] ?>" style="text-decoration: none;">Xóa</a>
                        </td>
                    </tr>
                    <?php
                        $totalPriceAll+=$totalPrice;
                        }
                    ?>
                    <tr>
                        <td colspan="6" style="text-align: right;">
                            Tổng tiền:
                            <span style="color: rgb(17, 17, 136); font-weight:600;"><?php echo $totalPriceAll ?>Đ</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
                }else{
                    echo 'Giỏ hàng rỗng';
                }
                }else{
            echo 'Giỏ hàng rỗng';
        }
            ?>
