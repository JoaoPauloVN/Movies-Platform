<?php

namespace App\Http\Controllers;

use App\Http\Services\TheMovieDb\MoviesService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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

    public function popular()
    {
        $movies = $this->service->movies()->popular();

        return view("movies.top_rated", [
            "movies" => $movies
        ]);
    }

    public function topRated(): View
    {
        $movies = $this->service->movies()->topRated();

        return view("movies.top_rated", [
            "movies" => $movies
        ]);
    }
}
