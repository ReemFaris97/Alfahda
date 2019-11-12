@extends('admin.layout.master')
@section('title','إنشاء شريك للنجاح    جديد')

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
                <a href="{{route('admin.partners.index')}}" class="btn btn-custom dropdown-toggle waves-effect waves-light" >رجوع لإدارة شركاء النجاح <span class="m-l-5"><i class="fa fa-reply"></i></span></a>
            </div>
            <h4 class="page-title">إضافة شريك نجاح   جديد</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">


                <h4 class="header-title m-t-0 m-b-30"> بيانات شريك النجاح</h4>

                <div class="row">



                    {!!Form::open( ['route' => 'admin.partners.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}


                    @include('admin.partners.form')


                    {!!Form::close() !!}





                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>
@endsection
@section('scripts')



@endsection
