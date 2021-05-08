<?php

namespace App\Console\Commands;

use App\Jobs\QueueJob;
use Illuminate\Console\Command;

class TriggerEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trigger';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Trigger an event';

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
        QueueJob::dispatch();
    }
}
