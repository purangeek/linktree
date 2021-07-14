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
                <div class="toolbar-mobile-frame back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_7_mob.jpg') }});">
                    <div class="toolbar-mobile-frame-inr toolbar-theme-7">
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
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn toolbar-btn-img-wp">
                                            <span>Button</span>
                                            <div class="toolbar-btn-img">
                                                <img src="{{ asset('assets/images/default-profile-picture.png') }}" alt="default-profile-picture">
                                            </div>
                                            <!-- <span class="toolbar-btn-img toolbar-btn-icon" style="-webkit-mask-image: url('{{ asset('assets/images/default-profile-picture.png') }}');"></span> -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn"><span>Button</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn"><span>Button</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn"><span>Button</span></a>
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
                                <div class="toolbar-mf-logo-img"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>