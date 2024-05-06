<?php require_once "view/profile.php"; ?>
<?php
                    $conn = new mysqli('localhost', 'root', '', 'vinfast');
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM oto WHERE ID = $id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
<div class="change-info">
    <div class="component"><div class="title" style="font-weight: bold;">CHỈNH SỬA SẢN PHẨM</div></div>
        <div class="change-info-car">
            <form method="POST" action="/profile/update_product/<?php echo $row["ID"] ?>">
                <input class="form-control mt-3" type="text" name="name" id="name" placeholder="Tên" value="<?php echo $row["Ten"] ?>">
                <input class="form-control mt-3" type="text" name="anh1" id="anh1" placeholder="Link ảnh 1" value="<?php echo $row["Anh1"] ?>">
                <input class="form-control mt-3" type="text" name="anh2" id="anh2" placeholder="Link ảnh 2" value="<?php echo $row["Anh2"] ?>">
                <input class="form-control mt-3" type="text" name="anh3" id="anh3" placeholder="Link ảnh 3" value="<?php echo $row["Anh3"] ?>">
                <input class="form-control mt-3" type="text" name="anh4" id="anh4" placeholder="Link ảnh 4" value="<?php echo $row["Anh4"] ?>">
                <input class="form-control mt-3" type="text" name="desc" id="desc" placeholder="Mô tả" value="<?php echo $row["MoTa"] ?>">
                <input class="form-control mt-3" type="text" name="price" id="price" placeholder="Giá gồm pin" value="<?php echo $row["GiaGomPin"] ?>">
                <input class="form-control mt-3" type="text" name="length" id="length" placeholder="Chiều dài" value="<?php echo $row["Dai"] ?>">
                <input class="form-control mt-3" type="text" name="power" id="power" placeholder="Công suất" value="<?php echo $row["CongSuat"] ?>">
                <input class="form-control mt-3" type="text" name="distance" id="distance" placeholder="Quãng đường di chuyển" value="<?php echo $row["QuangDuongDiChuyen"] ?>">
            </div>
        <div class="submit-button-car">
            <div class="container-login100-form-btn" style="margin-left: 100px;">
                <button class="form btn btn-outline-primary mt-3" type="submit" name="submit" style="font-size: 20px; font-weight: bold;">
                        Cập nhật thay đổi
                </button>
            </div>
            </form>
            <?php 
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
        </div>
    </div>
</div>
</body>
</html>