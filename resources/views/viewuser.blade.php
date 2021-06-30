<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>List of Links</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="links-container">
                    @foreach($links as $link)
                    <div class="link-content">
                    <a href="{{ $link->link_url }}" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-fzozJi sc-pIJJz iCTckV"><p class="sc-AxhCb hFcqms">{{ $link->link_title }}</p></a>
                    </div>
                    @endforeach
                </div>
            </div>    
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#add-link").click(function(){
            $(".links-container").append('<div class="link-content"><div class="link-field"><input type="text" class="link-title" placeholder="Enter title" value=""></div><div class="link-field"><input type="text" class="link-url" placeholder="Enter URL"  value=""></div><div class="button-container"><input type="hidden" class="link-type" val="Add"><input type="hidden" class="link-id" val=""><button type="button" class="save-link">Save</button><button type="button" class="delete-link">Delete</button></div></div>');
        });
        $(document).on("click", ".save-link", function(){
            var link_title = $(this).parents(".link-content").find(".link-title").val();
            console.log(link_title);
            var link_url = $(this).parents(".link-content").find(".link-url").val();
            console.log(link_url);
            $.ajax({
                type: 'POST',
                url: '/home/link-add',
                data:{
                    'link_title' : link_title,
                    'link_url' : link_url,
                    '_token' : $("input[name=_token]").val()
                },
                success: function(data){
                    console.log(data);
                }
            });
        });
        $(document).on("click", ".delete-link", function(){
            $(this).parents(".link-content").remove();
            $.ajax({
                type: 'POST',
                url: '/home/link-add',
                data:{
                    'link_title' : link_title,
                    'link_url' : link_url,
                    '_token' : $("input[name=_token]").val()
                },
                success: function(data){
                    console.log(data);
                }
            });
        });

    });
</script>