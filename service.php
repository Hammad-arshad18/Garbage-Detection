<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services - Admin Panel</title>
    <?php
    require "_imports.php";
    import_css();
    ?>
</head>
<body>
<!--Navbar-->
<?php get_header(); ?>

<section class="our-services">
    <div class="container">
        <h1>Our Services</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="images/services1.jpg" class="img-fluid" alt="Image">
                <div class="services-details">
                    <p>We'll provide live services to make city sustainable. Our Systems Detects Garbage Through cameras
                        & generates a task alert to the employees that there's a need of cleaning in the city at the
                        specific place. Cameras Fitting & giving you a startup setup is a part of our services. You'll
                        be happy after getting our services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<?php get_footer(); ?>

<!--JS-->
<?php
import_js();
form_validation();
?>
</body>
</html>
