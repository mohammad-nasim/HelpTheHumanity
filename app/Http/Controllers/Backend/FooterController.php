<?php

namespace App\Http\Controllers\Backend;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     * AdditionalContactController
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = Footer::all();
        return view('backend.pages.footer.index', $this->data);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['show'] = Footer::find($id);

        return view('backend.pages.footer.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = Footer::find($id);

        return view('backend.pages.footer.edit', $this->data);
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

        $data = Footer::find($id);

            $data->footer_text     = $request->footer_text;
            $data->link_one        = $request->link_one;
            $data->link_two        = $request->link_two;
            $data->link_three      = $request->link_three;
            $data->link_four       = $request->link_four;


        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('footer.index')->with('message','Data Updated Successfully');
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
