<style media="screen">
    .wrapper {
        width: 100%;
        display: flex;
        animation: slide 20s infinite;
    }

    .wrapper>img {
        width: 100%;
        display: block;

    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }

        20% {
            transform: translateX(0);
        }

        35% {
            transform: translateX(-100%);
        }

        40% {
            transform: translateX(-100%);
        }

        45% {
            transform: translateX(-200%);
        }

        60% {
            transform: translateX(-200%);
        }

        65% {
            transform: translateX(-300%);
        }

        80% {
            transform: translateX(-300%);
        }

        85% {
            transform: translateX(-400%);
        }

        100% {
            transform: translateX(-400%);
        }
    }

    .img {
        width: 100%;
        display: block;

        margin-left: 100px;
    }

    .galery {
        width: 100%;
        max-width: 500px;
        max-height: 268px;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        overflow: hidden;
        border: none;
        border-radius: 8px;
        box-shadow: 10px 25px 30px rgba(0, 0, 0, 0.3);
    }

    .contain1 {
        width: 365px;
        height: 200px;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        overflow: hidden;
        border: none;
        border-radius: 8px;
        box-shadow: 10px 25px 30px rgba(0, 0, 0, 0.3);
    }

    @media screen and (max-width: 750px) {
        .contain1 {
            width: 100%;
            left: 350px;
            top: -120px;
        }
    }

    @media screen and (min-width: 751px) {
        .contain1 {
            left: 850px;
            top: -150px;
        }
    }

    .responsive {
        width: 100%;
        max-width: 320px;
        max-height: 387px;
        min-width: 120px;
        min-height: 387px;
    }

    .rectangle {
        height: 50px;
        width: 500px;

        border-radius: 0px 75px;
        border-color: #BB1D33;
    }

    .cardla {
        border: 1px solid #BB1D33;
        box-sizing: border-box;
        box-shadow: 0px 0px 4px 1px rgba(187, 29, 51, 0.2);
        border-radius: 0px 25px;
    }

</style>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- slide show -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    {{-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


    <title>@yield('title')</title>
</head>

<body>

    <style>
        body {
            font-family: Poppins;
        }

        li {
            margin-left: 50px;
        }

    </style>

    <div id="app">

        @include('layouts.homepage.navbar')

        <div id="main-content">
            @yield('content')
        </div>

        @include('layouts.homepage.footer')


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
