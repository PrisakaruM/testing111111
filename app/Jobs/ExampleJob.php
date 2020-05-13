<?php

namespace App\Jobs;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExampleJob implements ShouldQueue
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        dd('here');
    }
}
