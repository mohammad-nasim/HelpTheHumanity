<?php

namespace App\Http\Controllers\Backend;

use App\AdditionalService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdditionalServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = AdditionalService::all();
        return view('backend.pages.additionalservice.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.additionalaboutus.create');
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

         $data = AdditionalFeature::create([
            'title'       => $request->title,
            'description' => $request->description
        ]);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/add_feature_section'), $image_new_name);

            $data->cover_image = $image_new_name;
        }
        else{
            echo "Not ulpaddd";
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('additionalaboutus.index')->with('message','Data added Successfully');
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
        $this->data['show'] = AdditionalService::find($id);

        return view('backend.pages.additionalservice.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = AdditionalService::find($id);

        return view('backend.pages.additionalservice.edit', $this->data);
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

        $data = AdditionalService::find($id);

        if($request->file('image')){

            $data->title           = $request->title;
            $data->description     = $request->description;

            $file = $request->file('image');

            @unlink(public_path('backend/img/app_image/add_service/'.$data->cover_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/add_service/'), $file_name);
            $data->cover_image = $file_name;

        }
        else{
            $data->title           = $request->title;
            $data->description     = $request->description;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('additionalservice.index')->with('message','Data Updated Successfully');
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

        if($data = AdditionalFeature::find($id)){

            @unlink(public_path('backend/img/app_image/add_feature_section/'.$data->cover_image));

            $data->delete();

            return redirect()->route('additionalfeature.index')->with('error','Data Deleted Successfully');
        }
    }
}
