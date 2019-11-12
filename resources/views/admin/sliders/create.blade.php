@extends('admin.layout.master')
@section('title','إضافة الاسليدر  جديدة')

@section('styles')
    <style>
        .erro{
            color: red;
        }
    </style>
@endsection

@section('content')
    <!-- Page Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <a href="{{route('admin.sliders.index')}}" class="btn btn-custom dropdown-toggle waves-effect waves-light" >رجوع لإدارة شركاء النجاح <span class="m-l-5"><i class="fa fa-reply"></i></span></a>
            </div>
            <h4 class="page-title">إضافة  الاسليدرجديدة</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">


                <h4 class="header-title m-t-0 m-b-30"> بيانات   الاسليدر</h4>

                <div class="row">



                    {!!Form::open( ['route' => 'admin.sliders.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}


                    @include('admin.sliders.form')


                    {!!Form::close() !!}





                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>
@endsection
@section('scripts')



@endsection
