<?php
namespace App\Repositories\Interfaces;

interface GaleriInterface
{
    public function getAll($paginate);
    public function create($data);
    public function update($data, $oldData);
}