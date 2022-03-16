<?php session_start();
require "_connection.php";

if (isset($_SESSION["uname"]) and $_SESSION["login"] == true) {

} else {
    header("location:index.php");
}
if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
    $access_query="UPDATE `register_sgm` SET `approved`='1' WHERE id = '$uid'";
    mysqli_query($conn,$access_query);
}
if(isset($_GET['did'])){
    $uid=$_GET['did'];
    $delete_access_query="UPDATE `register_sgm` SET `approved`='0' WHERE id = '$uid'";
    mysqli_query($conn,$delete_access_query);
}

if ($conn) {
    if(isset($_POST["register_admin"])){
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
            header("location:dashboard.php");
        }
    }
} else {
    echo mysqli_connect_error();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Dashboard</title>
    <!--Includes-->
    <?php require "_imports.php"; import_css(); ?>
</head>
<body>
<!--Header-->
<?= get_header(); ?>

<!--Dashboard-->
<Section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 col-sm-2">
                <div class="side-menu shadow-sm">
                    <div class="logo-section">
                        <a href="index.php"> <img src="images/Logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="sections-list">
                        <ul>
                            <li><a href="#user">Users</a></li>
                            <li><a href="#add-admin">Add Admins</a></li>
                            <li><a href="#blog-post">Blog</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-9 ">
                <div id="user">
                    <div class="container">
                        <div class="heading-users">
                            <h1>Users</h1>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Image</td>
                                <td>Access</td>
                                <td>Access</td>
                            </tr>
                            <?php
                            if($conn){
                                $all_data_query="SELECT * FROM `register_sgm`";
                                $all_data_query_run=mysqli_query($conn,$all_data_query);
                                while ($data=mysqli_fetch_assoc($all_data_query_run)){
                                    echo '<tr>
                                <td>'.$data["name"].'</td>
                                <td>'.$data["email"].'</td>
                                <td><div class="img-table"><img src="'.$data["image_path"].'" alt="Image" class="img-fluid"></div></td>
                                <td><a href="dashboard.php?uid='.$data["id"].'" class="btn btn-success">Approve</a></td>
                                <td><a href="dashboard.php?did='.$data["id"].'" class="btn btn-danger">Delete</a></td>
                            </tr>';
                                }
                            }
                            ?>

                        </table>
                        </div>
                    </div>
                </div>
<!--Add Admin-->
                <div id="add-admin">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <h1>Add Admin</h1>
                                <p>Add New Admins For SGM</p>
                                <form action="dashboard.php" class="needs-validation" method="post" enctype="multipart/form-data"
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
                                    <div class="submit_btn">
                                        <button name="register_admin" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    if(isset($_POST["blog_btn"])){
                        $title=$_POST['blog_title'];
                        $post=$_POST['blog_comment'];
                        $blog_add="INSERT INTO `sgm_blog`(`title`, `comment`) VALUES ('$title','$post')";
                        mysqli_query($conn,$blog_add);
                    }
                }
                ?>

                <div id="blog-post">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-10 col-lg-8">
                                <h1>Blog Post</h1>
                                <form action="dashboard.php" class="needs-validation" novalidate method="post">
                                    <div class="form-group">
                                        <label for="blog_title" class="form-text">Title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="blog_title" id="blog_title"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label for="blog_comment" class="form-text">Post</label>
                                        <textarea required placeholder="Post" class="form-control" name="blog_comment" id="blog_comment" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="submit_btn">
                                        <button name="blog_btn" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>


<!--Footer-->
<?= get_footer(); ?>

<!--JS-->
<?= import_js(); ?>
<?= form_validation() ?>
</body>
</html>
