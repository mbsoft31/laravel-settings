<?php

declare(strict_types=1);

namespace Mbsoft31\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $guarded = [];

    protected $casts = [
        "value" => "json",
    ];
}
