<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT. Home Interior Project</title>
    <link rel="icon" href={{asset("images/icon.png")}} type="image/png">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KHGWWBQ8');</script>
    <!-- End Google Tag Manager -->
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href={{asset("css/style-liberty.css")}}>
    <link rel="stylesheet" href={{asset("css/custom.css")}}>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {!! \Firefly\FilamentBlog\Facades\SEOMeta::generate() !!}
    <meta name="facebook-domain-verification" content="e03z09udnjh6mq79evvwam50ewak7j"/>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '886576893413023');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=886576893413023&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHGWWBQ8"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src={{asset("images/logo.png")}} alt="Home Interior Project" title="Home Interior Project" style="height:38px;"/>
                </a>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                            <a class="nav-link" href={{route("home")}}>Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ (request()->is('produk')) ? 'active' : '' }}">
                            <a class="nav-link" href={{route("produk")}}>Produk</a>
                        </li>
                        <li class="nav-item {{ (request()->is('portfolio')) ? 'active' : '' }}">
                            <a class="nav-link" href={{route("portfolio.index")}}>Portfolio</a>
                        </li>
                        <li class="nav-item {{ (request()->is('blogs')) ? 'active' : '' }}">
                            <a class="nav-link" href={{ route('filamentblog.post.index') }}>Arktikel</a>
                        </li>
                        <li class="nav-item {{ (request()->is('kontak')) ? 'active' : '' }}">
                            <a class="nav-link" href={{route("kontak")}}>Hubungi Kami</a>
                        </li>
                        <!-- search button -->
                        <div class="search-right ml-lg-3">
                            <a class="btn btn-secondary" href="https://wa.link/7e6794" target="_blank">Tanya Harga</a>
                        </div>
                        <!-- //search button -->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    @yield('content')

    <!-- form section -->
    <div class="main-w3 px-md-4 py-5" id="newsletter">
        <div class="container py-md-5 py-4">
            <div class="w3l-forms-9 py-4 m-auto px-md-5 px-4" style="max-width:1000px">
                <div class="container-fluid py-lg-3 py-2">
                    <div class="row align-items-center">
                        <div class="main-midd col-xl-9 col-lg-5">
                            <h4 class="title-head mb-lg-2"> 
                                Siap Wujudkan Interior Impianmu?</h4>
                            <p>Wujudkan interior impianmu jadi kenyataan.</p>
                        </div>
                        <div class="main-midd-2 col-xl-3 col-lg-7 mt-lg-0 mt-4">
                            <button class="btn btn-secondary"> <a href="https://wa.link/cnohtr"  target="_blank" class="text-white">Konsultasi Sekarang</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //form section -->

    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2024 PT Home Interior Project. All rights reserved.</p>
                <div class="col-lg-4 text-right">
                    <div class="main-social-footer-29">
                        <a href="https://www.facebook.com/homeinteriorproject" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="https://www.instagram.com/homeinterior.pekanbaru01/" target="_blank" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="https://maps.app.goo.gl/qjStczk7PCUvsQ6q6" target="_blank"><span class="fa fa-map-marker" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //copyright -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- common jquery plugin -->
    <script src={{asset("js/jquery-3.3.1.min.js")}}></script>
    <!-- //common jquery plugin -->

    <!-- gallery popup js -->
    <script src={{asset("js/smartphoto.js")}}></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sm = new SmartPhoto(".js-img-viwer", {
                showAnimation: false
            });
            // sm.destroy();
        });
    </script>
    <!-- //gallery popup js -->

    <!-- testimonials js and script -->
    <script src={{asset("js/owl.carousel.js")}}></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //testimonials js and script -->

    <!-- theme switch js (light and dark)-->
    <script src={{asset("js/theme-change.js")}}></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src={{asset("js/bootstrap.min.js")}}></script>
    <!-- //bootstrap-->
    @stack('js')
</body>

</html>