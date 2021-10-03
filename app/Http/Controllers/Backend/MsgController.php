<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class MsgController extends Controller
{
    public function store(Request $request)
    {

       // dd($request->all());

        $data = Contact::create([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name ,
            'email'             => $request->email ,
            'phone'             => $request->phone ,
            'message'           => $request->message
        ]);

        if($data->save()){

            return redirect()->route('webhome')->with('message','Your message has been sent. Thank you!');
        }
    }
}
