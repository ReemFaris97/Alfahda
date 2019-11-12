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
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل افتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
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

                    <div class="item">
                        <div class="member1">
                            <a data-fancybox="Members" href="img/members/member1.png" class="member-img partici1">
                                <span class="view"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                    </svg><!-- <i class="far fa-eye"></i> --></span>
                                <img src="img/members/member1.png">
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
                            <h4>   أحول الأفكار والإلهام إلى محتوى ذو قيمة   </h4>
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