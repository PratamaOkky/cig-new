<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/page.css">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    {{ $styles }}

    <title>{{ $title }}</title>
</head>

<body>

    <style>
        body {
            background-image: url('assets/images/bghome-top.png');
            font-family: Poppins;
        }

        li {
            margin-left: 50px;
        }

    </style>

    @include('layouts.homepage.navbar')

    <div id="auth">
        {{ $slot }}
    </div>

    @include('layouts.auth.footer')

    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
