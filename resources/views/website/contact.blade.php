@extends('layouts.master')
@section('styles')
@stop
@section('content')



    <!-------- Start breadcrumbs ------>
<section class="breadcrumbs">
    <div class="titles">
        <a href="index.html">الرئيسية</a> /
        <h3>إنضم إلينا</h3>
    </div>
</section>
<!-------- End breadcrumbs ------>



<!-------- Start About ------>



<section class="contact all-sections">
    <div class="container">
        <h2 class="title green">إنضم إلينا</h2>
        <ul class="nav nav-pills">
            <li>
                <a class="btn-3" data-toggle="pill" href="#add">
                    <span> إنضم لنا كراعى </span>
                </a>
            </li>
            <li class="active">
                <a class="btn-3 " data-toggle="pill" href="#add2">
                    <span> مقترح</span>
                </a>
            </li>
            <li>
                <a class="btn-3" data-toggle="pill" href="#add3">
                    <span> إنضم لنا كمتطوع</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="add" class="tab-pane fade in active">
                {{--<form action="#" class="contact-form form1">--}}
                {!!Form::open( ['route' => 'website.keepers' ,'class'=>'contact-form form1', 'method' => 'Post','files' => true]) !!}

                <div class="row">

                        <div class="col-sm-6 col-xs-12 ">
                            <div class="input-block">
                                <label for="">الاسم / الجهة</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12 ">
                            <div class="input-block">
                                <label for="">المدينه</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block">
                                <label for="">رقم الجوال</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block">
                                <label for="">البريد الإلكترونى</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class=" col-xs-12">
                            <div class="input-block ">
                                <label for="">تويتر</label>
                                <input type="text" class="form-control" name="twitter">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block textarea">
                                <label for="">نبذة عنكم ...</label>
                                <textarea rows="3" type="text" class="form-control" name="about_us"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block textarea">
                                <label for="">خدماتكم المقدمة للفهدة الإنسانية ...</label>
                                <textarea rows="3" type="text" class="form-control"name="services"></textarea>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <button class="btn-3" type="submit">
                                <span> ارسال </span>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
            <div id="add2" class="tab-pane fade">
                {{--<form action="#" class="contact-form form1">--}}
                    {!!Form::open( ['route' => 'website.Contacts' ,'class'=>'contact-form form1', 'method' => 'Post','files' => true]) !!}

                    <div class="row">

                        <div class="col-sm-6 col-xs-12 ">
                            <div class="input-block">
                                <label for="">الاسم</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12 ">
                            <div class="input-block">
                                <label for="">البريد الإلكترونى</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block">
                                <label for="">رقم الجوال</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block">
                                <label for="">عنوان الرسالة</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="input-block textarea">
                                <label for="">اكتب رسالتك..</label>
                                <textarea rows="3" type="text" class="form-control" name="message"></textarea>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <button class="btn-3" type="submit">
                                <span> ارسال </span>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
            <div id="add3" class="tab-pane fade">
                {!!Form::open( ['route' => 'website.volunteers' ,'class'=>'contact-form form1', 'method' => 'Post','files' => true]) !!}

                <div class="row">

                        <div class="col-xs-12 ">
                            <div class="input-block img-input">
                                <p>صوره شخصيه</p>
                                <div>
                                    <input id="myimg" type="file" onchange="readURL(this);" name="image" />
                                    <img id="blah" src="{{asset('website/img/shape6.jpg')}}" alt="your image" />
                                    <label for="myimg"><i class="fas fa-plus"></i></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12 ">
                            <div class="input-block">
                                <label for="">الاسم الرباعي</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label class="label-date"> (تاريخ الميلاد (اليوم /التاريخ / السنه)</label>
                                <input type="text" class="form-control date" name="birth_date">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block">
                                <label for="">الجنسية</label>
                                <input type="text" class="form-control" name="nationality">
                            </div>
                        </div>

                        <div class="col-sm-6  col-xs-12">
                            <div class="input-block ">
                                <label for="">رقم الهوية</label>
                                <input type="number" class="form-control" name="id_card">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">الجنس</label>
                                <input type="text" class="form-control" name="sex">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">الحالة الاجتماعية</label>
                                <input type="text" class="form-control" name="social_status">
                            </div>
                        </div>

                        <label>بيانات التواصل</label>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">المدينة</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">الحي</label>
                                <input type="text" class="form-control" name="area">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">رقم الجوال</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">البريد الالكتروني</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="input-block ">
                                <label for="">التويتر</label>
                                <input type="text" class="form-control" name="twitter">
                            </div>
                        </div>
                        <label>البيانات العلمية والعمليه</label>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for=""> المؤهل العلمي</label>
                                {{--<select class="form-control" name="">--}}
                                    {{--<option>ابتدائي</option>--}}
                                    {{--<option>متوسط</option>--}}
                                    {{--<option>ثانوي</option>--}}
                                    {{--<option>جامعي </option>--}}
                                    {{--<option>دراسات عليا</option>--}}
                                {{--</select>--}}
                                {!! Form::select("qualification",['primary'=>'ابتدائ','meduim'=>'متوسط','secondary'=>'ثانوى','faculty'=>'جامعي','qualification'=>'دراسات عليا'],null,['class'=>'form-control'])!!}

                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">التخصص</label>
                                <input type="text" class="form-control" name="Specialization">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for=""> اللغات</label>
                                <select class="form-control" name="language">
                                    <option value="english">انجليزي </option>
                                    <option value="french">فرنسي</option>
                                    <option value="arabic">عربى </option>
                                    <option>اخرى </option>
                                </select>
                            </div>
                        </div>

                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<div class="input-block ">--}}
                                {{--<label for=""> الوضع الحالي</label>--}}
                                {{--<select class="form-control">--}}
                                    {{--<option>طالب </option>--}}
                                    {{--<option>متخرج</option>--}}
                                    {{--<option>موظف حكومي </option>--}}
                                    {{--<option>موظف قطاع خاص </option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">جهة العمل</label>
                                <input type="text" class="form-control" name="work">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">المسمى الوظيفي</label>
                                <input type="text" class="form-control" name="job_title">
                            </div>
                        </div>

                        <label>مقياس المهارات</label>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">كيف عرفت عن الفهدة الإنسانية ؟</label>
                                <input type="text" class="form-control" name="know_fahda">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">لماذا ترغب في التطوع في الفهده الإنسانية؟</label>
                                <input type="text" class="form-control" name="why_fahda">
                            </div>
                        </div>
                        <label>مقياس المهارات</label>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">ماهي خبراتك السابقه في التطوع ؟</label>
                                <input type="text" class="form-control" name="experience">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for="">ماهي إنجازاتك على المستوى الشخصي أو أهدافك القادمة ؟</label>
                                <input type="text" class="form-control" name="achievements">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for=""> الفئات التي تفضل التطوع فيها</label>
                                <select class="form-control" name="classes">
                                    <option value="1">أطفال ذوي الاعاقه </option>
                                    <option value="2">أطفال فئة الداون </option>
                                    <option value="3">أطفال محاربي السرطان </option>
                                </select>


                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for=""> المجالات التي تفضل التطوع فيها</label>
                                <select class="form-control" name="fields">
                                    <option value="1">مبادرة زيارة الفهدة </option>
                                    <option value="2">مبادرة نبض الرياضية</option>
                                    <option value="3">مبادرة دريمز</option>
                                    <option value="4"> مبادرة تيك كيدز</option>
                                    <option value="5">مبادرة اقتفي</option>
                                </select>
                            </div>
                        </div>
                        <label>معلومات إضافية تريد أن نعرفها عنك</label>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for=""> بيانات التفرغ</label>
                                <select class="form-control" name="week">
                                    <option value="middle">وسط الأسبوع</option>
                                    <option value="end">نهاية الأسبوع</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-block ">
                                <label for=""> وقت التفرغ</label>
                                <select class="form-control" name="time">

                                    <option value="morning">صباحي</option>
                                    <option value="evening">مسائي</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn-3" type="submit">
                                    <span> ارسال </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-------- End About ------>
@stop
@section('scripts')

<!----------------------- This for here only ---------------------->

<script>
    //material contact form animation
    $('.contact-form').find('.form-control').each(function() {
        var targetItem = $(this).parent();
        if ($(this).val()) {
            $(targetItem).find('label').css({
                'top': '10px',
                'fontSize': '14px'
            });
        }
    })
    $('.contact-form').find('.form-control').focus(function() {
        $(this).parent('.input-block').addClass('focus');
        $(this).parent().find('label').animate({
            'top': '10px',
            'fontSize': '14px'
        }, 300);
    })
    $('.contact-form').find('.form-control').blur(function() {
        if ($(this).val().length === 0) {
            $(this).parent('.input-block').removeClass('focus');
            $(this).parent().find('label').animate({
                'top': '25px',
                'fontSize': '18px'
            }, 300);
        }
    })

</script>
<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

</script>
<!--------------------------------------------------->




<script src="{{asset('website/js/wow.min.js')}}"></script>

<script src="{{asset('website/js/script.js')}}"></script>
<script src="{{asset('website/js/datedropper.min.js')}}"></script>
<script>
    new WOW().init();
    $(document).ready(function() {

        $(".date").dateDropper();
    })

</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)

            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

@stop