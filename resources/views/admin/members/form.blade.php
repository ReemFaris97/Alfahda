@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> اسم العضو </label>
        <div class="form-line">
            {!! Form::text("name",null,['class'=>'form-control','placeholder'=>'  اسم العضو '])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">   الوظيفة</label>
        <div class="form-line">
            {!! Form::text("job",null,['class'=>'form-control','placeholder'=>'    الوظيفة'])!!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-md-6 image_male">
    <div class="form-group form-float">
    <label class="form-label">صوره    </label>
    {!! Form::file("image",null,['class'=>'form-control'])!!}
</div>
</div>

@if( isset($member))
    <div class="form-group col-xs-12 col-md-6 form-float">
        <label>الصورة: </label>
        <img src="{{getimg($member->image)}}" style="width:100px; height:100px">
    </div>
@endif





<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>

