<?php

namespace App\Http\Controllers\Backend;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = AboutUs::latest()->get();
        return view('backend.pages.aboutus.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.aboutus.create');
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

        $data = AboutUs::create([
            'title'       => $request->title,
            'description' => $request->description
        ]);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/about_us/'), $image_new_name);
            $data->image = $image_new_name;
        }
        else{
            echo "Not ulpaddd";
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('aboutus.index')->with('message','Data added Successfully');
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
        $this->data['show'] = AboutUs::find($id);

        return view('backend.pages.aboutus.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = AboutUs::find($id);

        return view('backend.pages.aboutus.edit', $this->data);
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
        $data = AboutUs::find($id);

        if($request->file('image')){
            $data->title     = $request->title;
            $data->description     = $request->description;


            $file = $request->file('image');
            @unlink(public_path('backend/img/app_image/about_us/'.$data->image));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/about_us'), $file_name);
            $data->image = $file_name;

        }
        else{

            $data->title     = $request->title;
            $data->description     = $request->description;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('aboutus.index')->with('message','Data Updated Successfully');
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
        if($data = AboutUs::find($id)){

            @unlink(public_path('backend/img/app_image/about_us/'.$data->image));

            $data->delete();

            return redirect()->route('aboutus.index')->with('error','Data Deleted Successfully');
        }
    }
}
