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
    <title>About - Admin Panel</title>
    <?php
    require "_imports.php";
    import_css();
    ?>
</head>
<body>
<!--Navbar-->
<?php get_header(); ?>

<!--History-->
<section class="history">
    <div class="container">
        <div class="row justify-content-center">
            <div class="history-heading">
                <h1>History</h1>
            </div>
            <div class="col-10 col-md-8 align-self-start">
                <p>Piles of rubbish are one of the major problems faced by most people in Pakistan. Attention should be
                    given to the abandoned garbage both in public city areas or in places outside of town, such as the
                    countryside or suburban roads. Piles of garbage in Pakistan is the major issue which causes many major problems like pollution &
                    diseases like Dengue, Malaria that causes from mosquitoes. Everyday waste leaves from home & in
                    Pakistan, most of the time peoples throw trash in the corner of the street which mainly cause of
                    piles of garbage. There’s a need to fill this lack in our country to make our country neat &
                    clean.</p>
            </div>
        </div>
    </div>
</section>

<!--Out Team-->
<section class="our-team">
    <div class="container">
        <h1 class="our-team-heading">Our Team</h1>
        <div class="row justify-content-center">
            <div class="col-11 col-md-10 col-lg-3 shadow">
                <div class="img-portion">
                    <div class="image">
                        <img src="images/Hammad.jpg" alt="Hammad Arshad" class="img-fluid">
                    </div>
                </div>
                <div class="text-portion">
                    <div class="title">
                        <h4>Hammad Arshad</h4>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-snapchat"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-3 shadow">
                <div class="img-portion">
                    <div class="image">
                        <img src="images/wahab.jpeg" alt="Hammad Arshad" class="img-fluid">
                    </div>
                </div>
                <div class="text-portion">
                    <div class="title">
                        <h4>Abdul Wahab</h4>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-snapchat"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-3 shadow">
                <div class="img-portion">
                    <div class="image">
                        <img src="images/Seher.jpeg" alt="Hammad Arshad" class="img-fluid">
                    </div>
                </div>
                <div class="text-portion">
                    <div class="title">
                        <h4>Seher Jamil</h4>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-snapchat"></i></a></li>
                        </ul>
                    </div>
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
?>
</body>
</html>
