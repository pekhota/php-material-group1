<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DebugDBConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:debug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        \Log::warning("hello");
//        echo "hello world from console command";
//        dd(config('database.default'));
        return Command::SUCCESS;
    }
}
