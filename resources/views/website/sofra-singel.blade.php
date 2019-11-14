

@extends('layouts.master')
@section('styles')
@stop
@section('content')

    <!-------- Start breadcrumbs ------>
    <section class="breadcrumbs">
        <div class="titles">
            <a href="index.blade.php">الرئيسية</a> /
            <a href="action4.blade.php">مبادراتنا</a> /

            <h3>رسالة الام</h3>
        </div>
    </section>

    <section class="mother-message">
        <div class="container">
            <div class="in-message">
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <h1> {{$ambosdador->name}}</h1>

                </div>

                <div class="col-md-3 col-sm-5 col-xs-12">
                    <a class="partici1 demo-text" data-fancybox="Actions" href="{{getimg($ambosdador->image)}}">
                        <span class="view"><i class="far fa-eye"></i></span>
                        <img src="{{getimg($ambosdador->image)}}">
                    </a>
                </div>
                <div class="col-xs-12">

                    <div class="message">
                        <h2>رسالة من والدتي</h2>

                        {!! $ambosdador->mother_message !!}
                    </div>

                </div>


            </div>
        </div>
    </section>



@stop
@section('scripts')




    <!----------------- These for here Only ----------------->

    <script src="{{asset('website/js/jquery.fancybox.min.js')}}"></script>

@endsection