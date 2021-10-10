<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['donate_now_id','cause_id','bkash','rocket','nagad','reference','bank'];

    public function cause(){
        return $this->belongsTo(Cause::class);
    }

    public function donatenow(){
        return $this->belongsTo(DonateNow::class);
    }
}
