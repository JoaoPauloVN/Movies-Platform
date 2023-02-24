<?php
namespace App\Http\Services\TheMovieDb\Endpoints;

use App\Http\Services\TheMovieDb\Entities\Movie;
use App\Http\Services\TheMovieDb\Entities\MoviePreview;
use App\Http\Services\TheMovieDb\MoviesService;
use Illuminate\Support\Collection;
use PhpParser\Node\Stmt\Foreach_;

class Movies extends BaseEndpoints
{
    private MoviesService $service;
    private $page;

    public function __construct($page = 1)
    {
        $this->page = $page;
        $this->service = new MoviesService();
    }

    private function get(string $url, string $data = null, int $page = 1): mixed
    {
        return $this->service
                    ->api
                    ->get("https://api.themoviedb.org/3/movie/$url?api_key={api_key}&page=$page")
                    ->json($data);
    }

    public function movie(int $id): Movie
    {
        $movie = new Movie($this->get($id, page: $this->page));

        $recomendations = $this->get("$id/recommendations", "results");
        $videos = $this->get("$id/videos", "results");

        $movie->recomendations = $this->transform($recomendations, MoviePreview::class);
        foreach($videos as $video) {
            if($video['type'] == "Trailer") {
                $movie->trailer = $video;
                break;
            }
        }

        return $movie;
    }

    public function popular(): Collection
    {
        $response = $this->get("popular", "results", $this->page);

        return $this->transform($response, MoviePreview::class);
    }

    public function topRated(): Collection
    {
        $response = $this->get("top_rated", "results", $this->page);

        return $this->transform($response, MoviePreview::class);
    }

    public function upcoming(): Collection
    {
        $response = $this->get("upcoming", "results", $this->page);

        return $this->transform($response, MoviePreview::class);
    }
}
