

@extends('layouts.master')
@section('styles')
@stop
@section('content')


    <!-------- Start breadcrumbs ------>
    <section class="breadcrumbs">
        <div class="titles">
            <a href="index.blade.php">الرئيسية</a> /
            <h3>الصور والفيديوهات</h3>
        </div>
    </section>
    <!-------- End breadcrumbs ------>



    <!-------- Start gallery ------>
    <section class="gallery all-sections">
        <div class="container">
            <h2 class="title">مكتبة الصور والفيديوهات</h2>

            <div class="grid">

                @foreach ($galleries as  $gallery)
                    <a class="partici1 grid-item grid-item--width2" href="{{getimg($gallery->image)}}" data-fancybox="Gallery">
                        <span class="view"><i class="far fa-eye"></i></span>
                        <img src="{{getimg($gallery->image)}}">
                    </a>

                @endforeach


            </div>

        </div>
    </section>
    <!-------- End gallery ------>
    
    
    
    <!-------- Start PAgination ------>
    <div class="pagination">
      <a href="#"><i class='fas fa-angle-left'> </i> </a>
      <a href="#">1</a>
      <a href="#" class="active">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#"> <i class='fas fa-angle-right'> </i>  </a>
    </div>
    <!-------- End PAgination ------>



@stop
@section('scripts')
    <!----------------- These for here Only ----------------->
    <script src="{{asset('website/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('website/js/masonry.pkgd.min.js')}}"></script>
    <script>
        $('.grid').masonry({
          // options
          itemSelector: '.grid-item',
          columnWidth: 200
        });
    </script>
    <!----------------------------------- END ------------------------------------------>
@stop