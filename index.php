<?php
session_start();
if(isset($_SESSION["uname"]) and $_SESSION["login"]==true){
    header("location:admin.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login</title>
    <?php require "_imports.php";
    import_css();
    require "_connection.php";
    if ($conn) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uemail = $_POST["uemail"];
            $password = $_POST["upassword"];
            $login_query = "SELECT * FROM `register_sgm` WHERE email = '$uemail' ";
            $login_query_run = mysqli_query($conn, $login_query);
            if(mysqli_num_rows($login_query_run) > 0){
                while ($data = mysqli_fetch_assoc($login_query_run)) {
                    if (password_verify($password, $data["password"])) {
                        if ($data["approved"] == 1) {
                            $_SESSION["uname"] = $data["name"];
                            $_SESSION["uid"]=$data["id"];
                            $_SESSION["login"] = true;
                            header("location:admin.php");
                        } else {
                            echo '<div class="alert alert-warning alert-dismissible fade show m-0" role="alert">
  <strong><i class="bi bi-info-circle"></i> ' . $data["name"] . '! Your Request as Admin is Currently Under Processing Please Wait....</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                        }

                    }
                    else {
                        echo '<div class="alert alert-danger m-0 alert-dismissible" role="alert" id="liveAlert"><i class="fas fa-exclamation-triangle"></i> Wrong
                            <strong> Username or Password!</strong> Try Again!!<button type = "button" class="btn-close" data-bs-dismiss = "alert" aria-label = "Close" ></button >
                            </div > ';
                    }
                }
            } else {
                echo '<div class="alert alert-danger m-0 alert-dismissible" role="alert" id="liveAlert"><i class="fas fa-exclamation-triangle"></i>
                            <strong> Account Not Found!</strong> Please Register!!<button type = "button" class="btn-close" data-bs-dismiss = "alert" aria-label = "Close" ></button >
                            </div > ';
            }
        }
    } else {
        echo mysqli_connect_error();
    }
    ?>
</head>
<body>
<section class="main-body">
    <div class="blackbg"></div>
    <section class="login_screen">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-9 col-md-5 col-lg-4 shadow-lg">
                    <h1>Login</h1>
                    <p>Sign in to your account</p>
                    <form method="post" class="needs-validation" novalidate>
                        <div class="input-group">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="uemail" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="upassword"
                                   required>
                        </div>
                        <div class="sign-up-portion">
                            <p>Are You New Here ? <a href="register.php">Register Here</a></p>
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
