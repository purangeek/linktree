@extends('new.header')
@section('content-new')

<div class="body-wp">

    <section class="page-view-section">
        <div class="toolbar-mf-bg preview_img_theme_11_back back-img" style="background-image: url({{ asset('assets/images/preview_img_theme_11_mob.jpg') }});"></div>
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="page-view-box-wp">
                            {{-- @foreach($links as $link)
                            <div class="link-content">
                                <a href="{{ $link->link_url }}" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-fzozJi sc-pIJJz iCTckV"><p class="sc-AxhCb hFcqms">{{ $link->link_title }}</p></a>
                            </div>
                            @endforeach --}}
                            @include('new.toolbar_content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- <script>
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
</script> -->

@endsection