<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonateNow extends Model
{
    protected $fillable = ['cause','title','image','description'];

    public function paymentmethod(){
        return $this->hasOne(PaymentMethod::class, 'donate_now_id');
    }


}
