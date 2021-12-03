<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIVE - Admin Panel</title>
    <?php
    require "_imports.php";
    import_css();
    ?>
</head>
<body>
<!--Navbar-->
<?php get_header(); ?>

<section class="live-video">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Camera 1</h2>
                <div class="video-portion">
                    <video controls>
                        <source src="video/">
                    </video>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Camera 2</h2>
                <div class="video-portion">
                    <video controls>
                        <source src="video/">
                    </video>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Camera 3</h2>
                <div class="video-portion">
                    <video controls>
                        <source src="video/">
                    </video>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Camera 4</h2>
                <div class="video-portion">
                    <video controls>
                        <source src="video/">
                    </video>
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