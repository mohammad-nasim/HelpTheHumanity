<?php

namespace App\Http\Controllers\Backend;

use App\AdditionalOurTeam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdditionalOurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     * PartnerController
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = AdditionalOurTeam::all();
        return view('backend.pages.additionalourteam.index', $this->data);
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
        $this->data['show'] = AdditionalOurTeam::find($id);

        return view('backend.pages.additionalourteam.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = AdditionalOurTeam::find($id);

        return view('backend.pages.additionalourteam.edit', $this->data);
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
        $data = AdditionalOurTeam::find($id);

        if($request->file('image')){

            $data->title     = $request->title;

            $file = $request->file('image');

            @unlink(public_path('backend/img/app_image/add_our_team/'.$data->cover_image));

            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/add_our_team'), $file_name);

            $data->cover_image = $file_name;

        }
        else{
            $data->title     = $request->title;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('additionalourteam.index')->with('message','Data Updated Successfully');
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
