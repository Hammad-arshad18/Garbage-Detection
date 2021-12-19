<?php session_start();
require "_connection.php";
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
                <div class="side-menu shadow">
                    <div class="logo-section">
                        <img src="images/Logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="sections-list">
                        <ul>
                            <li><a href="#">Users</a></li>
                            <li><a href="#">Add Admins</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-9 ">
                <div id="user">
                    <div class="container">
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
            </div>
        </div>
    </div>
</Section>


<!--Footer-->
<?= get_footer(); ?>

<!--JS-->
<?= import_js(); ?>
</body>
</html>
