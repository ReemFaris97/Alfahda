<?php

namespace App\Http\Controllers\Admin;

use App\Action;
use App\ActionImage;
use App\Basic;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Activity;
use \Milon\Barcode\DNS1D;
class actionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $actions=Action::all();


     return view('admin.actions.index',compact('actions'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::pluck('name','id')->toArray();
        return view('admin.actions.create',compact('users'));
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





    ]);

        $image = uploader($request, 'image');


        $inputs = $request->all();
        $inputs['image'] = $image;

       $action= Action::create($inputs);

        if($request->hasFile('images')) {
            foreach ($request['images'] as $key => $item) {
                $imageName = \Storage::disk('public')->putFile('photos', $item);
                $action_image = new ActionImage();
                $action_image->action_id = $action->id;
                $action_image->image = $imageName;
                $action_image->save();
            }
        }

        alert()->success('تم اضافة المبادره بنجاح !')->autoclose(5000);
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

        $users=User::pluck('name','id')->toArray();
        return view('admin.actions.edit',compact('users'))->with('action',Action::find($id));
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
        $action=Action::find($id);


        $this->validate($request,[

            'name'=>'required|string|',





        ]);


        $inputs=$request->all();
        if($request->hasFile('image')) {
            $image = uploader($request, 'image');

            $inputs['image'] = $image;
        }
        $action->update($inputs);


        alert()->success('تم تعديل المبادرة بنجاح !')->autoclose(5000);
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

        $action=Action::find($id);


        $action->delete();

        alert()->success('تم حذف المبادره  بنجاح !')->autoclose(5000);

        return back();
    }
}
