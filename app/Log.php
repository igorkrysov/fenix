<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Log extends Model
{
    //
    private static $logFileName = "log.txt";

    protected $fillable = ['ip', 'index', 'date'];

    public $timestamps = false;

    public static function aggregateLogFile() {
        if (Storage::exists(self::$logFileName)) {
            $contents = Storage::get(self::$logFileName);
            Storage::delete(self::$logFileName);
            $lines = explode("\n", $contents);
            
            $arr = [];
            foreach ($lines as $line) {
                $values = explode(';', $line);
                $arr[] = ['ip' => $values[0], 'index' => $values[1], 'date' => $values[2]];
            }
            var_dump($arr);
            self::insert($arr);
        }
        
    }

    public static function writeLog($ip, $index, $date) {
        Storage::disk('local')->append(self::$logFileName, "$ip;$index;$date");
    }
}
