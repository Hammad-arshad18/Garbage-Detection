<?php
session_start();
require '_connection.php';
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
    <title>SGM - Blog</title>
    <?php
    include "_imports.php";
    import_css();
    ?>
</head>
<body>
<?= get_header() ?>

<section class="blog-post">
    <div class="container">
        <h1 class="heading-blog">Blogs</h1>
        <div class="row-cols-1 justify-content-center">
            <?php
            if ($conn) {
                $blog_query = "SELECT `id`, `title`, `comment`, `date` FROM `sgm_blog`";
                $blog_query_run = mysqli_query($conn, $blog_query);
                if (mysqli_num_rows($blog_query_run) > 0) {
                    while ($data = mysqli_fetch_assoc($blog_query_run)) {
                        echo '
            <div class="col-10 col-md-8 shadow-sm">
                <h1>'.$data['title'].'</h1>
                <h5>(Admin)</h5>
                <h6><span>Posted on : </span> '.$data['date'].'</h6>
                <p>'.$data['comment'].'</p>
            </div>';
                    }
                }
            }
            ?>
        </div>
    </div>
</section>


<?= get_footer() ?>

<?= import_js() ?>
</body>
</html>

