

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
                <a class="partici1 grid-item static-banner" href="img/images/img9.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img9.jpg">
                </a>
                <a class="partici1 grid-item grid-item--width2" href="img/images/img8.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img8.jpg">
                </a>
                <a class="partici1 grid-item grid-item--height2" href="img/images/img7.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img7.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--height2" href="img/images/img6.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img6.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--width2" href="img/mb/mb11.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <video controls poster="img/shape4.jpg"  preload="none">
                    <source src="img/mb/mb11.jpg" type="video/mp4">
                    Your browser does not support the video tag.</video>
                </a>
                <a class="partici1 grid-item grid-item--height2" href="img/images/img5.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img5.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--height2" href="img/images/img4.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img4.jpg">
                </a>
                <a class="partici1 grid-item static-banner" href="img/images/img3.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img3.jpg">
                </a>
                <a class="partici1 grid-item grid-item--height2" href="img/images/img2.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img2.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--height2" href="img/images/img1.jpg" data-fancybox="Gallery">
                <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img1.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--height2" href="img/shape5.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/shape5.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--height2" href="img/images/img10.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/images/img10.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--width2" href="img/mb/mb8.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <video controls poster="img/shape4.jpg"  preload="none">
                    <source src="img/mb/mb8.jpg" type="video/mp4">
                    Your browser does not support the video tag.</video>
                </a>
                <a class="partici1 grid-item grid-item--height2" href="img/shape6.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/shape6.jpg">
                </a>
                
                <a class="partici1 grid-item grid-item--height2" href="img/shape7.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/shape7.jpg">
                </a>
                <a class="partici1 grid-item static-banner" href="img/shape3.jpg" data-fancybox="Gallery">
                    <span class="view"><i class="far fa-eye"></i></span> 
                    <img src="img/shape3.jpg">
                </a>
                
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