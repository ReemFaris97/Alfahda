<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Category;
use App\Partener;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activity;
use \Milon\Barcode\DNS1D;
class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $sliders=Slider::all();

     return view('admin.sliders.index',compact('sliders'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

        'text'=>'required|string|',




    ]);
        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;

        Slider::create($inputs);
        alert()->success('تم اضافة الاسليدر بنجاح !')->autoclose(5000);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.sliders.edit')->with('slider',slider::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider=Slider::find($id);


        $this->validate($request,[








        ]);

        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;


        $slider->update($inputs);

        alert()->success('تم تعديل الشريك بنجاح !')->autoclose(5000);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $slider=  Slider::find($id);


        $slider->delete();

        alert()->success('تم حذف  الاسليدر  بنجاح !')->autoclose(5000);

        return back();
    }
}
