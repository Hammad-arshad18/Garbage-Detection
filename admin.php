<?php
session_start();
if (isset($_SESSION["uname"]) and $_SESSION["login"] == true) {

} else {
    header("location:index.php");
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Admin Panel</title>
    <?php
    require "_imports.php";
    import_css();
    ?>
</head>
<body>
<!--Navbar-->
<?php get_header(); ?>

<!--Banner-->
<section class="banner shadow-sm">
    <div class="black-div"></div>
    <div class="text-banner">
        <h1>smart garbage management for sustainable city life</h1>
    </div>
</section>

<!--Problem-->
<section class="problem-us">
    <div class="container">
        <div class="problem-content">
            <div class="problem-heading">
                <h1>Problem</h1>
            </div>
            <div class="problem-text">
                <p>
                    One of the biggest problems that municipalities around Pakistan have to deal with is waste
                    management.
                    Everyday waste leaves the homes of citizens and then arrives in the designated waste collection
                    areas,
                    which in turn have to be transported by waste workers to waste collection and treatment centers.
                    Unfortunately, in this process, various problems arise which have an impact on the environment and
                    on
                    people’s quality of life, In Pakistan, there are a lot of things that need to solve to make Pakistan
                    a
                    well-developing country. This is one of the major problems that need to be solved. This makes
                    Pakistan
                    dirty & unhealthy for our health because that thing creates a lot of diseases which make people ill.
                    As
                    Countries are going smart day by day there is a need to develop the intelligent & most efficient way
                    to
                    solve this problem. For this problem, this system enables Pakistan to become neat & clean. The
                    System
                    detects garbage through cameras & generates alerts to the system. The department of Refinement sends
                    the
                    team to the particular area & cleans the whole garbage/garbage from that area.
                    This makes us safe from many of the major diseases like Malaria & Dengue caused by mosquitos.
                </p>
            </div>
            <div class="problem-learn">
                <a href="about.php" class="btn btn-success"><i class="bi bi-info-circle"></i> Learn More</a>
            </div>
        </div>
    </div>
</section>

<!--Contact Us-->
<section class="contact-us">
    <div class="container">
        <div id="contact-msg"></div>
        <div class="row justify-content-center">
            <div class="col-md-6 align-self-center">
                <img src="images/contact.png" alt="Contact" class="img-fluid">
            </div>
            <div class="col-10 col-md-6">
                <h1>Contact Us</h1>
                <form action="admin.php" id="contact-form" class="needs-validation" method="post" novalidate>
                    <label class="form-text" for="c_name">Name</label>
                    <input placeholder="Name" class="form-control" name="c_name" id="c_name" type="text" required>
                    <label class="form-text" for="c_email">Email</label>
                    <input placeholder="Email" class="form-control" name="c_email" id="c_email" type="text" required>
                    <label class="form-text" for="c_comment">Comment</label>
                    <textarea placeholder="Comment" class="form-control" name="c_comment" id="c_comment" cols="30"
                              rows="5" required></textarea>
                    <div class="contact-submit">
                        <button id="contact-submit">Submit</button>
                    </div>
                </form>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#contact-submit").on("click", function (e) {
            e.preventDefault();
            const name = $("#c_name").val();
            const email = $("#c_email").val();
            const comment = $("#c_comment").val();
            $.ajax({
                url: "ajax-submit.php",
                type: "POST",
                data:{uname:name,uemail:email,ucomment:comment,form_name:"contact"},
                success:function (data) {
                    $("#contact-msg").html(data);
                    $("#contact-form").trigger("reset");
                }
            });
        });
    });
</script>
</body>
</html>
