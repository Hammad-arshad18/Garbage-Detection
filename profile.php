<?php
session_start();
$id = $_SESSION["uid"];
require "_connection.php";
if ($conn) {
    $profile_data_query = "SELECT * FROM `register_sgm` WHERE id = " . $id;
    $profile_query_run = mysqli_query($conn, $profile_data_query);
    if (mysqli_num_rows($profile_query_run) > 0) {
        while ($data = mysqli_fetch_assoc($profile_query_run)) {
            $uname = $data["name"];
            $uemail = $data["email"];
            $uimage = $data["image_path"];
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile - Admin Panel</title>
    <?php
    require "_imports.php";
    import_css();
    ?>
</head>
<body>
<!--Navbar-->
<?php get_header(); ?>

<section class="profile-body">
    <div class="container">
        <!--Personal Details-->
        <section class="personal-details">
            <div class="row">
                <div class="col-md">
                    <h4>Personal information</h4>
                    <p>Update's your account profile information & email address</p>
                </div>
                <div class="col-md shadow-sm">
                    <form action="profile.php" method="post" class="form-group">
                        <label class="form-text" for="user-name">Name</label>
                        <input type="text" class="form-control" name="user_name"
                               id="user-name" <?php echo "value='$uname'"; ?> />
                        <label class="form-text" for="user-email">Email</label>
                        <input type="email" class="form-control" name="user_email"
                               id="user-email" <?php echo "value='$uemail'"; ?> />
                        <button class="btn btn-success" id="update-data" name="udata">Update</button>
                    </form>
                </div>
            </div>
        </section>

        <!--Profile Picture-->
        <section class="p-picture">
            <div class="row">
                <div class="col-md">
                    <h4>Personal Picture</h4>
                    <p>Update's your Profile Picture</p>
                </div>
                <div class="col-md shadow-sm">
                    <div class="img-shower">
                        <img <?php echo "src='$uimage'"; ?> class="img-fluid" alt="Image"/>
                    </div>
                    <form action="profile.php" method="post" class="form-group">
                        <label class="form-text" for="user-pic">Upload New Profile Picture</label>
                        <input type="file" class="form-control" id="user-pic" accept="image/*"/>
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </section>


        <!--Update Password-->
        <section class="update-pass">
            <div id="alert-shower"></div>
            <div class="row">
                <div class="col-md">
                    <h4>Update Password</h4>
                    <p>Update's your account is a long random password to stay secure.</p>
                </div>
                <div class="col-md shadow-sm">
                    <form action="profile.php" method="post" class="form-group" id="pass-form">
                        <label class="form-text" for="new-pass">New Password</label>
                        <input type="password" class="form-control" id="new-pass"/>
                        <label class="form-text" for="conf-pass">Confirm Password</label>
                        <input type="password" class="form-control" id="conf-pass"/>
                        <button id="pass_update" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </section>


        <!--Delete Account-->
        <section class="delete-acc">
            <div class="row">
                <div class="col-md">
                    <h4>Delete Account</h4>
                    <p>Permanently delete your account</p>
                </div>
                <div class="col-md shadow-sm">
                    <form action="profile.php" method="post" class="form-group">
                        <p>once your account is deleted, all of its recources and data will permaneltly deleted.
                            before deleting your account, please download any data or information that you wish to
                            retain.</p>
                        <div class="del-btn-acc text-end">
                            <button class="btn btn-danger" id="delete_acc">DELETE ACCOUNT</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

</section>


<!--Footer-->
<?php get_footer(); ?>

<!--JS-->
<?php
import_js();
form_validation();
?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#update-data").on("click", function (e) {
            e.preventDefault();
            const uname = $("#user-name").val();
            const uemail = $("#user-email").val();
            $.ajax({
                url: "ajax-update.php",
                type: "POST",
                data: {user_name: uname, user_email: uemail, uid:<?php echo $id; ?>, f_submit: "udata"},
                success: function (data) {
                    if (data == 1) {
                        alert("Data Update");
                    }
                }
            });
        });

        //Password Change
        $("#pass_update").on("click", function (e) {
            e.preventDefault();
            const new_pass = $("#new-pass").val();
            const conf_pass = $("#conf-pass").val();
            $.ajax({
                url: "ajax-update.php",
                type: "POST",
                data: {newpass: new_pass, confpass: conf_pass, uid:<?php echo $id; ?>, f_submit: "password"},
                success: function (data) {
                    if (data == 1) {
                        alert("Password Update");
                        $("#pass-form").trigger("reset");
                    } else {
                        $("#alert-shower").html(data);
                    }
                }
            });
        });

        //    Delete Account
        $("#delete_acc").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                url: "ajax-update.php",
                type: "POST",
                data: {uid:<?php echo $id; ?>, f_submit: "delete_account"},
            });
        });
    });
</script>
</body>
</html>