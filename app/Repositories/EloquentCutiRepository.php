<?php

namespace App\Repositories;

use App\Models\Cuti;

class EloquentCutiRepository implements CutiRepositoryInterface
{
    public function create(array $data)
    {
        return Cuti::create($data);
    }

    public function getById($id)
    {
        return Cuti::findOrFail($id);
    }

}
