<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = ['footer_text','link_one','link_two','link_three', 'link_four'];
}
