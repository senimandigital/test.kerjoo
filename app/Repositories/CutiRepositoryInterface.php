<?php

namespace App\Repositories;

interface CutiRepositoryInterface
{
    public function create(array $data);

    public function getById($id);
}
