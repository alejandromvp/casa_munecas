<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ABI Shop</title>

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sweet_alert.js') }}" defer></script>
    <script src="{{ asset('js/dataTable.min.js') }}" defer></script>
    <script src="{{ asset('js/wow.min.js') }}" defer></script>
   
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" class="css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <style>
        #particles-js{
                height: 100vh;
                width: 100%;
                position: fixed;
                z-index: 98;
            }
            .contenedor{
                width:100%;
                margin-left:auto;
                margin-right:auto;
                position:relative;
                /* margin:0px 20px 0px 20px; */
                opacity:.99;
                z-index:99;
                background-position:center;
            }
    </style>
</head>
<body>
    <div id="app">
        <div id="particles-js"></div>
        <main class="contenedor">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/particles.min.js') }}" defer></script>
    <script src="{{ asset('js/particle.js') }}" defer></script>
</body>
</html>