<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['alldata'] = Gallery::latest()->paginate(10);
        return view('backend.pages.gallery.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.gallery.create');
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

        $image = $request->file('image');

        foreach($image as $multi_image){
            $image_new_name = date('YmdHi').$multi_image->getClientOriginalName();
            $multi_image->move(public_path('backend/img/app_image/gallery'), $image_new_name);

            $upload = $image_new_name;

            Gallery::create([
                'images'   =>  $upload
            ]);
        }

        return redirect()->route('gallery.index')->with('message','Image Uploaded Successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($data = Gallery::find($id)){

            @unlink(public_path('backend/img/app_image/gallery/'.$data->images));

            $data->delete();

            return redirect()->route('gallery.index')->with('error','Data Deleted Successfully');
        }
    }
}
