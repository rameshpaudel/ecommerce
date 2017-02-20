@extends('layouts.app')
@section('content')

<<<<<<< HEAD
        <title>Laravel</title>
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/media.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    <div id="app">
        <media-manager></media-manager>
    </div>
    <script src="/js/app.js"></script>
    </body>
</html>
=======
           <router-view></router-view>

@stop
>>>>>>> 3cda8146d47e0fe5a8de15cf8c4b675c5ac54931
