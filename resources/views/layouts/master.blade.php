<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title> الفهدة الإنسانية </title>
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{asset('website/img/logo-sm.png')}}">
    <link rel="stylesheet" href="{{asset('website/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('website/css/datedropper.min.css')}}">
    <!---- This for here only ---------->
    <link rel="stylesheet" href="{{asset('website/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('website/css/bee3D.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/demo.css')}}">
    <!----------->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <!------ IE -------->
    <script src="{{asset('website/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('website/js/respond.min.js')}}"></script>
</head>



<body data-spy="scroll" data-target=".nav.cf" data-offset="100">
<div class="body-overlay"></div>
<!-- Start Loading-Page -->
<div class="loader">
    <div class=" wrapper">
        <div class="outer">
            <div class="ellipse">
                <div class="ellipse">
                    <div class="ellipse">
                        <div class="ellipse">
                            <div class="ellipse">
                                <div class="ellipse"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Loading-Page -->


<!--Start Navbar-->
<div class="navbar">
    <div class="">
        <div class="row">

            <div class="col-lg-3 col-sm-2 col-xs-8 no-padding">
                <div class="right-one">
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="nav-right">
                    <a href="#header" class="logo-nav"><img src="{{asset('website/img/logo2.png')}}"></a>
                </div>
            </div>

            <div class="col-lg-6 col-sm-7 col-xs-0 no-padding">
                <div class="navy">
                    <ul class="nav cf" id="ul1">
                        @if (Request::is('/') )

                            <li class="{{(Request::is('/') ? 'active' : '')}}"><a href="#header">الرئيسية</a></li>
                            <li class="{{(Request::is('/about') ? 'active' : '')}}"><a href="{{route('website.about')}}">من نحن</a></li>
                            <li class="{{(Request::is('/') ? 'active' : '')}}"><a href="#participations">مشاركاتنا</a></li>
                            <li class="{{(Request::is('/') ? 'active' : '')}}"><a href="#actions">مبادراتنا</a></li>
                            <li class="{{(Request::is('/gallery') ? 'active' : '')}}"><a href="{{route('website.gallery')}}">الصور والفيديوهات</a></li>
                            <li class="{{(Request::is('/contact') ? 'active' : '')}}"><a href="{{route('website.contact')}}">اتصل بنا</a></li>
@else


                            <li class="{{(Request::is('/') ? 'active' : '')}}><a href="{{route('website.index')}}#header">الرئيسية</a></li>
                            <li class="{{(Request::is('/about') ? 'active' : '')}}"><a href="{{route('website.about')}}">من نحن</a></li>
                            <li class="{{(Request::is('/') ? 'active' : '')}}"><a href="{{route('website.index')}}#participations">مشاركاتنا</a></li>
                            <li class="{{(Request::is('/') ? 'active' : '')}}"><a href="{{route('website.index')}}#actions">مبادراتنا</a></li>
                            <li class="{{(Request::is('/gallery') ? 'active' : '')}}"><a href="{{route('website.gallery')}}">الصور والفيديوهات</a></li>
                            <li class="{{(Request::is('/contact') ? 'active' : '')}}"><a href="{{route('website.contact')}}">اتصل بنا</a></li>

                        @endif
                                  </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-4 no-padding">
                <ul class="nav-left">
                    <li><a href="https://api.whatsapp.com/send?phone={{ getsetting('phone') }}"> <span><i class="fab fa-whatsapp"></i></span> <span class="call-txt">{{ getsetting('phone') }}</span> </a></li>
                    <li><a href="mailto:{{ getsetting('email') }}"> <span><i class="far fa-envelope"></i></span> <span class="call-txt">{{ getsetting('email') }}</span></a></li>
                </ul>
            </div>


        </div>
    </div>
</div>
<!--End Navbar-->




<!-- ********************************************** Content Area **************************************************** -->
@yield('content')
<!-- ********************************************** Content Area **************************************************** -->





<!-- Start Footer -->
<section class="footer">
    <h2 class="title"> اشترك معنا </h2>

    <form action="#" class="subscribe form1">
        <input type="email" class="form-control" placeholder="ضع ايميلك هنا">
        <button type="submit" class="send"> <i class="fas fa-long-arrow-alt-right"></i> </button>
    </form>

    <ul class="social">
        <li><a href="{{ getsetting('facebook') }}"><i class="fab fa-facebook"></i></a></li>
        <li><a href="{{ getsetting('twitter') }}"><i class="fab fa-twitter"></i></a></li>
        <li><a href="{{ getsetting('snapchat') }}"><i class="fab fa-snapchat-ghost"></i></a></li>
        <li><a href="{{ getsetting('instagram') }}"><i class="fab fa-instagram"></i></a></li>
        <li><a href="{{ getsetting('youtube') }}"><i class="fab fa-youtube"></i></a></li>
    </ul>

    <a href="#header" class="logo-nav">
        <img src="{{asset('website/img/logo2.png')}}">
    </a>

    <div class="copyright"> جميع الحقوق محفوظة للفهدة 2019 <span>&copy;</span> </div>

</section>
<!-- End Footer -->



<!--Scroll Button-->
<div id="scroll-top">
    <i class="fas fa-long-arrow-alt-up"></i>
</div>



<!-- Strat End -->
<!--===============================
     SCRIPT
     ===================================-->

<script src="{{asset('website/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/all.min.js')}}"></script>



<!------------------Start partners ----------------------->
<!--
<script>
    $(document).ready(function() {


        $( ".cols" ).each(function() {

            var n = $(".cols").length;
            var remainder = n % 4;

        //check if there are more than 0 elements
        if (remainder > 0) {
            //if so get the last 2 elements and add the class
            $(this).child(".partner1").addClass("no-border");
        }

        });
    });

</script>
-->
<!------------------End partners ----------------------->


@yield('scripts')
<!----------------------------------- END ------------------------------------------>
<script src="{{asset('website/js/classie.js')}}"></script>
<script src="{{asset('website/js/bee3D.min.js')}}"></script>

<script>
    var element = document.querySelector('.cube1');

    var slider = new Bee3D(element, {
        effect: 'coverflow',
        focus: 2,
        listeners: {
            keys: true,
            touches: false
        },
        navigation: {
            enabled: true
        },
        parallax: {
            enabled: true
        },
        shadows: {
            enabled: true
        },
        autoplay: {
            enabled: true,
            speed: 5000
        },
        loop: {
            enabled: true,
            continuous: true
        }
    });

</script>

<script src="{{asset('website/js/script.js')}}"></script>

<script src="{{asset('website/js/wow.min.js')}}"></script>
<script>
    new WOW().init();

</script>


</body>

</html>

