<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Category;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activity;
use \Milon\Barcode\DNS1D;
class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galleries=Gallery::all();

     return view('admin.galleries.index',compact('galleries'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
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




    ]);
        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;
        Gallery::create($inputs);
        alert()->success('تم اضافة الصورة بنجاح !')->autoclose(5000);
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
        return view('admin.galleries.edit')->with('gallery',Gallery::find($id));
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
        $gallery=Gallery::find($id);


        $this->validate($request,[






        ]);


        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;



        $gallery->update($inputs);

        alert()->success('تم تعديل  الصورة بنجاح !')->autoclose(5000);
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

        $gallery=Gallery::find($id);


        $gallery->delete();

        alert()->success('تم حذف  الصورة  بنجاح !')->autoclose(5000);

        return back();
    }
}
