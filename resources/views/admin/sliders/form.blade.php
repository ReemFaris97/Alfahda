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
        <label class="form-label"> النص   </label>
        <div class="form-line">
            {!! Form::text("text",null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>


<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> النوع </label>
        <div class="form-line">
            {!! Form::select("type",['url','image'],null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>


<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> لينك الفيديو </label>
        <div class="form-line">
            {!! Form::url("url",null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>




<div class="col-xs-12 col-md-6 image_male">
    <div class="form-group form-float">
    <label class="form-label">صوره    </label>
    {!! Form::file("image",null,['class'=>'form-control'])!!}
</div>
</div>

@if( isset($slider))

    <div class="form-group col-xs-12 col-md-6 form-float">
        <label>الصورة: </label>
        <img src="{{getimg($slider->image)}}" style="width:100px; height:100px">
    </div>


@endif





<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>

