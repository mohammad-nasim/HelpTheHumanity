<?php

namespace App\Http\Controllers\Backend;

use App\Feature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     * EventController
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = Feature::all();
        return view('backend.pages.feature.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.feature.create');
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

        $data = Feature::create([
            'icon'        => $request->title,
            'title'       => $request->title,
            'description' => $request->description
        ]);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/feature_section'), $image_new_name);
            $data->image = $image_new_name;
        }
        else{
            echo "Not ulpaddd";
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('feature.index')->with('message','Data added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['show'] = Feature::find($id);

        return view('backend.pages.feature.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = Feature::find($id);

        return view('backend.pages.feature.edit', $this->data);
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
        $data = Feature::find($id);

        if($request->file('image')){

            $data->icon        = $request->icon;
            $data->title     = $request->title;
            $data->description     = $request->description;


            $file = $request->file('image');
            @unlink(public_path('backend/img/app_image/feature_section/'.$data->image));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/feature_section'), $file_name);
            $data->image = $file_name;

        }
        else{

            $data->icon        = $request->icon;
            $data->title     = $request->title;
            $data->description     = $request->description;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('feature.index')->with('message','Data Updated Successfully');
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
        if($data = Feature::find($id)){

            @unlink(public_path('backend/img/app_image/feature_section/'.$data->image));

            $data->delete();

            return redirect()->route('feature.index')->with('error','Data Deleted Successfully');
        }
    }
}
