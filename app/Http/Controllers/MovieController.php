<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Services\TheMovieDb\MoviesService;

class MovieController extends Controller
{
    private $service;
    private $page;

    public function __construct(Request $request)
    {
        $this->page = $request->query("page", 1);
        $this->service = new MoviesService();
    }

    public function movie(int $movie): View
    {
        $movie = $this->service->movies()->movie($movie);

        return view("movies.movie", compact("movie"));
    }

    public function popular()
    {
        $movies = $this->service->movies($this->page)->popular();

        return view("movies.popular", compact("movies"));
    }

    public function topRated(): View
    {
        $movies = $this->service->movies($this->page)->topRated();

        return view("movies.top_rated", compact("movies"));
    }

    public function upcoming(): View
    {
        $movies = $this->service->movies($this->page)->upcoming();

        return view("movies.upcoming", compact("movies"));
    }
}
