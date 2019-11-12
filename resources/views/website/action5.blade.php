
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
    <section class="about all-sections right-text">
        <div class="container">
            <h2 class="title green">مبادرة زيارة الفهدة </h2>

            <p>
                من خلالها نحقق أسمى هدف بزيارة الأطفال المرضى وهو التفاؤل وزرع الأمل بداخلهم، لأنه هو من سيجعلهم يتغلبون بإصرار على حالاتهم فالتأثير النفسي الإيجابي هو العلاج الأول.
                وكما هو معروف أن العلاج الطبي هو جزء فقط من الصورة العلاجية الكاملة للأطفال المصابين بالأمراض المستعصية، في الحين الذي يركزون الأطباء بالعلاج الطبي للمريض، نقوم نحن من خلال زيارتنا بملامسة خيال الطفل ونضع له بيئة مليئة بالشفاء وداعمة معنوية ونفسية لاستكمال رحلة شفاءه عن طريق الترفيه وتقديم الهدايا وقراءة القصص وندخل على قلوبهم الفرح ومحياهم السرور.



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

