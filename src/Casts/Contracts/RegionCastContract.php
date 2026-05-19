<?php

namespace TarfinLabs\LaravelSpatial\Casts\Contracts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes;
use Illuminate\Database\Query\Expression;
use TarfinLabs\LaravelSpatial\Types\Polygon;

interface RegionCastContract extends CastsAttributes, SerializesCastableAttributes
{
    public function get($model, string $key, $value, array $attributes): ?Polygon;

    public function set($model, string $key, $value, array $attributes): Expression;
}
