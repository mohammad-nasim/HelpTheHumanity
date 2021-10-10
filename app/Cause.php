<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $fillable = ['cause','title','image','description', 'raised','target'];

    public function paymentmethod(){
        return $this->hasOne(PaymentMethod::class, 'cause_id');
    }

    public static function CauseForSelect(){

        $all_cause = Cause::all();
        $arr = [];

        foreach($all_cause as $data){
            $arr[$data->id] = $data->cause;
        }

        return $arr;
    }
}
