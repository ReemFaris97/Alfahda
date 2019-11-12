@extends('layouts.master')
@section('styles')
@stop
@section('content')



    <!-------- Start breadcrumbs ------>
    <section class="breadcrumbs">
        <div class="titles">
            <a href="index.blade.php">الرئيسية</a> /
            <h3>اتصل بنا</h3>
        </div>
    </section>
    <!-------- End breadcrumbs ------>



    <!-------- Start About ------>
    <section class="contact all-sections">
        <div class="container">
            <h2 class="title green">اتصل بنا</h2>

            {!!Form::open( ['route' => 'website.Contacts' ,'class'=>'contact-form form1', 'method' => 'Post','files' => true]) !!}

                <div class="row">

                    <div class="col-sm-6 col-xs-12 wow slideInRight">
                        <div class="input-block">
                            <label for="">الاسم</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 wow slideInLeft">
                        <div class="input-block">
                            <label for="">البريد الإلكترونى</label>
                            <input type="email"  name="email" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 wow slideInRight">
                        <div class="input-block">
                            <label for="">رقم الجوال</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 wow slideInLeft">
                        <div class="input-block">
                            <label for="">عنوان الرسالة</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>

                    <div class="col-xs-12 wow slideInUp">
                        <div class="input-block textarea">
                            <label for="">اكتب رسالتك..</label>
                            <textarea rows="3" type="text" name="message" class="form-control"></textarea>
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
    </section>
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
   @stop