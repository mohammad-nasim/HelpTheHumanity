<?php

namespace App\Http\Controllers\Backend;

use App\OurTeam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = OurTeam::all();
        return view('backend.pages.ourteam.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.ourteam.create');
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

         $data = OurTeam::create([
            'name'           => $request->name,
            'position'       => $request->position,
            'linkone'        => $request->linkone,
            'linktwo'        => $request->linktwo,
            'linkthree'      => $request->linkthree
        ]);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/our_team'), $image_new_name);

            $data->image = $image_new_name;
        }
        else{
            echo "Not ulpaddd";
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('ourteam.index')->with('message','Data added Successfully');
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
        $this->data['show'] = OurTeam::find($id);

        return view('backend.pages.ourteam.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = OurTeam::find($id);

        return view('backend.pages.ourteam.edit', $this->data);
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
        $data = OurTeam::find($id);

        if($request->file('image')){

            $data->name          = $request->name;
            $data->position      = $request->position;
            $data->linkone       = $request->linkone;
            $data->linktwo       = $request->linktwo;
            $data->linkthree     = $request->linkthree;

            $file = $request->file('image');

            @unlink(public_path('backend/img/app_image/our_team/'.$data->image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/our_team'), $file_name);
            $data->image = $file_name;

        }
        else{

            $data->name          = $request->name;
            $data->position      = $request->position;
            $data->linkone       = $request->linkone;
            $data->linktwo       = $request->linktwo;
            $data->linkthree     = $request->linkthree;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('ourteam.index')->with('message','Data Updated Successfully');
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

        if($data = OurTeam::find($id)){

            @unlink(public_path('backend/img/app_image/our_team/'.$data->image));

            $data->delete();

            return redirect()->route('ourteam.index')->with('error','Data Deleted Successfully');
        }
    }
}
