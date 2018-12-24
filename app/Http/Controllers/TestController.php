<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use Storage;

class TestController extends Controller
{
    //
    public function test(Request $request, $index) {
        $ip = $request->ip();
        $date = date('Y-m-d H:i:s');
        Log::writeLog($ip, $index, $date);        

        return view('test', ['ip' => $ip, 'index' => $index]);
    }
}
