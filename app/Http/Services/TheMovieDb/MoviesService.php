<?php
namespace App\Http\Services\TheMovieDb;

use App\Http\Services\TheMovieDb\Endpoints\HasMovies;
use Illuminate\Support\Facades\Http;

class MoviesService
{
    use HasMovies;

    public $api;

    public function __construct()
    {
        $this->api = Http::withUrlParameters([
            "api_key" => "1a3584180efa1919071b26e8810b91de"
        ]);
    }
}
