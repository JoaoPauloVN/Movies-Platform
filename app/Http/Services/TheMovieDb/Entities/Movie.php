<?php
namespace App\Http\Services\TheMovieDb\Entities;

use Illuminate\Support\Collection;

class Movie
{
    public bool $adult;
    public ?string $backdrop_path;
    public ?array $belongs_to_collection;
    public int $budget;
    public array $genres;
    public ?string $homepage;
    public int $id;
    public ?string $imdb_id;
    public string $original_language;
    public string $original_title;
    public string $overview;
    public float $popularity;
    public ?string $poster_path;
    public array $production_companies;
    public array $production_countries;
    public string $release_date;
    public int $revenue;
    public ?int $runtime;
    public array $spoken_languages;
    public string $status;
    public ?string $tagline;
    public string $title;
    public bool $video;
    public float $vote_average;
    public int $vote_count;
    public ?Collection $recomendations;
    public ?array $trailer;

    public function __construct(mixed $data)
    {
        $this->adult = data_get($data, "adult");
        $this->backdrop_path = data_get($data, "backdrop_path");
        $this->belongs_to_collection = data_get($data, "belongs_to_collection");
        $this->budget = data_get($data, "budget");
        $this->genres = data_get($data, "genres");
        $this->homepage = data_get($data, "homepage");
        $this->id = data_get($data, "id");
        $this->imdb_id = data_get($data, "imdb_id");
        $this->original_language = data_get($data, "original_language");
        $this->original_title = data_get($data, "original_title");
        $this->overview = data_get($data, "overview");
        $this->popularity = data_get($data, "popularity");
        $this->poster_path = data_get($data, "poster_path");
        $this->production_companies = data_get($data, "production_companies");
        $this->production_countries = data_get($data, "production_countries");
        $this->release_date = data_get($data, "release_date");
        $this->revenue = data_get($data, "revenue");
        $this->runtime = data_get($data, "runtime");
        $this->spoken_languages = data_get($data, "spoken_languages");
        $this->status = data_get($data, "status");
        $this->tagline = data_get($data, "tagline");
        $this->title = data_get($data, "title");
        $this->video = data_get($data, "video");
        $this->vote_average = data_get($data, "vote_average");
        $this->vote_count = data_get($data, "vote_count");
    }
}
