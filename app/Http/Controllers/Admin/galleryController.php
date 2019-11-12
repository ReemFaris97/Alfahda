<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Category;
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

       $categories=Category::all();

     return view('admin.categories.index',compact('categories'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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

        'ar_name'=>'required|string|',

            'en_name'=>'required|string|',



    ]);
        $inputs = $request->all();
        Category::create($inputs);
        alert()->success('تم اضافة القسم بنجاح !')->autoclose(5000);
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
        return view('admin.categories.edit')->with('category',Category::find($id));
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
        $category=Category::find($id);


        $this->validate($request,[

            'ar_name'=>'required|string|',
            'en_name'=>'required|string|',





        ]);


        $inputs=$request->all();



        $category->update($inputs);

        alert()->success('تم تعديل القسم بنجاح !')->autoclose(5000);
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

        $category=Category::find($id);


        $category->delete();

        alert()->success('تم حذف القسم  بنجاح !')->autoclose(5000);

        return back();
    }
}
