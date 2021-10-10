<?php

namespace App\Http\Controllers\Backend;

use App\AdditionalDonateNow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdditionalDonateNowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = AdditionalDonateNow::all();
        return view('backend.pages.additionaldonatenow.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
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
        $this->data['show'] = AdditionalDonateNow::find($id);

        return view('backend.pages.additionaldonatenow.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = AdditionalDonateNow::find($id);

        return view('backend.pages.additionaldonatenow.edit', $this->data);
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
        //dd($request->all());

        $data = AdditionalDonateNow::find($id);

        if($request->file('bg_image') && $request->file('cover_image')){

            $data->title     = $request->title;

            // cover Image
            $file = $request->file('cover_image');

            @unlink(public_path('backend/img/app_image/add_donate_now/'.$data->cover_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/add_donate_now/'), $file_name);
            $data->cover_image = $file_name;

            // bg image
            $file = $request->file('bg_image');

            @unlink(public_path('backend/img/app_image/add_donate_now/'.$data->bg_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/add_donate_now/'), $file_name);
            $data->bg_image = $file_name;


        }
        elseif($request->file('cover_image')){
            $data->title     = $request->title;

            // cover Image
            $file = $request->file('cover_image');

            @unlink(public_path('backend/img/app_image/add_donate_now/'.$data->cover_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/add_donate_now/'), $file_name);
            $data->cover_image = $file_name;
        }
        elseif($request->file('bg_image')){
            $data->title     = $request->title;

            // bg image
            $file = $request->file('bg_image');

            @unlink(public_path('backend/img/app_image/add_donate_now/'.$data->bg_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/add_donate_now/'), $file_name);
            $data->bg_image = $file_name;
        }
        else{
            $data->title     = $request->title;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('additionaldonatenow.index')->with('message','Data Updated Successfully');
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


    }
}
