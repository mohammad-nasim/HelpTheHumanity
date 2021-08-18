<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController2 extends Controller
{
    public function index(){
       return dd('test 2');
    }
}
