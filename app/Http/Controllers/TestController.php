<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function tes($tes) {
        return view('test', ['test1' => $tes]);
    }
}
