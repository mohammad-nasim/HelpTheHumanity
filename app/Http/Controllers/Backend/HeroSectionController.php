<?php

namespace App\Http\Controllers\Backend;

use App\HeroSection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = HeroSection::all();
        return view('backend.pages.herosection.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.herosection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'unique:hero_sections,title'
        // ]);

        //dd($request->all());

        $data = HeroSection::create([
            'title'    => $request->title,
            'slogan_1' => $request->slogan_1,
            'slogan_2' => $request->slogan_2,
            'image_1'  => $request->image_1,
            'image_2'  => $request->image_2
        ]);

        if($request->has('image_1')){
            $image = $request->image_1;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/hero_section'), $image_new_name);
            $data->image_1 = $image_new_name;
        }

        if($request->has('image_2')){
            $image = $request->image_2;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/hero_section'), $image_new_name);
            $data->image_2 = $image_new_name;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('herosection.index')->with('message','Data added Successfully');
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
        $this->data['show'] = HeroSection::find($id);

        return view('backend.pages.herosection.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = Herosection::find($id);

        return view('backend.pages.herosection.edit', $this->data);

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

        $data = HeroSection::find($id);

        if($request->file('image_1') && $request->file('image_2')){

            $data->title        = $request->title;
            $data->slogan_1     = $request->slogan_1;
            $data->slogan_2     = $request->slogan_2;


            $file = $request->file('image_1');
            @unlink(public_path('backend/img/app_image//hero_section'.$data->image_1));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/hero_section'), $file_name);
            $data->image_1 = $file_name;

            $file = $request->file('image_2');
            @unlink(public_path('backend/img/app_image//hero_section'.$data->image_2));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/hero_section'), $file_name);
            $data->image_2 = $file_name;

        }
        elseif($request->file('image_1')){

            $data->title        = $request->title;
            $data->slogan_1     = $request->slogan_1;
            $data->slogan_2     = $request->slogan_2;

            $file = $request->file('image_1');
            @unlink(public_path('backend/img/app_image//hero_section'.$data->image_1));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/hero_section'), $file_name);
            $data->image_1 = $file_name;

        }
        elseif($request->file('image_2')){

            $data->title        = $request->title;
            $data->slogan_1     = $request->slogan_1;
            $data->slogan_2     = $request->slogan_2;

            $file = $request->file('image_2');
            @unlink(public_path('backend/img/app_image//hero_section'.$data->image_2));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/hero_section'), $file_name);
            $data->image_2 = $file_name;
        }
        else{
            $data->title        = $request->title;
            $data->slogan_1     = $request->slogan_1;
            $data->slogan_2     = $request->slogan_2;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('herosection.index')->with('message','Data Updated Successfully');
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
        if(HeroSection::find($id)->delete()){
            return redirect()->route('herosection.index')->with('error','Data Deleted Successfully');
        }
    }
}
