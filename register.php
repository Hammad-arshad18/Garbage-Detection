<?php
include "_connection.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Register</title>
    <?php require "_imports.php";
    import_css();
    if ($conn) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["uimage"]["name"]);
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (move_uploaded_file($_FILES["uimage"]["tmp_name"], $target_file)) {
                $uname = $_POST["uname"];
                $uemail = $_POST["uemail"];
                $upassword = password_hash($_POST["upassword"], PASSWORD_DEFAULT);
                $image_path = "images/" . basename($_FILES["uimage"]["name"]);
                $register_query = "INSERT INTO `register_sgm`(`name`, `email`, `password`, `image_path`) VALUES ('$uname','$uemail','$upassword','$image_path')";
                mysqli_query($conn, $register_query) or die (mysqli_connect_error());
                $conn->close();
            }
            header("location:index.php");
        }
    } else {
        echo mysqli_connect_error();
    }
    ?>
</head>
<body>
<section class="main-body">
    <div class="blackbg"></div>
    <section class="register_screen">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-9 col-md-5 col-lg-4 shadow-lg">
                    <h1>register</h1>
                    <p>Register as a new user</p>
                    <form action="register.php" class="needs-validation" method="post" enctype="multipart/form-data"
                          novalidate>
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Username" name="uname" id="uname"
                                   required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="uemail" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="upassword"
                                   required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-upload"></i></span>
                            <input type="file" class="form-control" placeholder="Username" name="uimage"
                                   accept="image/*" required>
                        </div>
                        <div class="sign-up-portion">
                            <p>Already have an account ? <a href="index.php">Login</a></p>
                        </div>

                        <div class="submit_btn">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
<?php
import_js();
form_validation();
?>
</body>
</html>
