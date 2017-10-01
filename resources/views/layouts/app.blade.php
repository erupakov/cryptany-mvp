<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cryptany MVP</title>

        <!-- Fonts -->
        <link href="/css/font.css" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Styles -->
        <link href="/css/cryptany.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
          <img alt="Cryptany" src="/img/cryptany.png">
      </a>
  </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="nav-li-team"><a href="{{ url('/team') }}">Team</a></li>
        <li id="nav-li-blog"><a href="{{ url('/blog') }}">Blog</a></li>
        <li id="nav-li-faq"><a href="{{ url('/faq') }}">FAQ</a></li>
        <li id="nav-li-bounty"><a href="{{ url('/bounty') }}">Bounty</a></li>
        <li id="nav-li-tokens"><a href="{{ url('/tokens') }}">Tokens</a></li>
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/magento-1') }}">CryptoPayment plugin for Magento 1.x</a></li>
            <li><a href="{{ url('/magento-2') }}">CryptoPayment plugin for Magento 2.x</a></li>
            <li><a href="{{ url('/merchant/unibutton') }}">Universal payment button for any store</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ url('/merchant/register') }}">Register merchant</a></li>
            <li role="separator" class="divider"></li>            
            <li><a href="https://play.google.com/apps/cryptany.io">Mobile application for Android</a></li>
            <li role="separator" class="divider"></li>            
            <li><a href="https://marketplace.cryptany.io">First in class real Cryptomarket</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><button type="button" class="btn btn-default navbar-btn">Try our MVP</button></li>
        <li><a href="#">Whitepaper</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">English</a></li>
            <li><a href="#">Russian</a></li>
            <li><a href="#">Korean</a></li>
            <li><a href="#">Deutsch</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>        
        <div class="container-fluid">
        @yield('content')
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        @yield('add-js')
    </body>
</html>
