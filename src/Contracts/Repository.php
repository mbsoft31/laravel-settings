<?php

declare(strict_types=1);

namespace Mbsoft31\LaravelSettings\Contracts;

use Illuminate\Support\Facades\Auth;

class Repository extends \Illuminate\Config\Repository
{
    public string $table_name = "settings";

    public string $model_type;

    public ?int $model_id = null;

    public function __construct(array $items = [])
    {
        $this->model_type = config("settings.model");

        $this->model_id = Auth::check() ? Auth::id() : null;

        parent::__construct($items);
    }
}
