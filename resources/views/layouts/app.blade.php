<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                My Linktree: <a href="{{ URL::to('/') }}/{{Auth::user()->username}}">{{ URL::to('/') }}/{{Auth::user()->username}}</a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#add-link").click(function(){
            $(".links-container").append('<div class="link-content"><div class="link-field"><input type="text" class="link-title" placeholder="Enter title" value=""></div><div class="link-field"><input type="text" class="link-url" placeholder="Enter URL"  value=""></div><div class="button-container"><button type="button" data-id="" data-type="Add" class="save-link">Save</button><button type="button" class="delete-link">Delete</button></div></div>');
        });
        $(document).on("click", ".save-link", function(){
            var link_title = $(this).parents(".link-content").find(".link-title").val();
            console.log(link_title);
            var link_url = $(this).parents(".link-content").find(".link-url").val();
            console.log(link_url);
            var type = $(this).data('type');
            console.log(type);
            var link_id = $(this).data('id');
            if(type == 'Add'){
                $.ajax({
                    type: 'POST',
                    url: '/admin/link-add',
                    data:{
                        'link_title' : link_title,
                        'link_url' : link_url,
                        '_token' : $("input[name=_token]").val()
                    },
                    success: function(data){
                        console.log(data);
                    }
                });
            }
            else if(type == 'Edit'){
                $.ajax({
                    type: 'POST',
                    url: '/admin/link-edit',
                    data:{
                        'link_title' : link_title,
                        'link_url' : link_url,
                        'id'       : link_id,
                        '_token' : $("input[name=_token]").val()
                    },
                    success: function(data){
                        console.log(data);
                    }
                });
            }
            
        });
        $(document).on("click", ".delete-link", function(){
            $(this).parents(".link-content").remove();
            var link_id = $(this).data('id');
            console.log(link_id);
            $.ajax({
                type: 'POST',
                url: '/admin/link-delete',
                data:{
                    'id' : link_id,
                    '_token' : $("input[name=_token]").val()
                },
                success: function(data){
                    console.log(data);
                }
            });
        });

    });
</script>