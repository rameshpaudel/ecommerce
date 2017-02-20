<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ config('app.locale') }}">
=======
<html lang="en">
>>>>>>> 3cda8146d47e0fe5a8de15cf8c4b675c5ac54931
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
=======
    <title>{{ config('app.name', 'CMS') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">
    <link rel="stylesheet" href="/stylesheets/font-awesome.css">
    <link rel="stylesheet" href="/stylesheets/themify-icons.css">
    <link rel="stylesheet" href="/stylesheets/animate.css">
    {{-- <link href="/frontend/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" /> --}}

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
>>>>>>> 3cda8146d47e0fe5a8de15cf8c4b675c5ac54931
    </script>
</head>
<body>
    <div id="app">
<<<<<<< HEAD
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
=======

        <header class="page-header">
            <site-menu></site-menu>
        </header>

        @yield('content')

        <footer class="page-footer">
           
        </footer>

        
    </div>

    <!-- Scripts -->
    
 <!--   <script src="/frontend/js/jquery.mixitup.js"></script>
 <script src="/frontend/js/pace.js"></script>
 <script src="/frontend/js/textillate.js"></script>
 <script src="/frontend/js/animateSlider.js"></script>
 <script src="/frontend/js/modernizr.js"></script>  -->
{{--    <script src="/frontend/js/new.js" async defer></script>
   <script src="/frontend/js/custom.js" async defer></script> --> --}}

    <script src="/js/app.js"></script> 
   {{-- <script src="/frontend/js/components.js" async defer></script> --}}
</body>
</html>
 

>>>>>>> 3cda8146d47e0fe5a8de15cf8c4b675c5ac54931
