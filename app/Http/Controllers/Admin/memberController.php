<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Category;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activity;
use \Milon\Barcode\DNS1D;
class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $members=Member::all();

     return view('admin.members.index',compact('members'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
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

            'job'=>'required|string|',

            'image'=>'required|image|',

    ]);
        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;

        Member::create($inputs);
        alert()->success('تم اضافة العضو بنجاح !')->autoclose(5000);
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
        return view('admin.members.edit')->with('member',Member::find($id));
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
        $member=Member::find($id);


        $this->validate($request,[

            'name'=>'required|string|',
            'job'=>'required|string|',





        ]);

        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;




        $member->update($inputs);

        alert()->success('تم تعديل  العضو بنجاح !')->autoclose(5000);
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

        $member=Member::find($id);


        $member->delete();

        alert()->success('تم حذف العضو  بنجاح !')->autoclose(5000);

        return back();
    }
}
