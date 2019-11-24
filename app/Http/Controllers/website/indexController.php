<?php

namespace App\Http\Controllers\website;

use App\Action;
use App\Ambassador;
use App\Contact;
use App\Gallery;
use App\Member;
use App\Partener;
use App\Participant;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        $actions=Action::all();
        $members=Member::all();
        $participants=Participant::all();
        $partners=Partener::take(8)->get();
        return view('website.index',compact('members','participants','partners','sliders','actions'));
    }


    public function about()
    {
        $members=Member::all();
        return view('website.about',compact('members'));
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function sofra_singel($id){

        $ambosdador=Ambassador::find($id);

        return view('website.sofra-singel',compact('ambosdador'));
    }

    public function action($id)
    {

        $action=Action::find($id);
        $ambosdadors=Ambassador::all();
        if ($action->type=="coming_soon")
        {
            return view('website.action3',compact('action'));
        }elseif($action->type=="desc")
        {

            return view('website.action2',compact('action'));
        }else
        {
            return view('website.action4',compact('action','ambosdadors'));
        }



    }




    public function gallery()
    {
        $galleries=Gallery::all();
        return view('website.gallery',compact('galleries'));
    }
    public function postContacts(Request $request)
    {
        //  dd($request->all());
        $this->validate($request,[
            'name'=>'required|string|max:191',

            'email'=>'required|nullable|string|email|max:255|unique:contacts',


            'phone'=>'required|string|',
        ]);
        $inputs=$request->all();


        $contacts=Contact::create($inputs);
        alert()->success('تم الإرسال بنجاح سيتم الرد عليك لاحقا')->autoclose(5000);
        return back();
    }


    public function volunteers(Request $request)
    {
        //  dd($request->all());
        $this->validate($request,[
            'name'=>'required|string|max:191',

            'email'=>'required|nullable|string|email|max:255|unique:contacts',


            'phone'=>'required|string|',
        ]);
        $inputs=$request->all();


        $contacts=Contact::create($inputs);
        alert()->success('تم الإرسال بنجاح سيتم الرد عليك لاحقا')->autoclose(5000);
        return back();
    }
    public function keepers(Request $request)
    {
        //  dd($request->all());
        $this->validate($request,[
            'name'=>'required|string|max:191',



            'phone'=>'required|string|',
        ]);
        $inputs=$request->all();


        $contacts=Contact::create($inputs);
        alert()->success('تم الإرسال بنجاح سيتم الرد عليك لاحقا')->autoclose(5000);
        return back();
    }
    public function all_actions()
    {
        return view('website.all-actions');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depart=Department::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
