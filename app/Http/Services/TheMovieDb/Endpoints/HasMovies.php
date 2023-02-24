<?php
namespace App\Http\Services\TheMovieDb\Endpoints;

trait HasMovies
{
    public function movies(int $page = 1): Movies
    {
        return new Movies($page);
    }
}
