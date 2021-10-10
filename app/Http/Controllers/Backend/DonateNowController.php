<?php

namespace App\Http\Controllers\Backend;

use App\DonateNow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateNowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = DonateNow::all();
        return view('backend.pages.donatenow.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('backend.pages.additionalaboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['show'] = DonateNow::find($id);

        return view('backend.pages.donatenow.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = DonateNow::find($id);

        return view('backend.pages.donatenow.edit', $this->data);
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

        $data = DonateNow::find($id);

        if($request->file('image')){

            $data->cause           = $request->cause;
            $data->title           = $request->title;
            $data->description     = $request->description;

            $data->bkash           = $request->bkash;
            $data->rocket          = $request->rocket;
            $data->nagad           = $request->nagad;
            $data->reference       = $request->reference;
            $data->bank            = $request->bank;

            $file = $request->file('image');

            @unlink(public_path('backend/img/app_image/donatenow/'.$data->image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/donatenow/'), $file_name);
            $data->image = $file_name;

        }
        else{
            $data->cause           = $request->cause;
            $data->title           = $request->title;
            $data->description     = $request->description;

            $data->bkash           = $request->bkash;
            $data->rocket          = $request->rocket;
            $data->nagad           = $request->nagad;
            $data->reference       = $request->reference;
            $data->bank            = $request->bank;

        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('donatenow.index')->with('message','Data Updated Successfully');
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

        // if($data = AdditionalFeature::find($id)){

        //     @unlink(public_path('backend/img/app_image/add_feature_section/'.$data->cover_image));

        //     $data->delete();

        //     return redirect()->route('additionalfeature.index')->with('error','Data Deleted Successfully');
        // }
    }
}
