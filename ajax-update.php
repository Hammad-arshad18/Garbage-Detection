<?php
require "_connection.php";
if ($_POST["f_submit"] == "udata") {
    $uname = $_POST["user_name"];
    $uemail = $_POST["user_email"];
    $id = $_POST["uid"];
    if ($uname != "" and $uemail != "") {
        $update_user_data = "UPDATE `register_sgm` SET `name`='$uname',`email`='$uemail' WHERE id = " . $id;
        if (mysqli_query($conn, $update_user_data)) {
            echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
  <strong><i class="bi bi-info-circle"></i> Data Update Successfully</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
    } else {
        echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
  <strong><i class="bi bi-info-circle"></i> Please Fill The Both Input Boxes</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

} elseif ($_POST["f_submit"] == "password") {
    $new_pass = $_POST["newpass"];
    $conf_pass = $_POST["confpass"];
    $id = $_POST["uid"];
    if ($new_pass != "" and $conf_pass != "") {
        if ($new_pass === $conf_pass) {
            $new_pass_hash = password_hash($new_pass, PASSWORD_DEFAULT);
            $change_pass_query = "UPDATE `register_sgm` SET `password`= '$new_pass_hash' WHERE id = " . $id;
            if (mysqli_query($conn, $change_pass_query)) {
                echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
  <strong><i class="bi bi-info-circle"></i> Password Update Successfully</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show m-0" role="alert">
  <strong><i class="bi bi-info-circle"></i> Please Write the Same Password in Both Fields</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
    } else {
        echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
  <strong><i class="bi bi-info-circle"></i> Please Fill The Both Input Boxes</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}
