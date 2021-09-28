<?php

namespace App\Http\Controllers\Backend;

use App\News;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = News::all();
        return view('backend.pages.news.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.news.create');
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

        $data = News::create([
            'title'        => $request->title,
            'description'  => $request->description

        ]);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('backend/img/app_image/news'), $image_new_name);
            $data->image = $image_new_name;
        }
        else{
            echo "Not ulpaddd";
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('news.index')->with('message','Data added Successfully');
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
        $this->data['show'] = Event::find($id);

        return view('backend.pages.event.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = Event::find($id);

        return view('backend.pages.event.edit', $this->data);
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
        $data = Event::find($id);

        if($request->file('image')){

            $data->title           = $request->title;
            $data->date            = $request->date;
            $data->description     = $request->description;


            $file = $request->file('image');
            @unlink(public_path('backend/img/app_image/event/'.$data->image));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/event'), $file_name);
            $data->image = $file_name;

        }
        else{

            $data->title            = $request->title;
            $data->date             = $request->date;
            $data->description      = $request->description;
        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('event.index')->with('message','Data Updated Successfully');
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
        if($data = Event::find($id)){

            @unlink(public_path('backend/img/app_image/event/'.$data->image));

            $data->delete();

            return redirect()->route('event.index')->with('error','Data Deleted Successfully');
        }
    }
}
