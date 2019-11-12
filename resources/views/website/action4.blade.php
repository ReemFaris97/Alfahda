
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
            <h2 class="title green">مبادرة سفراء الفهدة </h2>

            <p>
                يعتبر برنامج سفراء الفهدة منصة للأطفال المميزين الذين يمثلون فئات المجتمع الغالية على قلوبنا من ذوي الاحتياجات الخاصة، والداون، ومرضى السرطان، وتشمل المبادرة التوعية والتثقيف والدعم النفسي والمعنوي ودمجهم ببيئة صحية صديقة لهم.
                <br />
                وبذلك نعزز فيهم الثقة بالنفس وحب الذات بالإيمان بالقدرات الداخلية لديهم وتقدير أهميتها، وستتلاحم الجهود من خلال الوعي المجتمعي مما يساعد على تبني التنوع الذي يجلبونه هؤلاء الأطفال للعالم وإيجاد الآخرين أمثالهم ونقل تجاربهم للجميع بأصواتهم وأعمالهم المفعمة بالإيجابية. وسنجعل العالم يراهم بعين الأمل ويقتدوا بهم لا بعين الألم ويعطفوا عليهم.


            </p>

        </div>
    </section>
    <!-------- End About ------>




    <!-------- Start action-imgs ------>

    <section class="img-action4">
        <div class="container">

            @foreach ($ambosdadors as $ambosdador)

                <div class="col-xs-12 slide wow slideInUp">
                    <div class="col-sm-6 col-xs-12 no-padding">
                        <a href="{{route('website.sofra-singel',$ambosdador->id)}}">
                            <img src="{{getimg($ambosdador->image)}}">
                        </a>

                    </div>
                    <div class="col-sm-6 col-xs-12 no-padding">
                        <div class="txt-img">
                            <h2>{{$ambosdador->name}}</h2>
                            <span>طموحي</span>
                            <p>{{$ambosdador->goals}}</p>
                            <span>رسالتي</span>
                            <p>{{$ambosdador->message}}</p>
                            <div class="end-txt-img">
                                <span>التشخيص:  {{$ambosdador->diagnosis}}</span>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach


            
             
            
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
