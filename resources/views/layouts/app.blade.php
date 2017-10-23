<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name= "viewport" content= "width=1170" />
    <link href="{{ url('css/mvp.css') }}" rel="stylesheet">
	<link href="{{ url('css/lightbox.min.css') }}" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <header class="header">
            <div class="inner">
                <a href="/"><img src="{{ url('img/logo.png') }}" class="logo" alt=""></a>
            </div>
        </header>
        <!-- .header-->

        @yield('content')

    </div>
    <!-- .wrapper -->

    <footer class="footer">
        <div class="inner">&copy; 2017 Cryptany
            <a class="center" href="mailto:info@cryptany.io">info@cryptany.io</a>
            <ul class="social">
                <li><a href="https://www.github.com/cryptany/cryptany"><span class="icon icon-gh"></span></a></li>
                <li><a href="https://twitter.com/ProjectCryptany"><span class="icon icon-twit"></span></a></li>
                <li><a href="https://www.facebook.com/cryptany/"><span class="icon icon-fb"></span></a></li>
                <li><a href="https://www.instagram.com/cryptany.io/"><span class="icon icon-ig"></span></a></li>
                <li><a href="https://cryptany.herokuapp.com"><span class="icon icon-slack"></span></a></li>
                <li><a href="https://t.me/cryptany.io"><span class="icon icon-telegram"></span></a></li>
            </ul>
        </div>
    </footer>
    <!-- .footer -->

    @yield('add-js')

    </body>
</html>