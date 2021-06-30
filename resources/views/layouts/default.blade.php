<!DOCTYPE html>
<html lang="en">

<head>
    <title>Link Tree</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Link Tree - Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FavIcon Link -->
    <!-- <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="16x16"> -->

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Slick Slider CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Fancybox CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">

    <!-- Simplebar CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/simplebar.css">

    <!-- Wow Animation CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

    <!-- Main Style CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="body-wp">
        <div class="body-inner">
            <div class="main-wrap">

                <header class="site-header">
                    <div class="site-header-inner">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="site-branding">
                                    <a href="index.php"><img src="assets/images/linktree-logo.svg" alt="linktree-logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="sidebar">
                    <div class="sidebar-nav">
                        <ul class="sidebar-nav-list">
                            <li class="sidebar--setting">
                                <a href="setting.php">
                                    <i class="fas fa-cog"></i>
                                </a>
                            </li>
                            <li class="sidebar--profile">
                                <a href="#">
                                    <div class="sidebar--profile-img back-img" style="background-image: url(assets/images/default-profile-picture.png);"></div>
                                </a>
                                <div class="sidebar--dropdown-nav">
                                    <div class="sidebar--dropdown-nav--divider">KaranGeek</div>
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                    <div class="sidebar--dropdown-nav--divider">TREES</div>
                                    <ul>
                                        <li class="active-account"><a href="#">@KaranGeek <i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('content')


<!-- Jquery JS Link -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap JS Link -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Slick Slider JS Link -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<!-- Fancybox JS Link -->
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

<!-- Simplebar JS Link -->
<script src="{{ asset('assets/js/simplebar.js') }}"></script>

<!-- Wow Animation JS Link -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<!-- Font Awesome JS Link -->
<script src="{{ asset('assets/js/font-awesome.min.js') }}"></script>

<!-- Custom JS Link -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>