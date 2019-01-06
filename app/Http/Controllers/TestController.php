<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(Request $request, $index) {     

        return view('test', ['ip' => $request->ip(), 'index' => $index]);
    }
}
