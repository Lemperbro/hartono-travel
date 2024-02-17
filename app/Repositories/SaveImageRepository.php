<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;

class SaveImageRepository
{

    

    public function saveImageSingle($imageData, $lokasi)
    {

        $extension = $imageData->getClientOriginalExtension();
        $name = hash('sha256', time()) . '.' . $extension;
        $imageData->move($lokasi, $name);
        return $name;

    }

    public function updateImageSingle($imageData, $lokasi, $oldImage)
    {



        $extension = $imageData->getClientOriginalExtension();
        $name = hash('sha256', time()) . '.' . $extension;
        $up = $imageData->move($lokasi, $name);

        if ($up) {
            $storage = public_path($lokasi . '/' . $oldImage);
            if (File::exists($storage)) {
                unlink($storage);
            }
        }
        return $name;

    }
}