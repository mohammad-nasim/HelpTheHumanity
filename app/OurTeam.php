<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $fillable = ['name','position','image','linkone','linktwo', 'linkthree'];
}
