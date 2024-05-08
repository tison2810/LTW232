<script>
    $(document).ready(function(){
  $(".btn-edit").click(function(){
    var id = $(this).data('id'); // Get the ID from the data attribute
    $("#product-id").val(id); // Set the ID as the value of the hidden input field
  });
});
</script>
<a class="button-account" href="/profile/add_product">Thêm mẫu xe mới</a>
<table class="table">
                    <thead>
                        <tr style="text-align:center">
                            <th scope="col">ID</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Giá (Gồm Pin)</th>
                            <th scope="col">Quãng đường di chuyển</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'vinfast');
                    $sql = "SELECT * FROM oto";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $rows = $result->fetch_all(MYSQLI_ASSOC);
                        foreach ($rows as $row) {
                    ?>
                    <tbody>
                        <tr class="justify-content-center">
                            <td style="text-align:center"><?php echo $row["ID"] ?></td>
                            <td style="text-align:center"><?php echo $row["Ten"] ?></td>
                            <td>
                                <img style="height: 100px; width: 200px;" src="<?php echo $row["Anh1"] ?>">
                            </td>
                            <td style="text-align:center"><?php echo $row["GiaGomPin"] ?></td>
                            <td style="text-align:center"><?php echo $row["QuangDuongDiChuyen"] ?></td>
                            <td style="text-align:center"><a href="/profile/edit_product/<?php echo $row["ID"]; ?>" style="text-decoration: none";>Sửa</a></td>
                            <td style="text-align:center"><a href="/profile/delete_product/<?php echo $row["ID"]; ?>" style="text-decoration: none";>Xóa</a></td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    }
                    $conn->close();
                    ?>
                </table>