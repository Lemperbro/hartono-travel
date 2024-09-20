<?php
namespace App\Repositories\Interfaces;


interface TiketKapalInterface{
    public function create($data);
    public function getAll($notIn = null, $paginate = 15);
    public function getAllWithFilter($paginate = 15);
    public function show($data);
    public function update($data,$id);
    public function updateViews($data);
    public function toTiketHabis($data);
    public function delete($data);
    public function countTiketHabis();
    public function appendsPaginate();
}