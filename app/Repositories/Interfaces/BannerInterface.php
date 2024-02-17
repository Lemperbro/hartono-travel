<?php
namespace App\Repositories\Interfaces;

interface BannerInterface {
    public function getCarousel();
    public function getDetailImageCarousel($index);
    public function updateCarousel($data, $id);
}