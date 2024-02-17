<?php
namespace App\Repositories\Interfaces;

interface PenjualanInterface{
    public function getAll($paginate);
    public function tambah($data);
    public function appendsPaginate();
    public function show($data);
    public function update($data, $id);
    public function countAll();
    public function countWhereYear();
    public function countWhereMonth();
    public function countNotPay();
}