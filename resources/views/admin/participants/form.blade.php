@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="col-xs-12 col-md-6 image_male">
    <div class="form-group form-float">
    <label class="form-label">صوره    </label>
    {!! Form::file("image",null,['class'=>'form-control'])!!}
</div>
</div>

@if( isset($participant))

    <div class="form-group col-xs-12 col-md-6 form-float">
        <label>الصورة: </label>
        <img src="{{getimg($participant->image)}}" style="width:100px; height:100px">
    </div>


@endif





<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>

