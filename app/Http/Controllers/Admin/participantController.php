<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Category;
use App\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activity;
use \Milon\Barcode\DNS1D;
class participantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $participants=Participant::all();

     return view('admin.participants.index',compact('participants'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.participants.create');
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

        Participant::create($inputs);
        alert()->success('تم اضافة المشاركة بنجاح !')->autoclose(5000);
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
        return view('admin.participants.edit')->with('participant',Participant::find($id));
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
        $participant=Participant::find($id);


        $this->validate($request,[


            'image'=>'required|image|',





        ]);


        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;




        $participant->update($inputs);

        alert()->success('تم تعديل المشاركة بنجاح !')->autoclose(5000);
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

        $participant=Participant::find($id);


        $participant->delete();

        alert()->success('تم حذف المشاركة  بنجاح !')->autoclose(5000);

        return back();
    }
}
