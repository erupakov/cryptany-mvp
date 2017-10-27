<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <title></title>
    <meta name="keywords" content="Cryptany MVP" />
    <meta name="description" content="Cryptany MVP" />
    <meta name= "viewport" content= "width=1170" />
    <link href="{{ url('css/mvp.css') }}" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <header class="header main">
            <div class="inner">
                <div class="h1">Making<br><span class="hl">cryptocurrencies</span><br>spendable</div>
                <img src="{{ url('img/logo.png') }}" class="logo" alt="">
                <img src="{{ url('img/stars.png') }}" class="stars" alt="">
            </div>
        </header>
        <!-- .header-->

        <main class="content">
            <section class="mb">
                <div class="inner">
                    <h3>The Cryptany payments gateway is integrated<br>with the following e-commerce platforms and extensions</h3>
                    <span class="grayed">Select your platform to view set up procedures.</span>
                    <ul class="shopicons">
                        <li><img src="{{ url('img/magento.png') }}" alt="">
                            <li>
                                <li>
                                    <h4>Magento</h4><a href="{{ url('/magento-1') }}">Learn more</a></li>
                                <li><img src="{{ url('img/woo.png') }}" alt="Magento CE 1.x plugin"></li>
                                <li class="disabled">
                                    <h4>WooCommerce</h4><a href="">Coming soon</a></li>
                                <li><img src="img/shopify.png" alt="WooCommerce Cryptany integration plugin"></li>
                                <li class="disabled">
                                    <h4>Shopify</h4><a href="Shopify plugin">Coming soon</a>
                                    </li>
                    </ul>

                </div>
            </section>
            <section class="wallet">
                <div class="inner">
                    <img src="img/phone.png" class="wphone" alt="">
                    <div class="h1">Cryptany mobile<br>wallet</div>
                    <p>A secure mobile wallet to safely accept, store and spend cryptocurrencies.<br> Download the beta-version now.</p>
                    <a class="gplay" href="#"><img src="{{ url('img/gp.png') }}" alt=""></a>
                    <div class="yt"><a href="https://www.youtube.com/c/Cryptany" target="_blank"><img src="{{ url('img/yt.png') }}" alt="">Watch demo on YouTube</a></div>
                </div>
            </section>
            <section class="bricks clearfix">
                <div class="row50 ghbg">
                    <div class="inner">
                        <h3>Cryptany uses decentralized<br>trust management technology<br>to secure your transactions</h3>
                        <a href="https://www.github.com/cryptany/cryptany" class="lgithub"><span class="icon icon-gh"></span>View on Github</a>
                    </div>
                </div>
                <div class="row50">
                    <div class="inner">
                        <h3>Create a Cryptopayment<br>button for your web site</h3>
                        <p class="grayed">A quick and easy gateway solution for receiving<br>cryptocurrency payments directly on your website.</p>
                        <button class="cc cryptbutton" style="cursor: default;">Cryptopayment</button>
                        <a class="small" href="{{ url('/button') }}">Create your button now</a>
                    </div>
                </div>
            </section>

        </main>
        <!-- .content -->

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
                <li><a href="https://t.me/joinchat/DK-4-0MzkB_Qk2uDHzO94Q"><span class="icon icon-telegram"></span></a></li>
            </ul>
        </div>
    </footer>
    <!-- .footer -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108547971-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108547971-1');
</script>

</body>

</html>
