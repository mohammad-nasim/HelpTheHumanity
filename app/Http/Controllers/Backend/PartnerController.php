<?php

namespace App\Http\Controllers\Backend;

use App\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = Partner::all();
        return view('backend.pages.partner.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     * AdditionalOurTeamController
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['show'] = Partner::find($id);

        return view('backend.pages.partner.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = Partner::find($id);

        return view('backend.pages.partner.edit', $this->data);
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
        $data = Partner::find($id);

        if($request->has('bg_image') & $request->has('image_one') & $request->has('image_two') & $request->has('image_three') & $request->has('image_four') ){
            //Bg Image
            $file = $request->file('bg_image');

            @unlink(public_path('backend/img/app_image/partner/'.$data->bg_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->bg_image = $file_name;

            //Image One
            $file = $request->file('image_one');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_one));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_one = $file_name;

            //Image Two
            $file = $request->file('image_two');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_two));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_two = $file_name;

            //Image Three
            $file = $request->file('image_three');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_three));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_three = $file_name;

            //Image Four
            $file = $request->file('image_four');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_four));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_four = $file_name;

        }
        elseif($request->has('bg_image')){
            //Bg Image
            $file = $request->file('bg_image');

            @unlink(public_path('backend/img/app_image/partner/'.$data->bg_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->bg_image = $file_name;
        }
        elseif($request->has('image_one')){
            $file = $request->file('image_one');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_one));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_one = $file_name;
        }
        elseif($request->has('image_two')){
            $file = $request->file('image_two');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_two));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_two = $file_name;
        }
        elseif($request->has('image_three')){
            $file = $request->file('image_three');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_three));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_three = $file_name;
        }
        else{
            $file = $request->file('image_four');

            @unlink(public_path('backend/img/app_image/partner/'.$data->image_four));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/partner'), $file_name);
            $data->image_four = $file_name;
        }


        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('partner.index')->with('message','Data Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if($data = AdditionalGallery::find($id)){

            @unlink(public_path('backend/img/app_image/add_gallery/'.$data->cover_image));

            $data->delete();

            return redirect()->route('additionalgallery.index')->with('error','Data Deleted Successfully');
        }
    }
}
