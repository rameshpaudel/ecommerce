<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    </script>
</head>
<body>
    <div id="app">

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
 

