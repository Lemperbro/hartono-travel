<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BannerRepository;

class HomeController extends Controller
{
    
    private $BannerRepository;

    public function __construct()
    {
        $this->BannerRepository = new BannerRepository();
    }

    public function index(){
        $bannersImage = $this->BannerRepository->getCarousel();
        return view("client.home.index", compact('bannersImage'));
    }
}
