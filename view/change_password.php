<script>
    function validateChangePasswordForm() {
        const newPassword = document.getElementById("new_password").value;
        const confirmPassword = document.getElementById("confirm_password").value;

        if (newPassword === "" || confirmPassword === "") {
            alert("Please fill in all required fields.");
            return false;
        }

        if (newPassword !== confirmPassword) {
            alert("The new password and confirmation password do not match.");
            return false;
        }

        return true;
    }
</script>
        <?php
        if (isset($_SESSION['change_password_error'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            echo $_SESSION['change_password_error'];
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
            unset($_SESSION['change_password_error']);
        } elseif (isset($_SESSION['change_password_success'])) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $_SESSION['change_password_success'];
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
            unset($_SESSION['change_password_success']);
        }

        ?>
<div class="change-info">
    <div class="component"><div class="title" style="font-weight: bold;">ĐỔI MẬT KHẨU</div></div>
    <div class="change-info-form">
        <form action="/profile/change_password_handler/" method="POST" onsubmit="return validateChangePasswordForm();">
                <input class="form-control mt-3" type="password" name="current_password" id="current_password" placeholder="Mật khẩu hiện tại">
                <input class="form-control mt-3" type="password" name="new_password" id="new_password" placeholder="Mật khẩu mới">
                <input class="form-control mt-3" type="password" name="confirm_password" id="confirm_password" placeholder="Xác nhận mật khẩu mới">

                <div class="container-login100-form-btn">
                    <button class="form btn btn-outline-primary mt-3" type="submit" name="profile/change_password_handler/" style="font-size: 20px; font-weight: bold;">
                        ĐỔI MẬT KHẨU
                    </button>
                </div>
        </form>
    </div>
</div>
