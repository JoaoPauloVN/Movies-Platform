<?php

namespace App\Console\Commands;

use App\Http\Services\TheMovieDb\MoviesService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Playground';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $service = new MoviesService();
        dd($service->movies()->popular());
    }
}
