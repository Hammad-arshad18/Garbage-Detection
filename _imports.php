<?php
function import_css()
{
    echo '<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
          <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
';
}

function import_js()
{
    echo '
<script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
<script src="lib/jquery/jQuery.js"></script>
<script>
    document.addEventListener("contextmenu",o=>o.preventDefault());
</script>
';
}

function form_validation(){
    echo "<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
";
}

function get_header(){
    echo '<nav class="navbar navbar-expand-md navbar-light bg-light sticky-md-top shadow-sm">
    <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBackdrop"
                aria-controls="offcanvasWithBackdrop">
            <span class=""><i class="fas fa-bars"></i> </span>
        </button>
        <a class="navbar-brand" href="admin.php">SGM <span>Sustainable Life</span></a>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="admin.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="livecam.php"><i class="bi bi-webcam-fill"></i> Live Cam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php"><i class="bi bi-info-circle"></i> Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown hover" aria-expanded="false">
                        <i class="far fa-user"></i> Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
                        <li><a class="dropdown-item" href="_logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
     aria-labelledby="offcanvasWithBackdropLabel">
    <div class="offcanvas-header ">
        <a href="admin.php" ><h5 class="offcanvas-title shadow-sm" id="offcanvasWithBackdropLabel">SGM <span class="c_surgical">Sustainable Life</span>

            </h5></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul>
            <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="livecam.php"><i class="bi bi-webcam-fill"></i> Live Cam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php"><i class="bi bi-info-circle"></i> Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="bi bi-info-circle"></i> About</a>
                </li>
            <li>
                <a class="nav-link" href="#" dropdown-toggle type="button" id="dropdownMenuButton1"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-user"></i> Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                    <li><a class="dropdown-item" href="_logout.php">Logout</a></li>
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="footer-canvas">
        <p>&copy Copyright 2021 || <a href="">Hammad Arshad</a></p>
    </div>
</div>
';
}

function get_footer(){
    echo '<section class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="list-link">
                    <ul>
                        <li><a href="livecam.php"><i class="bi bi-webcam-fill"></i> Live Cam</a></li>
                        <li><a href="service.php"><i class="bi bi-info-circle"></i> Services</a></li>
                        <li><a href="faqs.php"><i class="far fa-question-circle"></i> Faq\'s</a></li>
                        <li><a href="about.php"><i class="bi bi-info"></i> About</a></li>
                    </ul>
                </div>
                <div class="description-text">
                    <p>Smart Garbage Management for sustainable city life is a system used to detect garbage from the
                        streets & generates an alert to the system. To Makes our cities clean there’s a dire need for
                        this project. This project is better than others because the previous project that was done only
                        detects some piece of garbage or sensors is applied in the lid of the dustbins. but there didn’t
                        exist such a system that could help detect the whole accumulation of garbage.</p>
                </div>
                <div class="copyright-portion">
                    <p>&copy;  '.Date("Y") .' Copyright Hammad Arshad</p>
                </div>
            </div>
        </div>
    </div>
</section>';
}

?>



