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

<div class="body-wp">
    <div class="body-inner">
        <div class="main-wrap">

            <header class="site-header">
                <div class="site-header-inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="site-branding">
                                <a href="index.php"><img src="{{ asset('assets/images/linktree-logo.svg') }}" alt="linktree-logo"></a>
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
                                <div class="sidebar--profile-img back-img" style="background-image: url({{ asset('assets/images/default-profile-picture.png') }});"></div>
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


            <div class="action-area-wp">
                <div class="action-area-wrap">
                    <div class="action-area">
                        <div class="setting-box-wp">
                            <div class="tab-title">
                                <h4 class="h4-title">Social Links</h4>
                            </div>
                            <div class="sec-box">
                                <div class="form-input-span">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" placeholder="your@emailaddress.com" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="facebook_page_url" class="form-label">Facebook Page URL</label>
                                    <input type="text" id="facebook_page_url" placeholder="https:/facebook.com/facebookpageurl" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="twitter_handle" class="form-label">Twitter Handle</label>
                                    <input type="text" id="twitter_handle" placeholder="@yourtwitterhandle" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="instagram_username" class="form-label">Instagram Username</label>
                                    <input type="text" id="instagram_username" placeholder="@instagramusername" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                                    <input type="text" id="linkedin_url" placeholder="https://linkedin.com/in/username" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="youTube_url" class="form-label">YouTube URL</label>
                                    <input type="text" id="youTube_url" placeholder="https://youtube.com/channel/youtubechannelurl" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="soundcloud_url" class="form-label">SoundCloud URL</label>
                                    <input type="text" id="soundcloud_url" placeholder="https://soundcloud.com/username" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="bandcamp_url" class="form-label">Bandcamp URL</label>
                                    <input type="text" id="bandcamp_url" placeholder="https://you.bandcamp.com/" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="clubhouse_url" class="form-label">Clubhouse URL</label>
                                    <input type="text" id="clubhouse_url" placeholder="https://clubhouse.com/@profile" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="substack_url" class="form-label">Substack URL</label>
                                    <input type="text" id="substack_url" placeholder="https://you.substack.com" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="whatsapp_url" class="form-label">WhatsApp</label>
                                    <input type="text" id="whatsapp_url" placeholder="+00000000000" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="telegram_url" class="form-label">Telegram URL</label>
                                    <input type="text" id="telegram_url" placeholder="https://t.me/" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="signal_url" class="form-label">Signal URL</label>
                                    <input type="text" id="signal_url" placeholder="https://signal.group/" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="twitch_url" class="form-label">Twitch URL</label>
                                    <input type="text" id="twitch_url" placeholder="https://twitch.tv/" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="patreon_url" class="form-label">Patreon URL</label>
                                    <input type="text" id="patreon_url" placeholder="https://patreon.com/" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="cameo_url" class="form-label">Cameo URL</label>
                                    <input type="text" id="cameo_url" placeholder="https://cameo.com/" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="pinterest_url" class="form-label">Pinterest URL</label>
                                    <input type="text" id="pinterest_url" placeholder="https://pinterest.com/" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="tikTok_username" class="form-label">TikTok Username</label>
                                    <input type="text" id="tikTok_username" placeholder="@tiktokusername" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="spotify_url" class="form-label">Spotify URL</label>
                                    <input type="text" id="spotify_url" placeholder="https://open.spotify.com/artist/artistname" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="amazon_url" class="form-label">Amazon URL</label>
                                    <input type="text" id="amazon_url" placeholder="https://amazon.com/shop/yourshopname" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="apple_music_url" class="form-label">Apple Music URL</label>
                                    <input type="text" id="apple_music_url" placeholder="https://music.apple.com/us/album/youralbum" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="snapchat_url" class="form-label">Snapchat URL</label>
                                    <input type="text" id="snapchat_url" placeholder="https://www.snapchat.com/add/yourusername" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="apple_podcast_url" class="form-label">Apple Podcast URL</label>
                                    <input type="text" id="apple_podcast_url" placeholder="https://podcasts.apple.com/us/podcast/yourpodcast/123456789" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="apple_app_store_url" class="form-label">Apple App Store URL</label>
                                    <input type="text" id="apple_app_store_url" placeholder="https://apps.apple.com/us/yourapp/id1234567890" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="android_play_store_url" class="form-label">Android Play Store URL</label>
                                    <input type="text" id="android_play_store_url" placeholder="https://play.google.com/store/apps/details?id=com.yourapp.app" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="payment_url" class="form-label">Payment URL (PayPal, Venmo or Cash.app)</label>
                                    <input type="text" id="payment_url" placeholder="https://venmo.com/yourusername" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="etsy_url" class="form-label">Etsy URL</label>
                                    <input type="text" id="etsy_url" placeholder="https://www.etsy.com/shop/yourshop" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="poshmark_url" class="form-label">Poshmark URL</label>
                                    <input type="text" id="poshmark_url" placeholder="https://poshmark.com/closet/yourcloset" class="form-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="toolbar-wrap">
            <div class="toolbar-header">
                <div class="toolbar-header-inner">
                    <span class="toolbar-label">My Link:</span>
                    <div class="toolbar-url">
                        <a href="https://linktr.ee/KaranGeek" target="_black" class="toolbar-url-text">https://linktr.ee/KaranGeek</a>
                    </div>
                    <div class="toolbar-header-buttons">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fas fa-copy"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fas fa-qrcode"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="toolbar-content-box">
                <div class="toolbar-mobile-frame">
                    <div class="toolbar-mf-bg back-img" style="background-image: url({{ asset('assets/images/preview-image8.jpg') }});"></div>
                    <div class="toolbar-mf-box">
                        <div class="toolbar-mf-header">
                            <div class="toolbar-mf-prof-image back-img" style="background-image: url({{ asset('assets/images/default-profile-picture.png') }});"></div>
                            <div class="toolbar-mf-header-content">
                                <h4 class="h4-title">Karan Rana</h4>
                                <div class="toolbar-mf-header-text">
                                    <p>hi, I am Karan Rana.</p>
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
                                    <a href="#" class="toolbar-mf-social-btn"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="toolbar-mf-social-btn"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="toolbar-mf-social-btn"><i class="far fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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