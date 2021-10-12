<?php

namespace App\Http\Controllers\Backend;

use App\FunFactor;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class FunFactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;

        $this->data['alldata'] = FunFactor::all();
        $this->data['bgimg'] = FunFactor::where('id', $id)->first();
        return view('backend.pages.funfactor.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('backend.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->image);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['show'] = FunFactor::find($id);

        return view('backend.pages.funfactor.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = FunFactor::find($id);

        return view('backend.pages.funfactor.edit', $this->data);
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
        $data = FunFactor::find($id);

        if($request->file('image')){

            $data->icon            = $request->icon;
            $data->counter         = $request->counter;
            $data->project         = $request->project;

            $file = $request->file('image');
            @unlink(public_path('backend/img/app_image/fun_factor/'.$data->bg_image));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/fun_factor'), $file_name);

            $data->bg_image = $file_name;

        }
        else{

            $data->icon            = $request->icon;
            $data->counter         = $request->counter;
            $data->project         = $request->project;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('funfactor.index')->with('message','Data Updated Successfully');
        }
    }


    public function imgedit(Request $request, $id){
        dd('hi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($data = Service::find($id)){

            @unlink(public_path('backend/img/app_image/service/'.$data->image));

            $data->delete();

            return redirect()->route('service.index')->with('error','Data Deleted Successfully');
        }
    }
}
