<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "_imports.php";
    import_css();
    ?>
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','','sgm') or die("Connection Not Establish");
$select_query="SELECT * FROM `register_sgm`";
$run_query=mysqli_query($conn,$select_query);
?>
<div class="container">
    <div class="row justify-content-center">
<?php
while($data=mysqli_fetch_assoc($run_query)){
    echo '<div  class="col-md-3 p-3 m-3 border border-2">
            <img src="'.$data["image_path"].'" class="img-fluid">
            <h4>'.$data["name"].'</h4>
            <h6>'.$data["email"].'</h6>
        </div>';
}
?>
    </div>
</div>


<?php
import_js();
?>
</body>
</html>
