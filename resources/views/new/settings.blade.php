@extends('new.header')
@section('content-new')

<div class="body-wp">
    <div class="body-inner">
        <div class="main-wrap">

            <header class="site-header">
                <div class="site-header-inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="site-branding">
                                <a href="/admin"><img src="{{ asset('assets/images/linktree-color-logo.svg') }}" alt="linktree-color-logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="sidebar">
                <div class="sidebar-nav">
                    <ul class="sidebar-nav-list">
                        <li class="sidebar--setting">
                            <a href="/admin/settings">
                                <i class="fas fa-cog"></i>
                            </a>
                        </li>
                        <li class="sidebar--profile">
                            <a href="/admin">
                                <div class="sidebar--profile-img back-img" style="background-image: url({{ asset('assets/images/default-profile-picture.png') }});"></div>
                            </a>
                            <div class="sidebar--dropdown-nav">
                                <div class="sidebar--dropdown-nav--divider">DivyangGeek</div>
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                                <div class="sidebar--dropdown-nav--divider">TREES</div>
                                <ul>
                                    <li class="active-account"><a href="/admin">@divyanggeek<i class="fas fa-star"></i></a></li>
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
                                    <label for="whatsapp_url" class="form-label">WhatsApp</label>
                                    <input type="text" id="whatsapp_url" placeholder="+00000000000" class="form-input">
                                </div>
                                <div class="form-input-span">
                                    <label for="telegram_url" class="form-label">Telegram URL</label>
                                    <input type="text" id="telegram_url" placeholder="https://t.me/" class="form-input">
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
                        <a href="{{ URL::to('/') }}/{{Auth::user()->username}}" target="_black" class="toolbar-url-text">{{ URL::to('/') }}/{{Auth::user()->username}}</a>
                    </div>
                    <div class="toolbar-header-buttons">
                        <ul>
                            <li><a href="javascript:void(0);" class="toolbar-link-copy"><i class="far fa-copy"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fas fa-qrcode"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="toolbar-content-box">
                <div class="toolbar-mobile-frame back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_1_mob.jpg') }});">
                    <div class="toolbar-mobile-frame-inr">
                        <div class="toolbar-mf-box">
                            <div class="toolbar-mf-header">
                                <div class="toolbar-mf-prof-image back-img" style="background-image: url({{ asset('assets/images/default-profile-picture.png') }});"></div>
                                <div class="toolbar-mf-header-content">
                                    <h4 class="h4-title">Divyang</h4>
                                    <div class="toolbar-mf-header-text">
                                        <p>description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="toolbar-mf-button-group">
                                <ul>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn toolbar-white-btn toolbar-btn-img-wp">
                                            <span>Button</span>
                                            <span class="toolbar-btn-img">
                                                <img src="{{ asset('assets/images/default-profile-picture.png') }}" alt="default-profile-picture">
                                            </span>
                                            <!-- <span class="toolbar-btn-img toolbar-btn-icon" style="-webkit-mask-image: url('{{ asset('assets/images/default-profile-picture.png') }}');"></span> -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn toolbar-white-btn"><span>Button</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn toolbar-white-btn"><span>Button</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn toolbar-white-btn"><span>Button</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="toolbar-mf-social-group">
                                <ul>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fas fa-envelope"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-twitter"></i></a></li>
                                    <!-- <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-soundcloud"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-bandcamp"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-telegram-plane"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-twitch"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-patreon"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-tiktok"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-spotify"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-amazon"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fas fa-music"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-snapchat-ghost"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fas fa-podcast"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-app-store"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-google-play"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fas fa-dollar-sign"></i></a></li>
                                    <li><a href="#" class="toolbar-mf-social-btn"><i class="fab fa-etsy"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="toolbar-mf-logo">
                            <a href="#">
                                <img src="{{ asset('assets/images/linktree-color-logo.svg') }}" alt="linktree-color-logo" class="toolbar-color-logo">
                                <img src="{{ asset('assets/images/linktree-white-logo.svg') }}" alt="linktree-white-logo" class="toolbar-white-logo active">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <script>
    jQuery(document).ready(function($) {
        $(".add-new-module-link").click(function() {
            $.ajax({
                type: 'POST',
                url: '/admin/link-add',
                data: {
                    '_token': '{{ csrf_token() }}'
                },
                success: function(data) {
                    var html = '<div class="addlink-box-wp"><div class="addlink-box"><div class="addlink-drag"></div><div class="addlink-right-content"><div class="addlink-plus"> <svg xmlns="http://www.w3.org/2000/svg" width="22.001" height="22" viewBox="0 0 22.001 22"> <path id="plus-icon" d="M22,9.5v3A1.494,1.494,0,0,1,20.5,14H14v6.5A1.494,1.494,0,0,1,12.5,22h-3A1.494,1.494,0,0,1,8,20.5V14H1.5a1.447,1.447,0,0,1-1.063-.438A1.446,1.446,0,0,1,0,12.5v-3A1.447,1.447,0,0,1,.438,8.437,1.447,1.447,0,0,1,1.5,8H8V1.5A1.447,1.447,0,0,1,8.438.438,1.447,1.447,0,0,1,9.5,0h3a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,14,1.5V8h6.5A1.494,1.494,0,0,1,22,9.5Z"></path> </svg></div><div class="addlink-con-inr-top"><div class="addlink-con-title"> <input type="text" class="input-addlink-title" name="link" value=""> <span class="addlink-con-title-text">Link Name</span> <button class="add-edit-button"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"> <path id="edit-button" d="M19.985,5.464,16.7,2.155a1.157,1.157,0,0,0-1.635,0L3.413,13.81l-1.064,4.6a1.155,1.155,0,0,0,1.12,1.4,1.2,1.2,0,0,0,.241,0l4.641-1.066L19.985,7.1A1.162,1.162,0,0,0,19.985,5.464ZM7.791,17.736l-4.35.914.991-4.274,8.717-8.7,3.359,3.365ZM17.258,8.23,13.9,4.864l1.948-1.941,3.3,3.365Z" transform="translate(-2.322 -1.817)"></path> </svg> </button></div><div class="addlink-con-link"> <input type="text" class="input-addlink-link" name="title" value=""> <span class="addlink-con-link-text">https://url.com</span> <button class="add-edit-button"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"> <path id="edit-button" d="M19.985,5.464,16.7,2.155a1.157,1.157,0,0,0-1.635,0L3.413,13.81l-1.064,4.6a1.155,1.155,0,0,0,1.12,1.4,1.2,1.2,0,0,0,.241,0l4.641-1.066L19.985,7.1A1.162,1.162,0,0,0,19.985,5.464ZM7.791,17.736l-4.35.914.991-4.274,8.717-8.7,3.359,3.365ZM17.258,8.23,13.9,4.864l1.948-1.941,3.3,3.365Z" transform="translate(-2.322 -1.817)"></path> </svg> </button></div></div><div class="addlink-more"> <button class="addlink-more-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="4.5" height="22.5" viewBox="0 0 4.5 22.5"> <g id="overflow-menu-vertical" transform="translate(-15.75 -6.75)"> <path id="Path_22" data-name="Path 22" d="M20.25,9A2.25,2.25,0,1,1,18,6.75,2.25,2.25,0,0,1,20.25,9Z"></path> <path id="Path_23" data-name="Path 23" d="M20.25,18A2.25,2.25,0,1,1,18,15.75,2.25,2.25,0,0,1,20.25,18Z"></path> <path id="Path_24" data-name="Path 24" d="M20.25,27A2.25,2.25,0,1,1,18,24.75,2.25,2.25,0,0,1,20.25,27Z"></path> </g> </svg> </button><div class="addlink-more-popup"><ul><li class="addlink-disable"> <a href="#"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"> <g id="power-button" transform="translate(-19.787)"> <g id="Group_57" data-name="Group 57" transform="translate(19.787 2.892)"> <path id="Path_46" data-name="Path 46" d="M26.787,76.972a7.064,7.064,0,0,1-7-7.111,7.166,7.166,0,0,1,2.932-5.787,1.094,1.094,0,0,1,1.542.26A1.134,1.134,0,0,1,24,65.9,4.9,4.9,0,0,0,22,69.861a4.79,4.79,0,1,0,9.579,0A4.9,4.9,0,0,0,29.569,65.9a1.134,1.134,0,0,1-.256-1.566,1.094,1.094,0,0,1,1.542-.26,7.166,7.166,0,0,1,2.932,5.787A7.064,7.064,0,0,1,26.787,76.972Z" transform="translate(-19.787 -63.864)"></path> </g> <g id="Group_58" data-name="Group 58" transform="translate(25.679)"> <path id="Path_47" data-name="Path 47" d="M151.422,8.5a1.108,1.108,0,0,1-1.108-1.108V1.108a1.108,1.108,0,0,1,2.216,0v6.28A1.108,1.108,0,0,1,151.422,8.5Z" transform="translate(-150.314)"></path> </g> </g> </svg> </span> Disable </a></li><li class="addlink-share"> <a href="#"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.211" viewBox="0 0 16 14.211"> <path id="Path_45" data-name="Path 45" d="M143.817,6.2l-5.778-6a.667.667,0,0,0-1.147.463V3.556h-.222A8.677,8.677,0,0,0,128,12.223v1.333a.658.658,0,0,0,.519.637.6.6,0,0,0,.147.018.69.69,0,0,0,.609-.38,7.291,7.291,0,0,1,6.558-4.053h1.056v2.889a.667.667,0,0,0,1.147.462l5.778-6a.667.667,0,0,0,0-.925Zm0,0" transform="translate(-128.003 -0.001)"></path> </svg> </span> Share </a></li><li class="addlink-pinlink"> <a href="#"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.997" viewBox="0 0 16 15.997"> <path id="office-pin" d="M15.864,3.9c.4-.4-.107-1.555-1.132-2.58S12.582-.2,12.169.176L12.161.169l-5.678,5.1a2.664,2.664,0,0,0-3.637.116.9.9,0,0,0,0,1.27L5.421,9.23.128,15.206a.507.507,0,0,0,.717.716l5.968-5.3.256.256L8.4,12.2h0l.992.991a.9.9,0,0,0,1.27,0,2.665,2.665,0,0,0,.116-3.637l5.073-5.649C15.851,3.9,15.859,3.9,15.864,3.9Z" transform="translate(0 -0.053)"></path> </svg> </span> Pin Link </a></li><li class="addlink-addschedule"> <a href="#"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.009" viewBox="0 0 16 16.009"> <g id="calendar" transform="translate(0.002 -0.001)"> <path id="Path_48" data-name="Path 48" d="M76.152,32.448v2.237H62V32.448A.46.46,0,0,1,62.474,32h2.358v1.342a.472.472,0,0,0,.943,0V32h2.83v1.342a.472.472,0,0,0,.943,0V32h2.83v1.342a.472.472,0,0,0,.943,0V32h2.358A.46.46,0,0,1,76.152,32.448Z" transform="translate(-60.154 -31.045)"></path> <path id="Path_49" data-name="Path 49" d="M449.644,152.551a39.036,39.036,0,0,1-1.912,10.722h1.47a.448.448,0,0,0,.447-.447Z" transform="translate(-433.651 -147.272)"></path> <path id="Path_50" data-name="Path 50" d="M152.9.448V.956H152V.448a.447.447,0,1,1,.895,0Z" transform="translate(-147.24)"></path> <path id="Path_51" data-name="Path 51" d="M272.9.448V.956H272V.448a.447.447,0,1,1,.895,0Z" transform="translate(-263.48)"></path> <path id="Path_52" data-name="Path 52" d="M392.9.448V.956H392V.448a.447.447,0,0,1,.895,0Z" transform="translate(-379.719)"></path> <path id="Path_53" data-name="Path 53" d="M8.992,154.517a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241,2.283,2.283,0,0,0-2.365-3.024Zm.94,3.58H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Zm-8-5.817A36.614,36.614,0,0,1,.024,162.425a.452.452,0,0,0,.444.593H13.041A36.765,36.765,0,0,0,15.1,152.28Zm10.332,5.478a5.558,5.558,0,0,1-5.157,3.918,3.183,3.183,0,0,1-3.276-4.136,5.558,5.558,0,0,1,5.157-3.918,3.183,3.183,0,0,1,3.276,4.136Zm-3.276-3.241a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241A2.283,2.283,0,0,0,8.992,154.517Zm.94,3.58H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Zm-.94-3.58a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241m-1.424.556H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Z" transform="translate(0 -147.009)"></path> </g> </svg> </span> Add Schedule </a></li><li class="addlink-delete"> <a href="#"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="11.613" height="16" viewBox="0 0 11.613 16"> <g id="delete" transform="translate(-40.72 0)"> <g id="Group_116" data-name="Group 116" transform="translate(40.72 0)"> <g id="Group_115" data-name="Group 115" transform="translate(0 0)"> <path id="Path_129" data-name="Path 129" d="M95.862,19.93l-7.359-3.5a.74.74,0,0,0-.985.351l-.251.528,8.695,4.13.251-.527A.74.74,0,0,0,95.862,19.93Z" transform="translate(-84.671 -15.491)"></path> <path id="Path_130" data-name="Path 130" d="M41.092,88.7a.372.372,0,0,0-.371.4l.752,9.021a1.853,1.853,0,0,0,1.836,1.689h4.206a1.853,1.853,0,0,0,1.836-1.689l.689-8.263L47.6,88.7Z" transform="translate(-40.72 -83.81)"></path> <path id="Path_131" data-name="Path 131" d="M150.661,1.083A.593.593,0,0,1,151.45.8l1.38.655a.593.593,0,0,1,.281.79l-.169.356.672.319.169-.356a1.338,1.338,0,0,0-.634-1.78L151.769.13a1.336,1.336,0,0,0-1.78.634l-.169.356.672.319Z" transform="translate(-143.887 0)"></path> </g> </g> </g> </svg> </span> Delete </a></li></ul></div></div></div></div></div>';
                    jQuery(".addlink-boxes-inner").prepend(html);
                    console.log(data);
                }
            });
        });

        $(document).on("click", ".addlink-con-title .addlink-con-title-text, .addlink-con-title .add-edit-button", function() {
            $(this).parents(".addlink-con-title").find(".addlink-con-title-text, .add-edit-button").hide();
            $(this).parents(".addlink-con-title").find(".input-addlink-title").show();
            $(this).parents(".addlink-con-title").find(".input-addlink-title").focus();
        });

        $(document).on("click", ".addlink-con-link .addlink-con-link-text, .addlink-con-link .add-edit-button", function() {
            $(this).parents(".addlink-con-link").find(".addlink-con-link-text, .add-edit-button").hide();
            $(this).parents(".addlink-con-link").find(".input-addlink-link").show();
            $(this).parents(".addlink-con-link").find(".input-addlink-link").focus();
        });

        $(document).on("focusout", ".input-addlink-title", function() {
            var link_id = $(this).parents(".addlink-con-inr-top").attr('data-link_id');
            var title_val = $(this).val();
            var link_val = $(this).parents(".addlink-con-inr-top").find(".input-addlink-link").val();
            if (title_val == '') {
                title_val = 'Link Name';
            }
            $(this).parents(".addlink-con-title").find(".addlink-con-title-text").html(title_val);
            $(this).parents(".addlink-con-title").find(".addlink-con-title-text, .add-edit-button").show();
            $(this).parents(".addlink-con-title").find(".input-addlink-title").hide();
            $.ajax({
                type: 'POST',
                url: '/admin/link-edit',
                data: {
                    'link_title': $(this).val(),
                    'link_url': link_val,
                    'id': link_id,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                }
            });
        });

        jQuery(document).on("click", ".change-link-val button, .change-link-val .eQIJpy", function() {
            var prev_val = jQuery(this).parents(".link-main-wrapper").find(".link-input-val").text();
            if (prev_val == "Linkedin" || prev_val == "https://url.com") {
                prev_val = '';
            }
            jQuery(this).parents('.change-link-val').addClass('hqQOJG');
            jQuery(this).parents(".link-main-wrapper").find(".link-val-field").addClass('jpzPff');
            jQuery(this).parents(".link-main-wrapper").find('.link-input-field').focus().val(prev_val);
        });

        $(document).on("focusout", ".link-val-field", function() {
            $(this).removeClass('jpzPff');
            $(".change-link-val").removeClass('hqQOJG');
            var link_id = $(this).parents(".addlink-con-inr-top").attr('data-link_id');
            var title_val = $(this).parents(".addlink-con-inr-top").find(".input-addlink-title").val();
            var link_val = $(this).val();
            if (link_val == '') {
                link_val = 'https://url.com';
            }
            $(this).parents(".addlink-con-link").find(".addlink-con-link-text").html(link_val);
            $(this).parents(".addlink-con-link").find(".addlink-con-link-text, .add-edit-button").show();
            $(this).parents(".addlink-con-link").find(".input-addlink-link").hide();
            $.ajax({
                type: 'POST',
                url: '/admin/link-edit',
                data: {
                    'link_title': title_val,
                    'link_url': $(this).val(),
                    'id': link_id,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                }
            });
        });
    });
</script> -->

@endsection