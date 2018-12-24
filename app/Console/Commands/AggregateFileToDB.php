<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Log;
use Storage;

class AggregateFileToDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:FileToDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load log file to db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        Log::aggregateLogFile();

    }
}
