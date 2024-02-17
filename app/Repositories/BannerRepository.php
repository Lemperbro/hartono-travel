<?php
namespace App\Repositories;

use Exception;
use Illuminate\Support\Facades\File;
use App\Repositories\SaveImageRepository;
use App\Repositories\Interfaces\BannerInterface;

class BannerRepository implements BannerInterface
{

    private $SaveImageRepository;

    public function __construct()
    {
        $this->SaveImageRepository = new SaveImageRepository();
    }

    public function getCarousel()
    {
        $carouselFile = public_path('carousel/carousel.json');
        $carousel = json_decode(file_get_contents($carouselFile), true);
        return $carousel;
    }

    public function getDetailImageCarousel($index)
    {
        $carouselFile = public_path('carousel/carousel.json');
        $carousel = json_decode(file_get_contents($carouselFile), true);
        if (!array_key_exists($index, $carousel['image'])) {
            // Redirect jika indeks tidak ada
            return redirect()->back()->with('toast_error', 'Item Not Found.');
        }
        return $item = $carousel['image'][$index];
    }

    public function updateCarousel($data, $id)
    {
        try {

            $data->validate([
                'image' => 'max:2048|mimes:png,jpg,jpeg'
            ]);

            $carouselFile = public_path('carousel/carousel.json');
            $carousel = json_decode(file_get_contents($carouselFile), true);
            $index = $id;
            if (!array_key_exists($index, $carousel['image'])) {
                // Redirect jika indeks tidak ada
                return redirect('/carousels')->with('toast_error', 'Item Not Found.');
            }
            $img_old = $carousel['image'][$index]['image'];

            if ($data->hasFile('image')) {
                $img = $this->SaveImageRepository->updateImageSingle($data->image, 'carousel', $img_old);
            } else {
                $img = $img_old;
            }

            $carousel['image'][$index]['image'] = $img;

            $proses = File::put($carouselFile, json_encode($carousel, JSON_PRETTY_PRINT));

            return redirect(route('banner'))->with('toast_success', 'Berhasil mengubah data');
        } catch (Exception $e) {
            return redirect()->back()->with('toast_error', 'Tidak berhasil mengubah data');
        }


    }
}