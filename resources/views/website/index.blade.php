@extends('layouts.master')
@section('styles')
@stop
@section('content')
    <!---------------------- Start Header ---------------------->
    <section class="header" id="header">

        <!-------- Start Shapes ------------>
        <div class="shapes">
            <img src="img/pattern.png" class="arabisk" alt="شكل أرابيسك">
            <div class="owl-carousel owl-theme main-slider" id="owl-main">
                <div class="item">
                    <video poster="img/shape20.jpg" preload="none" class="shape">
                        <source src="img/fahdah-5.mp4" type="video/mp4">
                        للأسف متصفحك لايدعم تشغيل الفيديوهات
                    </video>
                    <span class="play-video">
                        <i class="far fa-play-circle"></i>
                    </span>
                    <span class="pause-video hidden-control">
                        <i class="far fa-pause-circle"></i>
                    </span>
                    <div class="slider-caption">
                        <span class="big-font animated wow">لكل بطل حكاية </span>
                        <span class="small-font animated wow">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="all-actions.blade.php"> كل المبادرات</a>
                                        <span></span><span></span><span></span><span></span>
                                    </li>
                                </ul>
                            </nav>
                        </span>
                    </div>

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
                <div class="item">
                    <img src="img/shape21.jpg" class="shape">
                    <div class="slider-caption right">
                        <span class="big-font animated wow">التعليم هو الطريق لتغيير العالم</span>
                        <span class="small-font animated wow">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="all-actions.blade.php"> كل المبادرات</a>
                                        <span></span><span></span><span></span><span></span>
                                    </li>
                                </ul>
                            </nav>
                        </span>
                    </div>
                </div>
                <div class="item">
                    <img src="img/shape24.jpg" class="shape">
                    <div class="slider-caption left">
                        <span class="big-font animated wow"> الإصرار هو الفارق بين ماهو مستحيل وماهو ممكن </span>
                        <span class="small-font animated wow">

                            <nav>
                                <ul>
                                    <li>
                                        <a href="all-actions.blade.php"> كل المبادرات</a>
                                        <span></span><span></span><span></span><span></span>
                                    </li>
                                </ul>
                            </nav>


                        </span>
                    </div>
                </div>

                <div class="item">
                    <img src="img/shape23.jpg" class="shape">
                    <div class="slider-caption center">
                        <span class="big-font animated wow"> النِضال من أجل التميز هو ما يحفزك </span>
                        <span class="small-font animated wow">
                        <nav>
                                <ul>
                                    <li>
                                        <a href="all-actions.blade.php"> كل المبادرات</a>
                                        <span></span><span></span><span></span><span></span>
                                    </li>
                                </ul>
                            </nav>
                        </span>
                    </div>
                </div>
                <div class="item">
                    <img src="img/shape22.jpg" class="shape">
                    <div class="slider-caption right">
                        <span class="big-font">المنطق يأخذك من ألف إلى باء، وأما الخيال فيأخذك إلى أي مكان </span>
                        <span class="small-font"><nav>
                                <ul>
                                    <li>
                                        <a href="all-actions.blade.php"> كل المبادرات</a>
                                        <span></span><span></span><span></span><span></span>
                                    </li>
                                </ul>
                            </nav></span>
                    </div>
                </div>

            </div>
            <img src="img/pattern.png" class="arabisk" alt="شكل أرابيسك">
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
                <img src="img/signature.svg">
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
                    <div class="item">
                        <a href="action1.blade.php">
                            <div class="act-img">
                                <img src="img/mb/mb1.png">
                            </div>
                            <h4> مبادرة نابض الرياضية </h4>
                        </a>
                    </div>

                    <div class="item">
                        <a href="action2.blade.php">
                            <div class="act-img">
                                <img src="img/mb/mb4.png">
                            </div>
                            <h4> مبادرة دريمز </h4>
                        </a>
                    </div>

                    <div class="item">
                        <a href="action3.blade.php">
                            <div class="act-img">
                                <img src="img/mb/mb3.png">
                            </div>
                            <h4> مبادرة اقتفي </h4>
                        </a>
                    </div>

                    <div class="item">
                        <a href="action4.blade.php">
                            <div class="act-img">
                                <img src="img/mb/mb2.png">
                            </div>
                            <h4> مبادرة سفراء الفهدة </h4>
                        </a>
                    </div>

                    <div class="item">
                        <a href="action5.blade.php">
                            <div class="act-img">
                                <img src="img/mb/mb5.png">
                            </div>
                            <h4> مبادرة زيارة الفهدة </h4>
                        </a>
                    </div>

                    <div class="item">
                        <a href="action6.blade.php">
                            <div class="act-img">
                                <img src="img/mb/mb6.png">
                            </div>
                            <h4>مبادرة تيك كيدز </h4>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-------- End actions ------>




    <!-------- Start action-imgs ------>
    <section class="action-imgs all-sections mazidan">
        <div class="container">
            <h3 class="title brown">مزيدا من العطاء</h3>
            <h2 class="title green">مشاركات الفهدة</h2>
            <section class="action-in">
                <article class="cube1">
                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img1.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img1.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img2.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img2.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img3.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img3.jpg">
                            </a>
                        </div>
                    </section>
                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/mb/mb7.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/mb/mb7.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/mb/mb8.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/mb/mb8.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/mb/mb9.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/mb/mb9.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/mb/mb10.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/mb/mb10.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/mb/mb11.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/mb/mb11.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/mb/mb12.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/mb/mb12.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img4.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img4.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img5.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img5.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img6.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img6.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img7.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img7.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img8.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img8.jpg">
                            </a>
                        </div>
                    </section>

                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="img/images/img9.jpg">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="img/images/img9.jpg">
                            </a>
                        </div>
                    </section>


                    <!-- Navigation Arrows -->
                    <span class="bee3D--nav bee3D--nav__prev"> <i class='fas fa-angle-left'> </i></span>
                    <span class="bee3D--nav bee3D--nav__next"> <i class='fas fa-angle-right'> </i> </span>

                </article>
            </section>

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

                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/member1.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/shape1.png">
                            </a>
                            <h4> صاحبة السمو الملكى الأميرة </h4>
                            <h4> فهدة بنت فهد ال سعود </h4>
                            <h5 class="job green"> الرئيس التنفيذي للفهدة </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/Fahdafahadk"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/member2.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/member2.png">
                            </a>
                            <h4> محمد بن عثمان الدبيخي </h4>
                            <h4> أحول الأفكار والإلهام إلى محتوى ذو قيمة </h4>
                            <h5 class="job green"> المدير الفني و التقنى </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/M_aldubaikhi"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/member3.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/member3.png">
                            </a>
                            <h4> أمل المرشد </h4>
                            <h5 class="job green"> المشرف العام </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/amalalmarshad11"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/member4.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/member4.png">
                            </a>
                            <h4> متعب الشمري </h4>
                            <h5 class="job green"> مصور </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/motaeb1_"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/member5.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/member5.png">
                            </a>
                            <h4>عبدالله الراشد </h4>
                            <h5 class="job green"> مصور </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/ab_rashed"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/gurl.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/gurl.png">
                            </a>
                            <h4>شيخة بنت فهد السبيعي </h4>
                            <h5 class="job green"> مشرفة مبادرة دريمز </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/She5hAlsubaie"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/gurl.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/gurl.png">
                            </a>
                            <h4>حصة بنت فهد القحطاني </h4>
                            <h5 class="job green"> مشرفة مبادرة اقتفي </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/7q330"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/gurl.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/gurl.png">
                            </a>
                            <h4>فتون بنت عبدالعزيز الغملس </h4>
                            <h5 class="job green"> مساعدة مشرفة مبادرة اقتفي </h5>
                            <ul class="social">
                                <li><a href="https://twitter.com/FViolet1"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>


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

                    <div class="col-sm-3 col-xs-6 no-padding col1">

                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner1.png" class="partner1">
                                        <img src="img/partners/partner1.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner9.png" class="partner1">
                                        <img src="img/partners/partner9.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 no-padding col1">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner2.png" class="partner1">
                                        <img src="img/partners/partner2.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner10.png" class="partner1">
                                        <img src="img/partners/partner10.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 no-padding col1">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner3.png" class="partner1">
                                        <img src="img/partners/partner3.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner11.png" class="partner1">
                                        <img src="img/partners/partner11.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 no-padding col1">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner4.png" class="partner1">
                                        <img src="img/partners/partner4.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner12.png" class="partner1">
                                        <img src="img/partners/partner12.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 no-padding col1">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner5.png" class="partner1">
                                        <img src="img/partners/partner5.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner13.png" class="partner1">
                                        <img src="img/partners/partner13.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 no-padding col1">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner6.png" class="partner1">
                                        <img src="img/partners/partner6.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner14.png" class="partner1">
                                        <img src="img/partners/partner14.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 no-padding col1">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner7.png" class="partner1">
                                        <img src="img/partners/partner7.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner15.png" class="partner1">
                                        <img src="img/partners/partner15.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 no-padding col1">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <a data-fancybox="Partners" href="img/partners/partner8.png" class="partner1">
                                        <img src="img/partners/partner8.png">
                                    </a>
                                </div>
                                <div class="back">
                                    <a data-fancybox="Partners" href="img/partners/partner16.png" class="partner1">
                                        <img src="img/partners/partner16.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


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

