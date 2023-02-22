<?php
namespace App\Http\Services\TheMovieDb\Endpoints;

use App\Http\Services\TheMovieDb\Entities\Movie;
use App\Http\Services\TheMovieDb\Entities\MoviePreview;
use App\Http\Services\TheMovieDb\MoviesService;
use Illuminate\Support\Collection;

class Movies extends BaseEndpoints
{
    private MoviesService $service;

    public function __construct()
    {
        $this->service = new MoviesService();
    }

    private function get(string $url, string $data = null): mixed
    {
        return $this->service
                    ->api
                    ->get("https://api.themoviedb.org/3/movie/" . $url . "?api_key={api_key}")
                    ->json($data);
    }

    public function movie(int $id): Movie
    {
        $response = $this->get($id);

        return new Movie($response);
    }

    public function popular(): Collection
    {
        $response = $this->get("popular", "results");

        dd($response);

        return $this->transform($response, MoviePreview::class);
    }

    public function topRated(): Collection
    {
        $response = $this->get("top_rated", "results");

        return $this->transform($response, MoviePreview::class);
    }

    public function upcoming(): Collection
    {
        $response = $this->get("upcoming", "results");

        return $this->transform($response, MoviePreview::class);
    }
}
