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
                                    <a href="index.php"><img src="{{ asset('assets/images/linktree-color-logo.svg') }}" alt="linktree-color-logo"></a>
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
                            <div class="action-primary">
                                <div class="button-group">
                                    <a href="javascript:void(0);" data-child-tab="links-tab-box" class="tab-btn main-tab tab-active">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20.003" viewBox="0 0 20 20.003">
                                            <g id="link_-_icon" data-name="link - icon" transform="translate(-0.039 0)">
                                                <g id="Group_87" data-name="Group 87" transform="translate(0.039 6.405)">
                                                    <g id="Group_86" data-name="Group 86" transform="translate(0)">
                                                        <path id="Path_76" data-name="Path 76" d="M12.265,165.983a4.546,4.546,0,0,0-.785-.631,4.676,4.676,0,0,0-5.827.631l-4.248,4.251a4.675,4.675,0,0,0,6.609,6.615l3.506-3.506a.334.334,0,0,0-.237-.571h-.134a5.621,5.621,0,0,1-2.137-.414.334.334,0,0,0-.364.073l-2.521,2.525a2,2,0,1,1-2.835-2.835l4.264-4.261a2,2,0,0,1,2.832,0,1.369,1.369,0,0,0,1.877,0,1.323,1.323,0,0,0,0-1.877Z" transform="translate(-0.039 -164.614)" />
                                                    </g>
                                                </g>
                                                <g id="Group_89" data-name="Group 89" transform="translate(7.417 0)">
                                                    <g id="Group_88" data-name="Group 88" transform="translate(0 0)">
                                                        <path id="Path_77" data-name="Path 77" d="M200.755,1.37a4.675,4.675,0,0,0-6.612,0l-3.5,3.5a.335.335,0,0,0,.244.571h.124a5.61,5.61,0,0,1,2.134.417.334.334,0,0,0,.364-.073l2.515-2.511a2,2,0,1,1,2.835,2.835l-3.132,3.129-.027.03-1.1,1.089a2,2,0,0,1-2.832,0,1.369,1.369,0,0,0-1.877,0,1.331,1.331,0,0,0,0,1.883,4.635,4.635,0,0,0,1.336.935c.07.033.14.06.21.09s.144.053.214.08.144.05.214.07l.2.053c.134.033.267.06.4.083a4.647,4.647,0,0,0,.5.047h.254l.2-.023c.073,0,.15-.02.237-.02h.114l.23-.033.107-.02.194-.04h.037a4.675,4.675,0,0,0,2.167-1.229l4.251-4.251A4.675,4.675,0,0,0,200.755,1.37Z" transform="translate(-189.502 0)" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        Links
                                    </a>
                                    <a href="javascript:void(0);" data-child-tab="themes-tab-box" class="tab-btn main-tab">
                                        <svg id="brush" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <path id="Path_78" data-name="Path 78" d="M18.242,2.344h-.586V1.758A1.76,1.76,0,0,0,15.9,0H2.93A1.76,1.76,0,0,0,1.172,1.758v.586H0V3.516H1.172V4.1A1.747,1.747,0,0,0,1.8,5.437,2.344,2.344,0,0,1,4.1,3.516H6.484A2.346,2.346,0,0,1,8.828,5.859H15.9A1.76,1.76,0,0,0,17.656,4.1V3.516h.586a.586.586,0,0,1,.586.586V6.445a.586.586,0,0,1-.586.586h-7.07A1.76,1.76,0,0,0,9.414,8.789v.694a1.755,1.755,0,0,0-1.172,1.65v1.211A5.549,5.549,0,0,1,7.7,14.5a6.4,6.4,0,0,0-.63,2.566,2.93,2.93,0,1,0,5.859,0A6.405,6.405,0,0,0,12.3,14.5a5.572,5.572,0,0,1-.542-2.16V11.133a1.755,1.755,0,0,0-1.172-1.65V8.789a.586.586,0,0,1,.586-.586h7.07A1.76,1.76,0,0,0,20,6.445V4.1A1.76,1.76,0,0,0,18.242,2.344Z" transform="translate(0 0)" />
                                            <path id="Path_79" data-name="Path 79" d="M79.648,121.152A1.154,1.154,0,0,0,78.5,120H76.152A1.154,1.154,0,0,0,75,121.152v2.3a1.152,1.152,0,0,0,2.3,0V122.3H78.5A1.154,1.154,0,0,0,79.648,121.152Z" transform="translate(-72.119 -115.289)" />
                                        </svg>
                                        Themes
                                    </a>
                                </div>

                                <div class="tab-box links-tab-box">
                                    <div class="link-header-wp">
                                        <ul>
                                            <li class="link-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20">
                                                        <path id="scroll" d="M7.01,16.8,3.225,13.1,4.45,12.022l2.557,2.5,2.542-2.5,1.228,1.071ZM14,15.313V4.688A4.89,4.89,0,0,0,8.94,0H5.06A4.89,4.89,0,0,0,0,4.688V15.313A4.89,4.89,0,0,0,5.06,20H8.94A4.89,4.89,0,0,0,14,15.313ZM8.94,1.563a3.26,3.26,0,0,1,3.373,3.125V15.313A3.26,3.26,0,0,1,8.94,18.438H5.06a3.26,3.26,0,0,1-3.373-3.125V4.688A3.26,3.26,0,0,1,5.06,1.563ZM7,3.165a.814.814,0,0,0-.843.781.846.846,0,0,0,1.687,0A.814.814,0,0,0,7,3.165ZM7,6.29a.784.784,0,1,0,.843.781A.814.814,0,0,0,7,6.29ZM7,9.415a.784.784,0,1,0,.843.781A.814.814,0,0,0,7,9.415Zm0,0" transform="translate(0 0)" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="link-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
                                                        <path id="check" d="M7.658,16.1a1,1,0,0,1-1.444,0L.449,10.157a1.611,1.611,0,0,1,0-2.231l.722-.744a1.5,1.5,0,0,1,2.166,0l3.6,3.709L16.663.868a1.5,1.5,0,0,1,2.166,0l.722.744a1.611,1.611,0,0,1,0,2.231Zm0,0" transform="translate(0 -0.406)" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="form-item">
                                                <div class="form-input-wp">
                                                    <input type="text" placeholder="Search" class="form-input search-input">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </li>
                                            <li class="link-item add-module-item">
                                                <div class="add-module-plus-btn">
                                                    <i class="fas fa-plus"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="add-new-modules-box">
                                        <div class="add-new-modules-row">
                                            <div class="add-new-modules-col">
                                                <div class="add-new-module add-new-module-link">
                                                    <span class="add-new-module-icon"><i class="fas fa-paperclip"></i></span>
                                                    <span class="add-new-module-text">Add Link</span>
                                                </div>
                                            </div>
                                            <div class="add-new-modules-col">
                                                <div class="add-new-module">
                                                    <span class="add-new-module-icon"><i class="fas fa-font"></i></span>
                                                    <span class="add-new-module-text">Add Heading</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="addlink-boxes-wp">
                                        <div class="addlink-boxes-inner">
                                            @foreach($links as $link)
                                            <div class="addlink-box-wp">
                                                <div class="addlink-box">
                                                    <div class="addlink-drag"></div>
                                                    <div class="addlink-right-content-wp">
                                                        <div class="addlink-right-content">
                                                            <div class="addlink-plus">
                                                                <div class="addlink-plus-img back-img" style="background-image: url({{ asset('assets/images/default-profile-picture.png') }});"></div>
                                                                <!-- <div class="addlink-plus-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.001" height="22" viewBox="0 0 22.001 22">
                                                                <path id="plus-icon" d="M22,9.5v3A1.494,1.494,0,0,1,20.5,14H14v6.5A1.494,1.494,0,0,1,12.5,22h-3A1.494,1.494,0,0,1,8,20.5V14H1.5a1.447,1.447,0,0,1-1.063-.438A1.446,1.446,0,0,1,0,12.5v-3A1.447,1.447,0,0,1,.438,8.437,1.447,1.447,0,0,1,1.5,8H8V1.5A1.447,1.447,0,0,1,8.438.438,1.447,1.447,0,0,1,9.5,0h3a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,14,1.5V8h6.5A1.494,1.494,0,0,1,22,9.5Z" />
                                                            </svg>
                                                        </div> -->
                                                                <span class="add-custom-input">
                                                                    <input type="file">
                                                                </span>

                                                            </div>
                                                            <div class="addlink-con-inr-top">
                                                                <div class="addlink-con-title">
                                                                    <div class="kKLFiX">
                                                                        <div class="hBaLvR link-main-wrapper">
                                                                            <div pointer-events="none" class="fjbvLJ link-val-field">
                                                                                <input form="[object Object]" type="text" class="sc-gkdzZj sc-iuAqxS dQTQyT irUDKg link-input-field" value="">
                                                                            </div>
                                                                            <div class="fSmszX change-link-val">
                                                                                <button type="button" display="inline-flex" class="sc-gyUeRy hLcPlL">
                                                                                    <p class="sc-httYMd dAmNHn link-input-val">{{ ($link->link_title != '') ? $link->link_title : "Link Name" }}</p>
                                                                                </button>
                                                                                <div class="eQIJpy">
                                                                                    <button type="button" class="sc-gyUeRy hmsSkt">
                                                                                        <svg class="sc-gVgnHT eHXlyc" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                                                            <path id="edit-button" d="M19.985,5.464,16.7,2.155a1.157,1.157,0,0,0-1.635,0L3.413,13.81l-1.064,4.6a1.155,1.155,0,0,0,1.12,1.4,1.2,1.2,0,0,0,.241,0l4.641-1.066L19.985,7.1A1.162,1.162,0,0,0,19.985,5.464ZM7.791,17.736l-4.35.914.991-4.274,8.717-8.7,3.359,3.365ZM17.258,8.23,13.9,4.864l1.948-1.941,3.3,3.365Z" transform="translate(-2.322 -1.817)" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="addlink-con-link">
                                                                    <div class="kKLFiX">
                                                                        <div class="hBaLvR link-main-wrapper">
                                                                            <div pointer-events="none" class="fjbvLJ link-val-field">
                                                                                <input form="[object Object]" type="text" class="sc-gkdzZj sc-iuAqxS dFNFWE irUDKg link-input-field" value="">
                                                                            </div>
                                                                            <div class="fSmszX change-link-val">
                                                                                <button type="button" class="sc-gyUeRy hLcPlL">
                                                                                    <p class="sc-httYMd iwtTzU link-input-val">{{ ($link->link_url != '') ? $link->link_url : "https://url.com" }}</p>
                                                                                </button>
                                                                                <div class="eQIJpy">
                                                                                    <button type="button" class="sc-gyUeRy hmsSkt">
                                                                                        <svg class="sc-gVgnHT eHXlyc" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                                                            <path id="edit-button" d="M19.985,5.464,16.7,2.155a1.157,1.157,0,0,0-1.635,0L3.413,13.81l-1.064,4.6a1.155,1.155,0,0,0,1.12,1.4,1.2,1.2,0,0,0,.241,0l4.641-1.066L19.985,7.1A1.162,1.162,0,0,0,19.985,5.464ZM7.791,17.736l-4.35.914.991-4.274,8.717-8.7,3.359,3.365ZM17.258,8.23,13.9,4.864l1.948-1.941,3.3,3.365Z" transform="translate(-2.322 -1.817)" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="addlink-checkbox">
                                                                <label for="addlink-box-checkbox" class="addlink-box-checkbox-label">
                                                                    <input type="checkbox" name="" id="addlink-box-checkbox" class="custom-checkbox-input">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="addlink-more-box-wp">
                                                            <div class="addlink-more-box">
                                                                <button class="addlink-more-box-btn">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="addlink-more-actions">
                                                                    <ul>
                                                                        <li class="addlink-pinlink">
                                                                            <a href="#">
                                                                                <span class="icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.997" viewBox="0 0 16 15.997">
                                                                                        <path id="office-pin" d="M15.864,3.9c.4-.4-.107-1.555-1.132-2.58S12.582-.2,12.169.176L12.161.169l-5.678,5.1a2.664,2.664,0,0,0-3.637.116.9.9,0,0,0,0,1.27L5.421,9.23.128,15.206a.507.507,0,0,0,.717.716l5.968-5.3.256.256L8.4,12.2h0l.992.991a.9.9,0,0,0,1.27,0,2.665,2.665,0,0,0,.116-3.637l5.073-5.649C15.851,3.9,15.859,3.9,15.864,3.9Z" transform="translate(0 -0.053)" />
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="addlink-addschedule">
                                                                            <a href="#">
                                                                                <span class="icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.009" viewBox="0 0 16 16.009">
                                                                                        <g id="calendar" transform="translate(0.002 -0.001)">
                                                                                            <path id="Path_48" data-name="Path 48" d="M76.152,32.448v2.237H62V32.448A.46.46,0,0,1,62.474,32h2.358v1.342a.472.472,0,0,0,.943,0V32h2.83v1.342a.472.472,0,0,0,.943,0V32h2.83v1.342a.472.472,0,0,0,.943,0V32h2.358A.46.46,0,0,1,76.152,32.448Z" transform="translate(-60.154 -31.045)" />
                                                                                            <path id="Path_49" data-name="Path 49" d="M449.644,152.551a39.036,39.036,0,0,1-1.912,10.722h1.47a.448.448,0,0,0,.447-.447Z" transform="translate(-433.651 -147.272)" />
                                                                                            <path id="Path_50" data-name="Path 50" d="M152.9.448V.956H152V.448a.447.447,0,1,1,.895,0Z" transform="translate(-147.24)" />
                                                                                            <path id="Path_51" data-name="Path 51" d="M272.9.448V.956H272V.448a.447.447,0,1,1,.895,0Z" transform="translate(-263.48)" />
                                                                                            <path id="Path_52" data-name="Path 52" d="M392.9.448V.956H392V.448a.447.447,0,0,1,.895,0Z" transform="translate(-379.719)" />
                                                                                            <path id="Path_53" data-name="Path 53" d="M8.992,154.517a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241,2.283,2.283,0,0,0-2.365-3.024Zm.94,3.58H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Zm-8-5.817A36.614,36.614,0,0,1,.024,162.425a.452.452,0,0,0,.444.593H13.041A36.765,36.765,0,0,0,15.1,152.28Zm10.332,5.478a5.558,5.558,0,0,1-5.157,3.918,3.183,3.183,0,0,1-3.276-4.136,5.558,5.558,0,0,1,5.157-3.918,3.183,3.183,0,0,1,3.276,4.136Zm-3.276-3.241a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241A2.283,2.283,0,0,0,8.992,154.517Zm.94,3.58H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Zm-.94-3.58a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241m-1.424.556H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Z" transform="translate(0 -147.009)" />
                                                                                        </g>
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="addlink-delete">
                                                                            <a href="#">
                                                                                <span class="icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.613" height="16" viewBox="0 0 11.613 16">
                                                                                        <g id="delete" transform="translate(-40.72 0)">
                                                                                            <g id="Group_116" data-name="Group 116" transform="translate(40.72 0)">
                                                                                                <g id="Group_115" data-name="Group 115" transform="translate(0 0)">
                                                                                                    <path id="Path_129" data-name="Path 129" d="M95.862,19.93l-7.359-3.5a.74.74,0,0,0-.985.351l-.251.528,8.695,4.13.251-.527A.74.74,0,0,0,95.862,19.93Z" transform="translate(-84.671 -15.491)" />
                                                                                                    <path id="Path_130" data-name="Path 130" d="M41.092,88.7a.372.372,0,0,0-.371.4l.752,9.021a1.853,1.853,0,0,0,1.836,1.689h4.206a1.853,1.853,0,0,0,1.836-1.689l.689-8.263L47.6,88.7Z" transform="translate(-40.72 -83.81)" />
                                                                                                    <path id="Path_131" data-name="Path 131" d="M150.661,1.083A.593.593,0,0,1,151.45.8l1.38.655a.593.593,0,0,1,.281.79l-.169.356.672.319.169-.356a1.338,1.338,0,0,0-.634-1.78L151.769.13a1.336,1.336,0,0,0-1.78.634l-.169.356.672.319Z" transform="translate(-143.887 0)" />
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="addlink-box-wp addlink-box-header-wp">
                                                <div class="addlink-box">
                                                    <div class="addlink-drag"></div>
                                                    <div class="addlink-right-content-wp">
                                                        <div class="addlink-right-content">
                                                            <div class="addlink-con-inr-top">
                                                                <div class="addlink-con-title">
                                                                    <div class="kKLFiX">
                                                                        <div class="hBaLvR link-main-wrapper">
                                                                            <div pointer-events="none" class="fjbvLJ link-val-field">
                                                                                <input form="[object Object]" type="text" class="sc-gkdzZj sc-iuAqxS dQTQyT irUDKg link-input-field" value="">
                                                                            </div>
                                                                            <div class="fSmszX change-link-val">
                                                                                <button type="button" display="inline-flex" class="sc-gyUeRy hLcPlL">
                                                                                    <p class="sc-httYMd dAmNHn link-input-val">{{ ($link->link_title != '') ? $link->link_title : "Link Name" }}</p>
                                                                                </button>
                                                                                <div class="eQIJpy">
                                                                                    <button type="button" class="sc-gyUeRy hmsSkt">
                                                                                        <svg class="sc-gVgnHT eHXlyc" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                                                            <path id="edit-button" d="M19.985,5.464,16.7,2.155a1.157,1.157,0,0,0-1.635,0L3.413,13.81l-1.064,4.6a1.155,1.155,0,0,0,1.12,1.4,1.2,1.2,0,0,0,.241,0l4.641-1.066L19.985,7.1A1.162,1.162,0,0,0,19.985,5.464ZM7.791,17.736l-4.35.914.991-4.274,8.717-8.7,3.359,3.365ZM17.258,8.23,13.9,4.864l1.948-1.941,3.3,3.365Z" transform="translate(-2.322 -1.817)" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="addlink-checkbox">
                                                                <label for="addlink-box-checkbox" class="addlink-box-checkbox-label">
                                                                    <input type="checkbox" name="" id="addlink-box-checkbox" class="custom-checkbox-input">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="addlink-more-box-wp">
                                                            <div class="addlink-more-box">
                                                                <button class="addlink-more-box-btn">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="addlink-more-actions">
                                                                    <ul>
                                                                        <li class="addlink-pinlink">
                                                                            <a href="#">
                                                                                <span class="icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.997" viewBox="0 0 16 15.997">
                                                                                        <path id="office-pin" d="M15.864,3.9c.4-.4-.107-1.555-1.132-2.58S12.582-.2,12.169.176L12.161.169l-5.678,5.1a2.664,2.664,0,0,0-3.637.116.9.9,0,0,0,0,1.27L5.421,9.23.128,15.206a.507.507,0,0,0,.717.716l5.968-5.3.256.256L8.4,12.2h0l.992.991a.9.9,0,0,0,1.27,0,2.665,2.665,0,0,0,.116-3.637l5.073-5.649C15.851,3.9,15.859,3.9,15.864,3.9Z" transform="translate(0 -0.053)" />
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="addlink-addschedule">
                                                                            <a href="#">
                                                                                <span class="icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.009" viewBox="0 0 16 16.009">
                                                                                        <g id="calendar" transform="translate(0.002 -0.001)">
                                                                                            <path id="Path_48" data-name="Path 48" d="M76.152,32.448v2.237H62V32.448A.46.46,0,0,1,62.474,32h2.358v1.342a.472.472,0,0,0,.943,0V32h2.83v1.342a.472.472,0,0,0,.943,0V32h2.83v1.342a.472.472,0,0,0,.943,0V32h2.358A.46.46,0,0,1,76.152,32.448Z" transform="translate(-60.154 -31.045)" />
                                                                                            <path id="Path_49" data-name="Path 49" d="M449.644,152.551a39.036,39.036,0,0,1-1.912,10.722h1.47a.448.448,0,0,0,.447-.447Z" transform="translate(-433.651 -147.272)" />
                                                                                            <path id="Path_50" data-name="Path 50" d="M152.9.448V.956H152V.448a.447.447,0,1,1,.895,0Z" transform="translate(-147.24)" />
                                                                                            <path id="Path_51" data-name="Path 51" d="M272.9.448V.956H272V.448a.447.447,0,1,1,.895,0Z" transform="translate(-263.48)" />
                                                                                            <path id="Path_52" data-name="Path 52" d="M392.9.448V.956H392V.448a.447.447,0,0,1,.895,0Z" transform="translate(-379.719)" />
                                                                                            <path id="Path_53" data-name="Path 53" d="M8.992,154.517a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241,2.283,2.283,0,0,0-2.365-3.024Zm.94,3.58H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Zm-8-5.817A36.614,36.614,0,0,1,.024,162.425a.452.452,0,0,0,.444.593H13.041A36.765,36.765,0,0,0,15.1,152.28Zm10.332,5.478a5.558,5.558,0,0,1-5.157,3.918,3.183,3.183,0,0,1-3.276-4.136,5.558,5.558,0,0,1,5.157-3.918,3.183,3.183,0,0,1,3.276,4.136Zm-3.276-3.241a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241A2.283,2.283,0,0,0,8.992,154.517Zm.94,3.58H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Zm-.94-3.58a4.612,4.612,0,0,0-4.245,3.241,2.283,2.283,0,0,0,2.364,3.024,4.612,4.612,0,0,0,4.245-3.241m-1.424.556H8.052a.453.453,0,0,1-.456-.556l.47-1.79a.472.472,0,0,1,.57-.325.446.446,0,0,1,.342.543L8.654,157.2H9.932a.448.448,0,1,1,0,.895Z" transform="translate(0 -147.009)" />
                                                                                        </g>
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="addlink-delete">
                                                                            <a href="#">
                                                                                <span class="icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.613" height="16" viewBox="0 0 11.613 16">
                                                                                        <g id="delete" transform="translate(-40.72 0)">
                                                                                            <g id="Group_116" data-name="Group 116" transform="translate(40.72 0)">
                                                                                                <g id="Group_115" data-name="Group 115" transform="translate(0 0)">
                                                                                                    <path id="Path_129" data-name="Path 129" d="M95.862,19.93l-7.359-3.5a.74.74,0,0,0-.985.351l-.251.528,8.695,4.13.251-.527A.74.74,0,0,0,95.862,19.93Z" transform="translate(-84.671 -15.491)" />
                                                                                                    <path id="Path_130" data-name="Path 130" d="M41.092,88.7a.372.372,0,0,0-.371.4l.752,9.021a1.853,1.853,0,0,0,1.836,1.689h4.206a1.853,1.853,0,0,0,1.836-1.689l.689-8.263L47.6,88.7Z" transform="translate(-40.72 -83.81)" />
                                                                                                    <path id="Path_131" data-name="Path 131" d="M150.661,1.083A.593.593,0,0,1,151.45.8l1.38.655a.593.593,0,0,1,.281.79l-.169.356.672.319.169-.356a1.338,1.338,0,0,0-.634-1.78L151.769.13a1.336,1.336,0,0,0-1.78.634l-.169.356.672.319Z" transform="translate(-143.887 0)" />
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-box themes-tab-box">
                                    <div class="link-header-wp">
                                        <ul>
                                            <li class="link-item active" data-child-tab="themes-inner-box">
                                                <a href="javascript:void(0);">
                                                    <svg id="brush" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                        <path id="Path_78" data-name="Path 78" d="M18.242,2.344h-.586V1.758A1.76,1.76,0,0,0,15.9,0H2.93A1.76,1.76,0,0,0,1.172,1.758v.586H0V3.516H1.172V4.1A1.747,1.747,0,0,0,1.8,5.437,2.344,2.344,0,0,1,4.1,3.516H6.484A2.346,2.346,0,0,1,8.828,5.859H15.9A1.76,1.76,0,0,0,17.656,4.1V3.516h.586a.586.586,0,0,1,.586.586V6.445a.586.586,0,0,1-.586.586h-7.07A1.76,1.76,0,0,0,9.414,8.789v.694a1.755,1.755,0,0,0-1.172,1.65v1.211A5.549,5.549,0,0,1,7.7,14.5a6.4,6.4,0,0,0-.63,2.566,2.93,2.93,0,1,0,5.859,0A6.405,6.405,0,0,0,12.3,14.5a5.572,5.572,0,0,1-.542-2.16V11.133a1.755,1.755,0,0,0-1.172-1.65V8.789a.586.586,0,0,1,.586-.586h7.07A1.76,1.76,0,0,0,20,6.445V4.1A1.76,1.76,0,0,0,18.242,2.344Z" />
                                                        <path id="Path_79" data-name="Path 79" d="M79.648,121.152A1.154,1.154,0,0,0,78.5,120H76.152A1.154,1.154,0,0,0,75,121.152v2.3a1.152,1.152,0,0,0,2.3,0V122.3H78.5A1.154,1.154,0,0,0,79.648,121.152Z" transform="translate(-72.119 -115.289)" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="link-item" data-child-tab="background-inner-box">
                                                <a href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                        <g id="Layer_2" data-name="Layer 2" transform="translate(0.006 0.01)">
                                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-0.006 -0.01)">
                                                                <path id="Path_162" data-name="Path 162" d="M12.556,18.326c.109-.033.219-.063.326-.1a8.637,8.637,0,0,0,2.964-1.764c.1-.092.2-.189.3-.281a.64.64,0,1,1,.885.924,9.925,9.925,0,0,1-1.839,1.442,9.552,9.552,0,0,1-3.642,1.324A9.768,9.768,0,0,1,3.631,17.7,9.75,9.75,0,0,1,.068,11.146,9.973,9.973,0,0,1,7.19.408a9.736,9.736,0,0,1,9.479,2.161,9.6,9.6,0,0,1,3.129,5.5,9.836,9.836,0,0,1-.546,5.705,9.986,9.986,0,0,1-1.023,1.9.641.641,0,0,1-.9.214.63.63,0,0,1-.171-.908,9.241,9.241,0,0,0,1.14-2.321c.009-.03.017-.06.01-.038L12.584,18.34ZM14.89,2.778,2.774,14.9l.589.766,12.292-12.3ZM5.108,17.229,17.221,5.11l-.6-.781-12.3,12.3ZM13.647,2.071c-.271-.1-.558-.2-.834-.324a.28.28,0,0,0-.365.081Q7.138,7.151,1.819,12.465a.7.7,0,0,0-.094.1.139.139,0,0,0-.029.1c.123.336.251.671.373.993ZM6.331,17.923c.288.11.574.208.854.33a.28.28,0,0,0,.365-.087q5.3-5.311,10.6-10.611a.725.725,0,0,0,.107-.112.156.156,0,0,0,.028-.118c-.12-.333-.247-.663-.371-.993Zm-5-6.861L11.06,1.333c-.382-.016-.771-.027-1.159-.052a.451.451,0,0,0-.373.156Q5.51,5.468,1.482,9.487a.585.585,0,0,0-.2.492C1.305,10.345,1.316,10.713,1.331,11.062Zm7.592,7.589c.261.019.526.024.786.062a1.107,1.107,0,0,0,1.014-.406q3.806-3.846,7.648-7.656a.921.921,0,0,0,.339-.827c-.039-.3-.04-.605-.058-.909ZM1.66,7.45,7.44,1.669A8.458,8.458,0,0,0,4.15,3.535,8.62,8.62,0,0,0,1.66,7.45Z" transform="translate(0.006 0.01)" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="link-item" data-child-tab="buttons-inner-box">
                                                <a href="javascript:void(0);">
                                                    <svg id="button" xmlns="http://www.w3.org/2000/svg" width="19.999" height="20" viewBox="0 0 19.999 20">
                                                        <path id="Path_163" data-name="Path 163" d="M13.707,8.074l2.824,2.117a3.077,3.077,0,0,0,1.586-2.7V3.1A3.1,3.1,0,0,0,15.02,0H3.1A3.1,3.1,0,0,0,0,3.1V7.492a3.1,3.1,0,0,0,3.1,3.094h7.656V9.371A1.747,1.747,0,0,1,11.727,7.8a1.748,1.748,0,0,1,1.535-.02h0" />
                                                        <path id="Path_164" data-name="Path 164" d="M313.14,230.185l-6.9-5.18a.587.587,0,0,0-.938.469V234.1a.587.587,0,0,0,.848.527l1.777-.891,1.02,2.039a.585.585,0,0,0,.785.262l2.3-1.152a.585.585,0,0,0,.262-.785l-1.02-2.039,1.777-.891a.582.582,0,0,0,.32-.473.57.57,0,0,0-.23-.516Z" transform="translate(-293.374 -216.103)" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="link-item" data-child-tab="font-inner-box">
                                                <a href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.047" viewBox="0 0 20 18.047">
                                                        <g id="font" transform="translate(0 -25)">
                                                            <g id="Group_119" data-name="Group 119" transform="translate(0 25)">
                                                                <path id="Path_165" data-name="Path 165" d="M18.153,41.875,10.574,25H9.419L2.153,41.875H0v1.172H6.25V41.875H3.429L5.3,37.539h6.89l1.947,4.336H12.188v1.172H20V41.875ZM5.8,36.367l2.868-6.661,2.991,6.661Z" transform="translate(0 -25)" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="link-item">
                                                <a href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="20" viewBox="0 0 20.001 20">
                                                        <g id="profile-user" transform="translate(0 -0.001)">
                                                            <path id="Path_166" data-name="Path 166" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,2.99A3.308,3.308,0,1,1,6.693,6.3,3.308,3.308,0,0,1,10,2.991Zm0,14.4a7.339,7.339,0,0,1-4.779-1.762,1.41,1.41,0,0,1-.495-1.071,3.336,3.336,0,0,1,3.352-3.335h3.849a3.331,3.331,0,0,1,3.347,3.335,1.406,1.406,0,0,1-.494,1.071A7.337,7.337,0,0,1,10,17.386Z" />
                                                        </g>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-inner-box themes-inner-box">
                                        <div class="tab-title">
                                            <h4 class="h4-title">Themes</h4>
                                        </div>
                                        <div class="theme-boxes">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="theme-box active"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="theme-box"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="theme-box"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="theme-box"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="theme-box"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="theme-box"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="theme-box"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-inner-box background-inner-box">
                                        <div class="tab-title">
                                            <h4 class="h4-title">Background</h4>
                                        </div>
                                        <div class="tab-sub-title">
                                            <h5 class="h5-title">Color</h5>
                                        </div>
                                        <div class="color-boxes">
                                            <ul>
                                                <li><span style="background-color: #ffffff;"></span></li>
                                                <li><span style="background-color: #C0C0C0;"></span></li>
                                                <li><span style="background-color: #808080;"></span></li>
                                                <li><span style="background-color: #000000;"></span></li>
                                                <li><span style="background-color: #FF0000;"></span></li>
                                                <li><span style="background-color: #800000;"></span></li>
                                                <li><span style="background-color: #FFFF00;"></span></li>
                                                <li><span style="background-color: #808000;"></span></li>
                                                <li><span style="background-color: #00FF00;"></span></li>
                                                <li><span style="background-color: #008000;"></span></li>
                                                <li><span style="background-color: #00FFFF;"></span></li>
                                                <li><span style="background-color: #008080;"></span></li>
                                                <li><span style="background-color: #0000FF;"></span></li>
                                                <li><span style="background-color: #000080;"></span></li>
                                                <li><span style="background-color: #FF00FF;"></span></li>
                                                <li><span style="background-color: #800080;"></span></li>
                                                <li><span style="background-color: #9C27B0;"></span></li>
                                                <li><span style="background-color: #EC7063;"></span></li>
                                                <li><span style="background-color: #F1C40F;"></span></li>
                                                <li><span style="background-color: #E67E22;"></span></li>
                                                <li><span style="background-color: #6D4C41;"></span></li>
                                                <li><span style="background-color: #1ABC9C;"></span></li>
                                                <li><span style="background-color: #2196F3;"></span></li>
                                                <li><span style="background-color: #546E7A;"></span></li>
                                                <li><span style="background-color: #ff6d77;"></span></li>
                                                <li><span style="background-color: #d2be06;"></span></li>
                                            </ul>
                                        </div>
                                        <div class="color-picker-wrap">
                                            <div class="color-picker-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                    <path id="eyedropper" d="M20,3.9a3.9,3.9,0,0,0-6.66-2.759L10.573,3.911A1.224,1.224,0,0,0,8.91,5.574L2.532,11.951a6.261,6.261,0,0,0-1.59,2.7L.048,17.782A1.249,1.249,0,0,0,.366,19.01l.625.625a1.249,1.249,0,0,0,1.227.318l3.129-.894a6.26,6.26,0,0,0,2.7-1.59l6.377-6.377A1.224,1.224,0,0,0,16.09,9.428l2.767-2.767A3.876,3.876,0,0,0,20,3.9ZM6.282,15.7a3.756,3.756,0,0,1-1.622.954l-1.841.526.526-1.841A3.757,3.757,0,0,1,4.3,13.719l6.325-6.325,1.982,1.982Z" transform="translate(0 -0.001)" />
                                                </svg>
                                                <span class="add-custom-input">
                                                    <input type="color" name="" id="">
                                                </span>
                                            </div>
                                            <div class="color-picker-input">
                                                <input type="text" value="#2196F3">
                                            </div>
                                            <div class="color-picker-preview" style="background-color: #2196F3;"></div>
                                        </div>
                                        <div class="tab-sub-title">
                                            <h5 class="h5-title">Gradient</h5>
                                        </div>
                                        <div class="gradient-boxes">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #83a4d4, #86bbe3, #8fd1ee, #9fe6f7, #b6fbff);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Friday</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #0f2027, #162c35, #1d3944, #244654, #2c5364);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Moonlit Asteroid</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #833ab4, #b123a4, #d3008c, #eb0070, #f90051, #fe2941, #ff412f, #fe5618, #fe711b, #fd8825, #fd9d33, #fcb045);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Instagram</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #56ccf2, #25bbf5, #00a9f6, #0096f4, #2f80ed);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Blue Skies</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #bdfff3, #a0f0de, #83e1c8, #67d1b2, #4ac29a);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Cinnamint</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #e9e9e9, #eee5ec, #fadfe5, #ffdbd4, #ffdcbf, #ffdfb4, #ffe2aa, #fde7a0, #fee79e, #fee79c, #ffe79a, #ffe798);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Margo</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #ff416c, #ff405d, #ff424e, #ff453e, #ff4b2b);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Burning Orange</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #4a00e0, #600de0, #7119e1, #8023e1, #8e2de2);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Amin</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="gradient-box">
                                                        <div class="gradient-box-preview" style="background-image: linear-gradient(to bottom, #1d976c, #40af7f, #5cc792, #78e0a5, #93f9b9);">
                                                            <button class="gradient-rotate-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.061" viewBox="0 0 15 14.061">
                                                                    <g id="rotate" transform="translate(0 -16.032)">
                                                                        <g id="Group_133" data-name="Group 133" transform="translate(0 16.032)">
                                                                            <g id="Group_132" data-name="Group 132" transform="translate(0 0)">
                                                                                <path id="Path_170" data-name="Path 170" d="M182.984,164.195a2.758,2.758,0,1,0-2.758,2.759A2.762,2.762,0,0,0,182.984,164.195Zm-4.35,0a1.592,1.592,0,1,1,1.592,1.592A1.593,1.593,0,0,1,178.634,164.194Z" transform="translate(-172.255 -157.164)" />
                                                                                <path id="Path_171" data-name="Path 171" d="M7.97,16.032a7.03,7.03,0,0,0-6.926,5.815H.586a.586.586,0,0,0-.488.911l1.038,1.556a.586.586,0,0,0,.975,0l1.038-1.556a.586.586,0,0,0-.488-.911H2.238A5.859,5.859,0,1,1,7.97,28.921a.586.586,0,0,0,0,1.172,7.03,7.03,0,0,0,0-14.061Z" transform="translate(0 -16.032)" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="gradient-box-content">
                                                            <p>Mojito</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-sub-title">
                                            <h5 class="h5-title">Image</h5>
                                        </div>
                                        <div class="back-image-boxes">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="back-image-box">
                                                        <div class="back-image-box-preview">
                                                            <button class="add-custom-btn">
                                                                <i class="fas fa-plus"></i>
                                                                <span class="add-custom-input">
                                                                    <input type="file">
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="back-image-box">
                                                        <div class="back-image-box-preview back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_1_mob.jpg') }});"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="back-image-box">
                                                        <div class="back-image-box-preview back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_2_mob.jpg') }});"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="back-image-box">
                                                        <div class="back-image-box-preview back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_3_mob.jpg') }});"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="back-image-box">
                                                        <div class="back-image-box-preview back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_4_mob.jpg') }});"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="back-image-box">
                                                        <div class="back-image-box-preview back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_5_mob.jpg') }});"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-inner-box buttons-inner-box">
                                        <div class="tab-title">
                                            <h4 class="h4-title">Buttons</h4>
                                        </div>
                                        <div class="sec-box button-box">
                                            <div class="tab-sub-title">
                                                <h5 class="h5-title">Color</h5>
                                            </div>
                                            <div class="buttons-box-color-wp">
                                                <div class="color-boxes">
                                                    <ul>
                                                        <li><span style="background-color: #ffffff;"></span></li>
                                                        <li><span style="background-color: #000000;"></span></li>
                                                        <li><span style="background-color: #2953E8;"></span></li>
                                                        <li><span style="background-color: #00AFF0;"></span></li>
                                                        <li><span style="background-color: #0FCA93;"></span></li>
                                                        <li><span style="background-color: #ba5bdc;"></span></li>
                                                    </ul>
                                                </div>
                                                <div class="color-picker-wrap">
                                                    <div class="color-picker-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                            <path id="eyedropper" d="M20,3.9a3.9,3.9,0,0,0-6.66-2.759L10.573,3.911A1.224,1.224,0,0,0,8.91,5.574L2.532,11.951a6.261,6.261,0,0,0-1.59,2.7L.048,17.782A1.249,1.249,0,0,0,.366,19.01l.625.625a1.249,1.249,0,0,0,1.227.318l3.129-.894a6.26,6.26,0,0,0,2.7-1.59l6.377-6.377A1.224,1.224,0,0,0,16.09,9.428l2.767-2.767A3.876,3.876,0,0,0,20,3.9ZM6.282,15.7a3.756,3.756,0,0,1-1.622.954l-1.841.526.526-1.841A3.757,3.757,0,0,1,4.3,13.719l6.325-6.325,1.982,1.982Z" transform="translate(0 -0.001)"></path>
                                                        </svg>
                                                        <span class="add-custom-input">
                                                            <input type="color" name="" id="">
                                                        </span>
                                                    </div>
                                                    <div class="color-picker-input">
                                                        <input type="text" value="#282f37">
                                                    </div>
                                                    <div class="color-picker-preview" style="background-color: #282f37;"></div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Fill</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill round">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill circular">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Outline</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnoutline">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnoutline round">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnoutline circular">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Double Outline</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btndoubleoutline">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btndoubleoutline round">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btndoubleoutline circular">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Dashed Outline</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btndashedoutline">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btndashedoutline round">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btndashedoutline circular">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Hard shadow</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnhardshadow">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnhardshadow round">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnhardshadow circular">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Soft shadow</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnsoftshadow">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnsoftshadow rounded">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnsoftshadow circular">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Arrow</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill arrowright overflow-hide">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill arrowright round overflow-hide">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill arrowright circular overflow-hide">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-sub-title mt-4">
                                                <h5 class="h5-title">Special</h5>
                                            </div>
                                            <div class="buttons-preview-row">
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview formal-2-stroke">
                                                        <span class="buttons-preview">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill topbottom-stroke">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill torn-edges">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                                <div class="buttons-preview-col">
                                                    <div class="buttons-preview-col-inner button-preview btnfill box-border">
                                                        <span class="buttons-preview white">Button</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-inner-box font-inner-box">
                                        <div class="tab-title">
                                            <h4 class="h4-title">Fonts</h4>
                                        </div>
                                        <div class="sec-box font-box">
                                            <link rel="preconnect" href="https://fonts.gstatic.com">
                                            <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Allura&family=Amita:wght@400;700&family=Baumans&family=Carter+One&family=Dancing+Script:wght@400;500;600;700&family=Exo+2:wght@100;200;300;400;500;600;700;800;900&family=Finger+Paint&family=Great+Vibes&family=Itim&family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Lexend:wght@100;400;500;600;700;800&family=Lobster+Two:wght@400;700&family=Milonga&family=Nova+Flat&family=Philosopher:wght@400;700&family=Playfair+Display:wght@400;500;600;700;800;900&family=Reggae+One&family=Spirax&family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
                                            <div class="font-preview-row">
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Playfair Display'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Playfair Display</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Josefin Sans'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Josefin Sans</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Lexend'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Lexend</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Dancing Script'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Dancing Script</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Itim'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Itim</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Reggae One'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Reggae One</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Vollkorn'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Vollkorn</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Finger Paint'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Finger Paint</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Amita'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Amita</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Baumans'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Baumans</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Carter One'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Carter One</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Lobster Two'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Lobster Two</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Milonga'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Milonga</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Exo 2'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Exo 2</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Abril Fatface'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Abril Fatface</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Great Vibes'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Great Vibes</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Spirax'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Spirax</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Philosopher'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Philosopher</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Nova Flat'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Nova Flat</div>
                                                </div>
                                                <div class="font-preview-col">
                                                    <div class="font-preview-box">
                                                        <div class="font-preview-box-inr">
                                                            <svg viewBox="0 0 100 100">
                                                                <text x="50%" y="50%" style="font-family: 'Allura'; font-weight: 400;">
                                                                    Aa
                                                                </text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="font-preview-label">Allura</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-inner-box profile-inner-box">
                                        <div class="tab-title">
                                            <h4 class="h4-title">Profile</h4>
                                        </div>
                                        <div class="sec-box">
                                            <div class="profile-header">
                                                <div class="profile-header-image back-img" style="background-image: url(assets/images/default-profile-picture.png);">
                                                    <div class="input-file-wp">
                                                        <input type="file">
                                                    </div>
                                                </div>
                                                <div class="profile-header-content">
                                                    <button class="sec-btn blue">Pick an Image</button>
                                                    <button class="sec-btn light">Remove</button>
                                                </div>
                                            </div>
                                            <div class="profile-form">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-input-span">
                                                            <label for="profile-title" class="form-label">Profile Title</label>
                                                            <input type="text" id="profile-title" placeholder="Enter Your Name" class="form-input">
                                                        </div>
                                                        <div class="form-input-span">
                                                            <label for="profile-bio" class="form-label">Profile Bio</label>
                                                            <textarea name="" id="profile-bio" placeholder="Enter Your Bio Description" cols="30" rows="10" class="form-input"></textarea>
                                                        </div>
                                                        <div class="submit-button">
                                                            <button type="submit" class="sec-btn">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                    <div class="toolbar-mobile-frame back-img" style="background-image: url(assets/images/preview_img_theme_1_mob.jpg);">
                        <div class="toolbar-mf-box">
                            <div class="toolbar-mf-header">
                                <div class="toolbar-mf-prof-image back-img" style="background-image: url(assets/images/default-profile-picture.png);"></div>
                                <div class="toolbar-mf-header-content">
                                    <h4 class="h4-title">{{ $user_data->name }}</h4>
                                    <div class="toolbar-mf-header-text">
                                        <p>{{ $user_data->profile_description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="toolbar-mf-button-group">
                                <ul>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn toolbar-white-btn toolbar-btn-img-wp">
                                            <span>Facebook</span>
                                            <span class="toolbar-btn-img">
                                                <img src="{{ asset('assets/images/default-profile-picture.png') }}" alt="default-profile-picture">
                                            </span>
                                            <!-- <span class="toolbar-btn-img toolbar-btn-icon" style="-webkit-mask-image: url('{{ asset('assets/images/default-profile-picture.png') }}');"></span> -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn btnfill torn-edges"><span>Facebook</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn btnfill arrowright round overflow-hide"><span>Facebook</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="toolbar-def-btn toolbar-oflow-btn toolbar-white-btn"><span>Facebook</span></a>
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
                        <div class="toolbar-mf-logo">
                            <a href="#"><img src="{{ asset('assets/images/linktree-color-logo.svg') }}" alt="linktree-color-logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS Link -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script>
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
    </script>

@endsection