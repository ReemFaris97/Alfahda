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
        <label class="form-label"> الاسم  </label>
        <div class="form-line">
            {!! Form::text("name",null,['class'=>'form-control','placeholder'=>' الاسم '])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-left">
    <div class="form-group form-float">
        <label class="form-label">   الطموح</label>
        <div class="form-line">
            {!! Form::text("goals",null,['class'=>'form-control','placeholder'=>' الطموح'])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-left">
    <div class="form-group form-float">
        <label class="form-label">   الرسالة</label>
        <div class="form-line">
            {!! Form::text("message",null,['class'=>'form-control','placeholder'=>'الرسالة '])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-left">
    <div class="form-group form-float">
        <label class="form-label">   التشخيص</label>
        <div class="form-line">
            {!! Form::text("diagnosis",null,['class'=>'form-control','placeholder'=>'التشخيص '])!!}
        </div>
    </div>
</div>
<div class="col-xs-12 col-md-6 image_male">
    <div class="form-group form-float">
    <label class="form-label">صوره    </label>
    {!! Form::file("image",null,['class'=>'form-control'])!!}
</div>
</div>

@if( isset($ambassador))
    <div class="form-group col-xs-12 col-md-6 form-float">
        <label>الصورة: </label>
        <img src="{{getimg($ambassador->image)}}" style="width:100px; height:100px">
    </div>
@endif





<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>

