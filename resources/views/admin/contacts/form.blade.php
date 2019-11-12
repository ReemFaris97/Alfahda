@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-md-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">القسم </label>
        <div class="form-line">
            {!! Form::select("category_id",$categories,null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>

<div class="col-md-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">المدينة </label>
        <div class="form-line">
            {!! Form::select("city_id",$cities,null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> اسم المتجر باللغة العربية </label>
        <div class="form-line">
            {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'  اسم المتجر '])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> اسم المتجر باللغة الانجليزية</label>
        <div class="form-line">
            {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'  اسم المتجر باللغة الانجليزية'])!!}
        </div>
    </div>
</div>


<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> عنوان المتجر باللغة العربية </label>
        <div class="form-line">
            {!! Form::text("ar_address",null,['class'=>'form-control','placeholder'=>'  عنوان المتجرباللغة العربية '])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> عنوان المتجر باللغة الانجليزية</label>
        <div class="form-line">
            {!! Form::text("en_address",null,['class'=>'form-control','placeholder'=>'   عنوان المتجرباللغة الانجليزية '])!!}
        </div>
    </div>
</div>





<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> جوال المتجر </label>
        <div class="form-line">
            {!! Form::text("phone",null,['class'=>'form-control','placeholder'=>'  جوال المتجر '])!!}
        </div>
    </div>
</div>



<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> مواعيد المتجر </label>
        <div class="form-line">
            {!! Form::text("work_time",null,['class'=>'form-control','placeholder'=>'  مواعيد المتجر '])!!}
        </div>
    </div>
</div>



<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> لينك تطبيق الايفون </label>
        <div class="form-line">
            {!! Form::url("iphone_link",null,['class'=>'form-control','placeholder'=>'   لينك تطبيق الايفون '])!!}
        </div>
    </div>
</div>

<div class="col-sm-6 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">  لينك تطبيق الاندوريد</label>
        <div class="form-line">
            {!! Form::url("android_link",null,['class'=>'form-control','placeholder'=>'   لينك تطبيق الاندوريد'])!!}
        </div>
    </div>
</div>
<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label">   لينك  الموقع </label>
        <div class="form-line">
            {!! Form::url("website",null,['class'=>'form-control','placeholder'=>'  لينك الموقع '])!!}
        </div>
    </div>
</div>
<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> وصف المتجر باللغة الانجليزية </label>
        <div class="form-line">
            {!! Form::textarea("en_description",null,['class'=>'form-control','placeholder'=>'  وصف المتجر باللغة الانجليزية'])!!}
        </div>
    </div>
</div>

<div class="col-sm-12 col-xs-12  pull-right">
    <div class="form-group form-float">
        <label class="form-label"> وصف المتجر باللغة العربية </label>
        <div class="form-line">
            {!! Form::textarea("ar_description",null,['class'=>'form-control','placeholder'=>'  وصف المتجر باللغة العربية'])!!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-md-6 image_male">
    <div class="form-group form-float">
    <label class="form-label">صوره    </label>
    {!! Form::file("image",null,['class'=>'form-control'])!!}
</div>
</div>

@if( isset($store))

    <div class="form-group col-xs-12 col-md-6 form-float">
        <label>الصورة: </label>
        <img src="{{getimg($store->image)}}" style="width:100px; height:100px">
    </div>


@endif





<div class="col-xs-12">
    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>
</div>

