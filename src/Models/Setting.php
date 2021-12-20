<?php

declare(strict_types=1);

namespace Mbsoft31\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    public function metas()
    {
        return $this->hasMany(Meta::class);
    }
}
