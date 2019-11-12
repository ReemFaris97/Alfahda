<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Category;
use App\Partener;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activity;
use \Milon\Barcode\DNS1D;
class partnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $partners=Partener::all();

     return view('admin.partners.index',compact('partners'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
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

        'image'=>'required|image|',




    ]);
        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;

        Partener::create($inputs);
        alert()->success('تم اضافة الشريك بنجاح !')->autoclose(5000);
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
        return view('admin.partners.edit')->with('partner',Partener::find($id));
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
        $partner=Partener::find($id);


        $this->validate($request,[

            'image'=>'required|image|',






        ]);

        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;


        $partner->update($inputs);

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

        $partner=  Partener::find($id);


        $partner->delete();

        alert()->success('تم حذف  الشريك  بنجاح !')->autoclose(5000);

        return back();
    }
}
