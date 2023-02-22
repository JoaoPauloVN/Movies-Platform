<?php
namespace App\Http\Services\TheMovieDb\Entities;

class MoviePreview
{
    public bool $adult;
    public ?string $backdrop_path;
    public array $genre_ids;
    public int $id;
    public string $original_language;
    public string $original_title;
    public string $overview;
    public float $popularity;
    public ?string $poster_path;
    public string $release_date;
    public string $title;
    public bool $video;
    public float $vote_average;
    public int $vote_count;

    public function __construct(mixed $data)
    {
        $this->adult = data_get($data, "adult");
        $this->backdrop_path = data_get($data, "backdrop_path");
        $this->genre_ids = data_get($data, "genre_ids");
        $this->id = data_get($data, "id");
        $this->original_language = data_get($data, "original_language");
        $this->original_title = data_get($data, "original_title");
        $this->overview = data_get($data, "overview");
        $this->popularity = data_get($data, "popularity");
        $this->poster_path = data_get($data, "poster_path");
        $this->release_date = data_get($data, "release_date");
        $this->title = data_get($data, "title");
        $this->video = data_get($data, "video");
        $this->vote_average = data_get($data, "vote_average");
        $this->vote_count = data_get($data, "vote_count");
    }
}
