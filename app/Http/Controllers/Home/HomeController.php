<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BannerRepository;
use App\Repositories\Interfaces\GaleriInterface;
use App\Repositories\Interfaces\PromoInterface;
use App\Repositories\Interfaces\TiketKapalInterface;

class HomeController extends Controller
{

    private $BannerRepository, $TiketKapalInterface, $GaleriInterface, $promoInterface;

    public function __construct(TiketKapalInterface $TiketKapalInterface, GaleriInterface $galeriInterface, PromoInterface $promoInterface)
    {
        $this->BannerRepository = new BannerRepository();
        $this->TiketKapalInterface = $TiketKapalInterface;
        $this->GaleriInterface = $galeriInterface;
        $this->promoInterface = $promoInterface;
    }

    public function index()
    {
        $bannersImage = $this->BannerRepository->getCarousel();
        $tiketKapal = $this->TiketKapalInterface->getAll();
        $galeri = $this->GaleriInterface->getAll(15);
        $promo = $this->promoInterface->allPromo();
        return view("client.home.index", compact('bannersImage', 'tiketKapal', 'galeri', 'promo'));
    }
}
