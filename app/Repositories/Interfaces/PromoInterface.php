<?php
namespace App\Repositories\Interfaces;

interface PromoInterface{
    public function allPromo($paginate = 10);
    public function create($data);
    public function update($data, $oldData);
    public function delete($data);
}