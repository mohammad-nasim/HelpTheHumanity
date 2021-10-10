<?php

namespace App\Http\Controllers\Backend;

use App\Cause;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = Cause::all();
        return view('backend.pages.cause.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.cause.create');
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

        $data = Cause::create([
            'cause'          => $request->cause,
            'title'          => $request->title,
            'description'    => $request->description,
            'raised'         => $request->raised,
            'target'         => $request->target
        ]);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/cause'), $image_new_name);
            $data->image = $image_new_name;
        }
        else{
            echo "Not ulpaddd";
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('cause.index')->with('message','Data added Successfully');
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
        $this->data['show'] = Cause::find($id);

        return view('backend.pages.cause.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = Cause::find($id);

        return view('backend.pages.cause.edit', $this->data);
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
        $data = Cause::find($id);

        if($request->file('image')){

            $data->cause             = $request->cause;
            $data->title             = $request->title;
            $data->description       = $request->description;
            $data->raised            = $request->raised;
            $data->target            = $request->target;


            $file = $request->file('image');
            @unlink(public_path('backend/img/app_image/cause/'.$data->image));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/cause'), $file_name);
            $data->image = $file_name;

        }
        else{

            $data->cause             = $request->cause;
            $data->title             = $request->title;
            $data->description       = $request->description;
            $data->raised            = $request->raised;
            $data->target            = $request->target;

        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('cause.index')->with('message','Data Updated Successfully');
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
        if($data = Cause::find($id)){

            @unlink(public_path('backend/img/app_image/cause/'.$data->image));

            $data->delete();

            return redirect()->route('cause.index')->with('error','Data Deleted Successfully');
        }
    }
}
