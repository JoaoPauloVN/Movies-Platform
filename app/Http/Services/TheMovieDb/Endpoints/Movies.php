<?php
namespace App\Http\Services\TheMovieDb\Endpoints;

use App\Http\Services\TheMovieDb\Entities\Movie;
use App\Http\Services\TheMovieDb\MoviesService;
use Illuminate\Support\Collection;

class Movies extends BaseEndpoints
{
    private MoviesService $service;

    public function __construct()
    {
        $this->service = new MoviesService();
    }

    public function popular(): Collection
    {
        $response = $this->service
                        ->api
                        ->get("https://api.themoviedb.org/3/movie/popular?api_key={api_key}")
                        ->json("results");

        return $this->transform($response, Movie::class);
    }

    public function topRated(): Collection
    {
        $response = $this->service
                        ->api
                        ->get("https://api.themoviedb.org/3/movie/top_rated?api_key={api_key}")
                        ->json("results");

        return $this->transform($response, Movie::class);
    }
}
