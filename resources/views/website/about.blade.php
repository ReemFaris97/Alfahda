@extends('layouts.master')
@section('styles')
@stop
@section('content')




    <!-------- Start breadcrumbs ------>
    <section class="breadcrumbs">
        <div class="titles">
            <a href="index.blade.php">الرئيسية</a> /
            <h3>من نحن</h3>
        </div>
    </section>
    <!-------- End breadcrumbs ------>
    
    
    
    <!-------- Start About ------>
    <section class="about all-sections">
        <div class="container">
            <h2 class="title green">من نحن</h2>
            
            <p>
                {!! getsetting('about')  !!}
            </p>
        </div>
    </section>
    <!-------- End About ------>



        <!-------- Start members ------>
    <section class="members all-sections">
        <div class="container">
            <h2 class="title green">أعضاء الفهدة</h2>

            <div class="slide wow slideInUp">
                <div id="owl-members" class="owl-carousel owl-theme">



                    @foreach ($members as $member)
                        <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="{{getimg($member->image)}}" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="{{getimg($member->image)}}">
                            </a>
                            <h4> {{$member->name}} </h4>
                            {{--<h4>   أحول الأفكار والإلهام إلى محتوى ذو قيمة   </h4>--}}
                            <h5 class="job green">{{$member->job}}</h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/M_aldubaikhi"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
    <!-------- End members ------>

@stop

@section('scripts')



    <!----------------- These for here Only ----------------->

    <script src="{{asset('website/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>

    <script>
        $("#owl-members").owlCarousel({
            rtl: true,
            items: 1,
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
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });

    </script>
  
    <!----------------------------------- END ------------------------------------------>

@stop