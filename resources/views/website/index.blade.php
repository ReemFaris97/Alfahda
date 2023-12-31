@extends('layouts.master')
@section('styles')
@stop
@section('content')
<!---------------------- Start Header ---------------------->
<section class="header" id="header">

    <!-------- Start Shapes ------------>
    <div class="shapes">
        <img src="{{asset('website/img/pattern.png')}}" class="arabisk" alt="شكل أرابيسك">
        <div class="owl-carousel owl-theme main-slider" id="owl-main">
            <div class="item">
                <video poster="{{asset('website/img/shape20.jpg')}}" preload="none" class="shape">
                    <source src="{{asset('website/img/fahdah-5.mp4')}}" type="video/mp4">
                    للأسف متصفحك لايدعم تشغيل الفيديوهات
                </video>

                <div class="slider-caption center">
                    <span class="big-font animated wow">لكل بطل حكاية </span>
                    <span class="small-font animated wow">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{route('website.all-actions')}}"> استمع لحكايتهم</a>
                                    <span></span><span></span><span></span><span></span>
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
                <span class="play-video">
                    <i class="far fa-play-circle"></i>
                </span>
                <span class="pause-video hidden-control">
                    <i class="far fa-pause-circle"></i>
                </span>
            </div>
            <!--
            	<div class="item" >
            		<img src="img/shape1.png" class="shape">
                    <div class="slider-caption">
                        <span class="big-font animated wow">لكل بطل حكاية تروى</span>
                        <span class="small-font animated wow">استمع لهم</span>
                    </div>
            	</div>
-->
            @foreach ($sliders as $slider)

            <div class="item">
                <img src="{{getimg($slider->image)}}" class="shape">
                <div class="slider-caption ">
                    <span class="big-font animated wow"></span>
                    <span class="small-font animated wow">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{route('website.all-actions')}}"> كل المبادرات</a>
                                    <span></span><span></span><span></span><span></span>
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>
            @endforeach



        </div>
        <img src="{{asset('website/img/pattern.png')}}" class="arabisk" alt="شكل أرابيسك">
    </div>
    <!-------- End Shapes ------------>
</section>
<!---------------------- End Header ---------------------->
<!-------- Start Qoute ------>
<section class="qoute all-sections">
    <div class="container">
        <div class="content">
            <p class="green">
                .. إسعاد الاخرين
            </p>
            <p class="green">
                .. غرس "تزرعه لغيرك فيثمر فى قلبك"
            </p>
            <img src="{{asset('website/img/signature.svg')}}">
        </div>
    </div>
</section>
<!-------- Start Qoute ------>

<!-------- Start actions ------>
<section class="actions all-sections" id="actions">
    <div class="container">
        <h2 class="title green">مبادراتنا</h2>
        <div class="slide wow slideInUp">
            <div id="owl-actions" class="owl-carousel owl-theme">


                @foreach($actions as $action)
                <div class="item">
                    <a href="{{route('website.action',$action->id)}}">
                        <div class="act-img">
                            <img src="{{getimg($action->image)}}">
                        </div>
                        <h4> {{$action->name}} </h4>
                    </a>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
<!-------- End actions ------>




<!-------- Start action-imgs ------>
<section class="action-imgs all-sections mazidan" id="participations">
    <div class="container">
        <h3 class="title brown">مزيدا من العطاء</h3>
        <h2 class="title green">مشاركات الفهدة</h2>
        <section class="action-in">
            <article class="cube1">

                @foreach($participants as $participant)
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="{{getimg($participant->image)}}">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="{{getimg($participant->image)}}">
                        </a>
                    </div>
                </section>
                @endforeach



                <!-- Navigation Arrows -->
                <span class="bee3D--nav bee3D--nav__prev"> <i class='fas fa-angle-left'> </i></span>
                <span class="bee3D--nav bee3D--nav__next"> <i class='fas fa-angle-right'> </i> </span>

            </article>
        </section>
        <nav class="button-participations">
            <ul>
                <li>
                    <a href="{{route('website.all-actions')}}"> كل المشاركات</a>
                    <span></span><span></span><span></span><span></span>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-------- End action-imgs ------>
<!-------- End participations ------>


<!-------- Start members ------>
<section class="members all-sections">
    <div class="container">
        <h2 class="title green">أعضاء الفهدة</h2>

        <div class="slide wow slideInUp">
            <div id="owl-members" class="owl-carousel owl-theme">

                @foreach ($members as $member)
                <div class="item">
                    <div class="member1">
                        <a class="member-img partici1">

                            <img src="{{getimg($member->image)}}">
                        </a>
                        {{--<h4> صاحبة السمو الملكى الأميرة </h4>--}}
                        <h4> {{$member->name}} </h4>
                        <h5 class="job green"> {{$member->job}} </h5>
                        <ul class="social">
                            <li><a href="https://twitter.com/Fahdafahadk"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                @endforeach





            </div>
        </div>

    </div>
</section>
<!-------- End members ------>


<!-------- Start partners ------>
<section class="partners all-sections">
    <div class="container">
        <h2 class="title green"> شركاء النجاح </h2>

        <div class="all-pertners">
            <div class="row no-margin">
                @foreach($partners as $partner)
                <div class="col-sm-3 col-xs-6 no-padding col1">

                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <a data-fancybox="Partners" href="{{getimg($partner->image)}}" class="partner1">
                                    <img src="{{getimg($partner->image)}}">
                                </a>
                            </div>
                            <div class="back">
                                <a data-fancybox="Partners" href="{{getimg($partner->image)}}" class="partner1">
                                    <img src="{{getimg($partner->image)}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

    </div>
</section>
<!-------- End partners ------>



@stop

@section('scripts')

<!----------------- These for here Only ----------------->

<script>
    $(document).ready(function() {
        $(".play-video").on('click', function() {
            $(this).parents('.item').find('video').get(0).play();
            $(this).addClass('hidden-control');
            $(this).next('.pause-video').removeClass('hidden-control');
        });
        $(".pause-video").on('click', function() {
            $(this).parents('.item').find('video').get(0).pause();
            $(this).addClass('hidden-control');
            $(this).prev('.play-video').removeClass('hidden-control');
        });

        $('[data-spy="scroll"]').each(function() {
            var $spy = $(this).scrollspy('refresh')
        });
    });

</script>
<script src="{{asset('website/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
<script>
    $("#owl-main").owlCarousel({
        rtl: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        margin: 0,
        responsiveClass: true,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        nav: false,
        navText: ["<i class='fas fa-angle-right'>", "<i class='fas fa-angle-left'>"],
        dots: false
    });

</script>
<script>
    $("#owl-actions").owlCarousel({
        rtl: true,
        items: 5,
        autoplay: false,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        loop: true,
        margin: 5,
        responsiveClass: true,
        animateOut: 'flipOutX',
        animateIn: 'flipInX',
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 3],
        nav: true,
        navText: ["<i class='fas fa-angle-right'>", "<i class='fas fa-angle-left'>"],
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    });

</script>
<script>
    $("#owl-members").owlCarousel({
        rtl: true,
        items: 2,
        autoplay: false,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        loop: true,
        margin: 0,
        responsiveClass: true,
        animateOut: 'flipOutX',
        animateIn: 'flipInX',
        nav: true,
        navText: ["<i class='fas fa-angle-right'>", "<i class='fas fa-angle-left'>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            900: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });

</script>
@stop
