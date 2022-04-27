<style>
    @import url(https://fonts.googleapis.com/css?family=Lato);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

    a {
        text-decoration: none;
        color: #fff;

    }

    p>a:hover {
        color: #d9d9d9;
        text-decoration: underline;
    }

    ul {
        padding: 0;
        list-style: none;
    }

    .social-icon {
        color: #fff;

    }

    ul.social-icons {
        margin-top: 1px;
    }

    .social-icons li {
        vertical-align: top;
        display: inline;
        height: 10px;
        padding: 10;
    }

    .social-icons a {
        color: #fff;
        text-decoration: none;

    }

    .fa-facebook {
        padding: 10px 14px;
        border-radius: 10px;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        background-color: #5D4350;
    }

    .fa-facebook:hover {
        background-color: #3d5b99;
    }

    .fa-twitter {
        padding: 10px 12px;
        border-radius: 10px;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        background-color: #5D4350;
    }

    .fa-twitter:hover {
        background-color: #00aced;
    }

    .fa-youtube {
        padding: 10px 14px;
        border-radius: 10px;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        background-color: #5D4350;
    }

    .fa-youtube:hover {
        background-color: #e64a41;
    }

    .fa-facebook-square {
        padding: 10px 14px;
        border-radius: 10px;
        padding: 10px 14px;
        border-radius: 10px;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        color: #5D4350;
    }

    .fa-facebook-square:hover {
        color: #3d5b99;
    }

    .fa-instagram {
        padding: 10px 14px;
        border-radius: 10px;
        padding: 10px 14px;
        border-radius: 10px;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        color: #5D4350;
    }

    .fa-instagram:hover {
        color: #c32aa3;
    }

    .fa-twitter-square {
        padding: 10px 14px;
        border-radius: 10px;
        padding: 10px 14px;
        border-radius: 10px;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        color: #5D4350;
    }

    .fa-twitter-square:hover {
        color: #00aced;
    }

    .fa-youtube-play {
        padding: 10px 14px;
        border-radius: 10px;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        color: #5D4350;
    }

    .fa-youtube-play:hover {
        color: #e64a41;
    }

    hr {
        border: 0;
        /* height: 30px; */
        border-style: solid;
        border-color: rgb(187, 29, 51);
        border-width: 5px 0 0 0;
        border-radius: 20px
    }

    .ftco-navbar-light {
        background: transparent !important;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 3;
        padding-top: 10px;
    }

    @media (max-width: 991.98px) {
        .ftco-navbar-light {
            background: #000000 !important;
            position: relative;
            top: 0;
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    .ftco-navbar-light .container {
        width: 1110px;
        margin: 0 auto;
        padding: 0;
    }

    .ftco-navbar-light .navbar-brand {
        color: #350106;
        padding-top: .7rem;
        padding-bottom: .7rem;
    }

    .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
        font-size: 16px;
        padding-top: .1rem;
        padding-bottom: .7rem;
        padding-left: 10px;
        padding-right: 0px;
        color: #5D4350;
        font-weight: 400;
        opacity: 1 !important;
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 22px;
        text-transform: uppercase;
    }

    .btn-red {
        padding: 5px 30px 5px;
        border-radius: 12px;
        font-size: 16px;
        background: linear-gradient(96.98deg, #87020E 0%, #BB1D33 99.28%);
        border-radius: 5px;
        color: #FFFFFF;
    }

    .btn-red:hover {
        background: #FF6347;
        text-decoration: none;

    }

    /* icon sosmed */

</style>

<nav class="navbar navbar-expand-lg  ftco-navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" alt="G" width="40" height="50">
            Garda Mitra Nasional
        </a>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('tentang') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('career') }}">Karir</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('kontak') }}">Kontak</a></li>
                <li><a href="{{ route('login') }}" class="btn-red btn-danger">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" alt="G" width="35" height="40">
            Garda Mitra Nasional
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('tentang') }}">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('layanan') }}">Layanan</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('career') }}" class="nav-link active">Karir</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kontak') }}" class="nav-link active">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="garis-nav"></div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
