<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){

        $this->data['alldata'] = User::all();
        return view('backend.pages.profile.index', $this->data);
    }

    //Create Admins
    public function create()
    {

        return view('backend.pages.profile.create', $this->data);
    }

    //Store Admin Data
    public function store(Request $request)
    {
        //dd($request->all());

        $data = User::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'role'        => $request->role,
            'password'    => Hash::make($request->password)

        ]);


        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('profile.index')->with('message','You have created an Admin');
        }
    }

    //Edit Page
    public function edit($id)
    {
        $this->data['show'] = User::find($id);
        return view('backend.pages.profile.edit', $this->data);
    }

    //Update Data
    public function update(Request $request, $id)
    {

        //dd($request->all());

        $data = User::find($id);

        if($request->file('image')){

            $data->name              = $request->name;
            $data->email             = $request->email;
            $data->role              = $request->role;
            $data->password          = Hash::make($request->password);

            $file = $request->file('image');
            @unlink(public_path('backend/img/app_image/profile_pictures/'.$data->image));
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/img/app_image/profile_pictures/'), $file_name);
            $data->image = $file_name;

        }
        else{

            $data->name           = $request->name;
            $data->email          = $request->email;
            $data->role           = $request->role;
            $data->password       = Hash::make($request->password);

        }

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('profile.index')->with('message','Data Updated Successfully');
        }
    }

    //Delete Data
    public function delete($id)
    {
        if($data = User::find($id)){

            @unlink(public_path('backend/img/app_image/profile_pictures/'.$data->image));

            $data->delete();

            return redirect()->route('profile.index')->with('error','Data Deleted Successfully');
        }
    }
}
