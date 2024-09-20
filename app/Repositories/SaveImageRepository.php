<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;

class SaveImageRepository
{

    

    public function saveImageSingle($imageData, $lokasi)
    {

        $extension = $imageData->getClientOriginalExtension();
        $name = uniqid() . '-' . now()->timestamp .'.'. $extension;
        $imageData->move($lokasi, $name);
        return $name;

    }

    public function saveImageMultiple($imageData, $kategoriLokasi){
        $no = 0;
        $image = [];

        $lokasi = $kategoriLokasi;


        foreach ($imageData as $file) {
            //validasi 
            $images = $file->getClientOriginalExtension();
            if (!in_array($images, ['jpg', 'png', 'jpeg'])) {
                return redirect()->back()->with('imageError', 'The image you entered is invalid');
            }

            $extension = $file->getClientOriginalExtension();
            $name = hash('sha256', time()) . $no++ . '.' . $extension;
            $file->move($lokasi, $name);
            $image[] = $name;
        }
        return implode('|',$image);
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
    public function delete($imageName, $lokasi){
        $storage = public_path($lokasi.'/'.$imageName);
        if(File::exists($storage)){
            unlink($storage);
        }
    }

    
}