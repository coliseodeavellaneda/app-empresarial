<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="/css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    {{-- @vite(['resources/sass/app.scss']) --}}
</head>

<body class="bg-gradient-primary" id="page-top">
    <div id="app">
        <main>
            <script src="/js/vendor/jquery.min.js"></script>
            <script src="/js/vendor/jquery.easing.min.js"></script>
            @vite(['resources/js/app.js'])
            <script src="/js/vendor/bootstrap.bundle.min.js"></script>
            <script src="/js/sb-admin-2.min.js"></script>
            @yield('content')
        </main>
    </div>
</body>

</html>