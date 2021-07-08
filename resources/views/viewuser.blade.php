<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>List of Links</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Link Tree - Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FavIcon Link -->
    <!-- <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="16x16"> -->

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- Fancybox CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <!-- Simplebar CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/simplebar.css') }}">

    <!-- Wow Animation CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">

    <!-- Main Style CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <section class="page-view-section">
        <div class="toolbar-mf-bg preview_img_theme_1_back back-img" style="background-image: url(assets/images/preview_img_theme_1_mob.jpg);"></div>
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="page-view-box-wp">
                            <!-- @foreach($links as $link)
                    <div class="link-content">
                    <a href="{{ $link->link_url }}" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-fzozJi sc-pIJJz iCTckV"><p class="sc-AxhCb hFcqms">{{ $link->link_title }}</p></a>
                    </div>
                    @endforeach -->
                            <div class="toolbar-mf-box">
                                <div class="toolbar-mf-header">
                                    <div class="toolbar-mf-prof-image back-img" style="background-image: url(assets/images/default-profile-picture.png);"></div>
                                    <div class="toolbar-mf-header-content">
                                        <h4 class="h4-title">Divyang Geek</h4>
                                        <div class="toolbar-mf-header-text">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="toolbar-mf-button-group">
                                    <ul>
                                        <li>
                                            <a href="#" class="toolbar-mf-btn"><span>Linkedin</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="toolbar-mf-btn"><span>Geek Web</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="toolbar-mf-btn"><span>Twitter</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="toolbar-mf-btn"><span>Facebook</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="toolbar-mf-social-group">
                                    <ul>
                                        <li>
                                            <a href="#" class="toolbar-mf-social-btn"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="toolbar-mf-social-btn"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="toolbar-mf-social-btn"><i class="far fa-envelope" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toolbar-mf-logo">
                                <a href="#"><img src="{{ asset('assets/images/linktree-color-logo.svg') }}" alt="linktree-color-logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
<script>
    $(document).ready(function() {
        $("#add-link").click(function() {
            $(".links-container").append('<div class="link-content"><div class="link-field"><input type="text" class="link-title" placeholder="Enter title" value=""></div><div class="link-field"><input type="text" class="link-url" placeholder="Enter URL"  value=""></div><div class="button-container"><input type="hidden" class="link-type" val="Add"><input type="hidden" class="link-id" val=""><button type="button" class="save-link">Save</button><button type="button" class="delete-link">Delete</button></div></div>');
        });
        $(document).on("click", ".save-link", function() {
            var link_title = $(this).parents(".link-content").find(".link-title").val();
            console.log(link_title);
            var link_url = $(this).parents(".link-content").find(".link-url").val();
            console.log(link_url);
            $.ajax({
                type: 'POST',
                url: '/home/link-add',
                data: {
                    'link_title': link_title,
                    'link_url': link_url,
                    '_token': $("input[name=_token]").val()
                },
                success: function(data) {
                    console.log(data);
                }
            });
        });
        $(document).on("click", ".delete-link", function() {
            $(this).parents(".link-content").remove();
            $.ajax({
                type: 'POST',
                url: '/home/link-add',
                data: {
                    'link_title': link_title,
                    'link_url': link_url,
                    '_token': $("input[name=_token]").val()
                },
                success: function(data) {
                    console.log(data);
                }
            });
        });

    });
</script>