<?php

namespace App\Http\Controllers\Backend;

use App\PaymentMethod;
use App\Cause;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $this->data['alldata'] = PaymentMethod::latest()->get();

        return view('backend.pages.p_method.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['cause'] = Cause::CauseForSelect();
        return view('backend.pages.p_method.create', $this->data);
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

        $data = PaymentMethod::create([
            'cause_id'          => $request->cause,
            'bkash'             => $request->bkash,
            'rocket'            => $request->rocket,
            'nagad'             => $request->nagad,
            'reference'         => $request->reference,
            'bank'              => $request->bank
        ]);

        if($data->save()){
            //Session::flash('Success', 'Data Insert Successful');

            return redirect()->route('paymentmethod.index')->with('message','Data added Successfully');
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
        $this->data['show'] = PaymentMethod::find($id);

        return view('backend.pages.p_method.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['show'] = PaymentMethod::find($id);
        $this->data['cause'] = Cause::CauseForSelect();

        return view('backend.pages.p_method.edit', $this->data);
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
        $data = PaymentMethod::find($id);

            $data->cause_id             = $request->cause;
            $data->bkash                = $request->bkash;
            $data->rocket               = $request->rocket;
            $data->nagad                = $request->nagad;
            $data->reference            = $request->reference;
            $data->bank                 = $request->bank;


        if($data->save()){

            return redirect()->route('paymentmethod.index')->with('message','Data Updated Successfully');
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
        if($data = PaymentMethod::find($id)){

            $data->delete();

            return redirect()->route('paymentmethod.index')->with('error','Data Deleted Successfully');
        }
    }
}
