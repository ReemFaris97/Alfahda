@extends('admin.layout.master')
@section('title','إضافة صور او فيديو   جديدة')

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
                <a href="{{route('admin.partners.index')}}" class="btn btn-custom dropdown-toggle waves-effect waves-light" >رجوع لإدارة  الصور والفيديوهات <span class="m-l-5"><i class="fa fa-reply"></i></span></a>
            </div>
            <h4 class="page-title">إضافة  صور او فيديو جديدة</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">


                <h4 class="header-title m-t-0 m-b-30"> بيانات  صور او فيديو </h4>

                <div class="row">



                    {!!Form::open( ['route' => 'admin.galleries.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}


                    @include('admin.galleries.form')


                    {!!Form::close() !!}





                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>
@endsection
@section('scripts')



@endsection
