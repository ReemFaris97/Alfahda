@extends('layouts.master')
@section('styles')
@stop
@section('content')



    <!-------- Start breadcrumbs ------>
    <section class="breadcrumbs">
        <div class="titles">
            <a href="index.blade.php">الرئيسية</a> /
            <h3>مبادراتنا</h3>
        </div>
    </section>
    <!-------- End breadcrumbs ------>



    <!-------- Start About ------>
    <section class="about all-sections">
        <div class="container">
            <h2 class="title green">الرؤية والرسالة</h2>

            <p>
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل افتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
            </p>

        </div>
    </section>
    <!-------- End About ------>


    <!-------- Start action-imgs ------>
    <section class="action-imgs all-sections">
        <div class="container">
            <h2 class="title green">صور المبادرة</h2>

            <section class="action-in">
            <article class="cube1">
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape1.png">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape1.png">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape2.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape2.jpg">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape3.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape3.jpg">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape5.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape5.jpg">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape6.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape6.jpg">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape7.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape7.jpg">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape3.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape3.jpg">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape5.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape5.jpg">
                        </a>
                    </div>
                </section>
                
                <section class="bee3D--slide">
                    <div class="bee3D--inner">
                        <a class="partici1 demo-text" data-fancybox="Actions" href="img/shape2.jpg">
                            <span class="view"><i class="far fa-eye"></i></span>
                            <img src="img/shape2.jpg">
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


@stop
@section('scripts')

    <!----------------- These for here Only ----------------->

    <script src="{{asset('website/js/jquery.fancybox.min.js')}}"></script>

    <script src="{{asset('website/js/classie.js')}}"></script>
    <script src="{{asset('website/js/bee3D.min.js')}}"></script>

    <script>
        var element = document.querySelector('.cube1');

        var slider = new Bee3D(element, {
            effect: 'cube',
            listeners: {
                keys: true
            },
            navigation: {
                enabled: true
            }
        });
    </script>
    <!----------------------------------- END ------------------------------------------>


   @stop