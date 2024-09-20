<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\BannerInterface;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private $BannerInteface;
    public function __construct(BannerInterface $BannerInterface)
    {
        $this->BannerInteface = $BannerInterface;
    }

    public function index()
    {
        $data = $this->BannerInteface->getCarousel();
        return view("admin.manage_banner.index", compact('data'));
    }

    public function edit($id){
        $data = $this->BannerInteface->getDetailImageCarousel($id);
        return view('admin.manage_banner.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = $this->BannerInteface->updateCarousel($request, $id);
        return $data;
    }
}
