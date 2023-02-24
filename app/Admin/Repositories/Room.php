<?php

namespace App\Admin\Repositories;

use App\Models\Room as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Room extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
