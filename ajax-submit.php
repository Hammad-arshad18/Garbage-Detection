<?php
require "_connection.php";
if($conn){
    if($_POST["form_name"]=="contact"){
        $uname=$_POST["uname"];
        $uemail=$_POST["uemail"];
        $ucomment=$_POST["ucomment"];
        $contact_submit="INSERT INTO `sgm_contact`(`name`, `email`, `comment`) VALUES ('$uname','$uemail','$ucomment')";
        if(mysqli_query($conn,$contact_submit)){
            echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
  <strong><i class="bi bi-info-circle"></i> Thank You For Contacting Us.</strong> We\'ll Reach You Sooner!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
    }
}else{
    die("Connection With Db Not Establish");
}

