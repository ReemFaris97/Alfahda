

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
            <h2 class="title green">{{$action->name}} </h2>

           {!! $action->description !!}

        </div>
    </section>
    <!-------- End About ------>

@if (isset($action->images))


    <!-------- Start action-imgs ------>
    <section class="action-imgs all-sections">
        <div class="container">
            <h2 class="title green">صور المبادرة</h2>

            <section class="action-in">
                <article class="cube1">

                    @foreach($action->images as $image)
                    <section class="bee3D--slide">
                        <div class="bee3D--inner">
                            <a class="partici1 demo-text" data-fancybox="Actions" href="{{getimg($image->imge)}}">
                                <span class="view"><i class="far fa-eye"></i></span>
                                <img src="{{getimg($image->image)}}">
                            </a>
                        </div>
                    </section>
                 @endforeach


                    <!-- Navigation Arrows -->
                    <span class="bee3D--nav bee3D--nav__prev"> <i class='fas fa-angle-left'> </i></span>
                    <span class="bee3D--nav bee3D--nav__next"> <i class='fas fa-angle-right'> </i> </span>

                </article>
            </section>

        </div>
    </section>
    <!-------- End action-imgs ------>
@endif
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