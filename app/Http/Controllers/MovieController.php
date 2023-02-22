<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Services\TheMovieDb\MoviesService;

class MovieController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new MoviesService();
    }

    public function index(): View
    {
        $movies = $this->service->movies()->popular();

        return view("dashboard", [
            "movies" => $movies
        ]);
    }

    public function movie(int $movie): View
    {
        $movie = $this->service->movies()->movie($movie);

        // dd($movie);

        return view("movies.show", compact("movie"));
    }

    public function popular()
    {
        $movies = $this->service->movies()->popular();

        return view("movies.top_rated", compact("movies"));
    }

    public function topRated(): View
    {
        $movies = $this->service->movies()->topRated();

        return view("movies.top_rated", compact("movies"));
    }

    public function upcoming(): View
    {
        $movies = $this->service->movies()->upcoming();

        return view("movies.upcoming", compact("movies"));
    }
}
