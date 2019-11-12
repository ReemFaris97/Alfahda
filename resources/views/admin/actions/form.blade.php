@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<div class="col-sm-6 col-xs-12  pull-left">
    <div class="form-group form-float">
        <label class="form-label"> اسم المبادره</label>
        <div class="form-line">
            {!! Form::text("name",null,['class'=>'form-control','placeholder'=>'  اسم المبادرة'])!!}
        </div>
    </div>
</div>
<div class="col-xs-12 col-md-6 pull-left">
    <div class="form-group form-float">
        <label class="form-label">   اسم مدير المبادره  </label>
        {!! Form::select("user_id",$users,null,['class'=>'form-control'])!!}
    </div>
</div>



<div class="col-sm-6 col-xs-12  pull-left">
    <div class="form-group form-float">
        <label class="form-label">نوع المحتوى</label>
        <div class="form-line">
            {!! Form::select("type",['desc'=>'وصف','ambassador'=>'سفراء','coming_soon'=>'قريبا التدشين'],null,['class'=>'form-control','placeholder'=>'  اسم المبادرة'])!!}
        </div>
    </div>
</div>


<div class="col-sm-6 col-xs-12  pull-left">
    <div class="form-group form-float">
        <label class="form-label"> المحتوى </label>
        <div class="form-line">
            {!! Form::textarea("description",null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>
<div class="col-xs-12 col-md-6 pull-left">
    <div class="form-group form-float">
        <label class="form-label">صور المبادرة    </label>
        {!! Form::file("image[]",null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="col-xs-12 col-md-6 pull-left">
    <div class="label label-info">
      <a href="{{route('admin.ambassadors.index')}}"><span>السفراء</span></a>
    </div>
</div>






<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>

