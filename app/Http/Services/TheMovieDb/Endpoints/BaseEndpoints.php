<?php
namespace App\Http\Services\TheMovieDb\Endpoints;

use Illuminate\Support\Collection;

class BaseEndpoints
{
    public function transform($data, $entity): Collection
    {
        return collect($data)->map(fn($el) => new $entity($el));
    }
}
