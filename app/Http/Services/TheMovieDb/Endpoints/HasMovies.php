<?php
namespace App\Http\Services\TheMovieDb\Endpoints;

trait HasMovies
{
    public function movies(): Movies
    {
        return new Movies();
    }
}
