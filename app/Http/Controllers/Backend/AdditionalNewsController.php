<?php

namespace App\Http\Controllers\Backend;

use App\AdditionalNews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdditionalNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = AdditionalNews::all();
        return view('backend.pages.additionalnews.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     * AdditionalNewsController
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
        $this->data['show'] = AdditionalNews::find($id);

        return view('backend.pages.additionalnews.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = AdditionalNews::find($id);

        return view('backend.pages.additionalnews.edit', $this->data);
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
        $data = AdditionalNews::find($id);

        if($request->file('image')){

            $data->title     = $request->title;

            $file = $request->file('image');

            @unlink(public_path('backend/img/app_image/add_news/'.$data->cover_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/add_news'), $file_name);

            $data->cover_image = $file_name;

        }
        else{
            $data->title     = $request->title;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('additionalnews.index')->with('message','Data Updated Successfully');
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

        // if($data = AdditionalGallery::find($id)){

        //     @unlink(public_path('backend/img/app_image/add_gallery/'.$data->cover_image));

        //     $data->delete();

        //     return redirect()->route('additionalgallery.index')->with('error','Data Deleted Successfully');
        // }
    }
}
