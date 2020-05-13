<?php

namespace App\Http\Controllers;
use App\Jobs\ExampleJob;
use App\Http\Controllers\Queue;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        return $this->dispatch(new ExampleJob());
    }

    public function test_queue()
    {
        exec('php artisan queue:work');
    }
}
