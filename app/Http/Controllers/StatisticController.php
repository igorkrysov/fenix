<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use Storage;

class StatisticController extends Controller
{
    //
    public function listPoint() {
        $points = Log::groupBy('index')->get();
        return view('statistic.list-points', ['points' => $points]);
    }

    public function listIP() {
        $ip = Log::groupBy('ip')->get();
        return view('statistic.list-ip', ['ip' => $ip]);
    }

    public function IPInfo($ip) {
        $points = Log::where('ip', $ip)->selectRaw('*, UNIX_TIMESTAMP(date) DIV 60 as group_date, count(*) as count')->groupBy('index')->groupBy('group_date')->get();
        return view('statistic.statistic-ip', ['points' => $points, 'ip' => $ip]);
    }

    public function pointInfo($index) {
        $ip = Log::where('index', $index)->selectRaw('*, UNIX_TIMESTAMP(date) DIV 60 as group_date, count(*) as count')->groupBy('ip')->groupBy('group_date')->get();
        // dd($points);
        return view('statistic.statistic-point', ['ip' => $ip, 'index' => $index]);
    }
    
    public function addStatistic(Request $request) {
        $request->validate([
            'index' => 'required|integer'
        ]);
        $ip = $request->ip();
        $index =  $request->index;
        $date = date('Y-m-d H:i:s');
        Log::writeLog($ip, $index, $date);

        if ($request->json()) {
            return response()->json(['status' => true]);
        }

        return redirect()->back();
    }
}
