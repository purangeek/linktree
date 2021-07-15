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
        <!-- <div class="toolbar-mobile-frame back-img" style="background-image: linear-gradient(to bottom, #0f2027, #162c35, #1d3944, #244654, #2c5364);"> -->
            <div class="toolbar-mobile-frame-inr">
                @include('new.toolbar_content')
            </div>
        </div>
    </div>
</div>