<?php

namespace App\Http\Controllers\Admin;

use App\Ambassador;
use App\Basic;
use App\Category;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activity;
use \Milon\Barcode\DNS1D;
class ambassadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $ambassadors=Ambassador::all();

     return view('admin.ambassadors.index',compact('ambassadors'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ambassadors.create');
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

        'name'=>'required|string|',

            'goals'=>'required|string|',
            'message'=>'required|string|',

            'image'=>'required|image|',

    ]);
        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;

        Ambassador::create($inputs);
        alert()->success('تم اضافة السفير بنجاح !')->autoclose(5000);
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
        return view('admin.ambassadors.edit')->with('ambassador',Ambassador::find($id));
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
        $ambassador=Ambassador::find($id);


        $this->validate($request,[

            'name'=>'required|string|',

            'goals'=>'required|string|',
            'message'=>'required|string|',

            'image'=>'required|image|',




        ]);

        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;




        $ambassador->update($inputs);

        alert()->success('تم تعديل   بنجاح !')->autoclose(5000);
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

        $ambassador=Ambassador::find($id);


        $ambassador->delete();

        alert()->success('تم حذف   بنجاح !')->autoclose(5000);

        return back();
    }
}
