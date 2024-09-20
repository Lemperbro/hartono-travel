<?php
namespace App\Repositories;

use App\Models\Galeri;
use Illuminate\Support\Facades\File;
use App\Repositories\SaveImageRepository;
use App\Repositories\Interfaces\GaleriInterface;

class GaleriRepository implements GaleriInterface
{
    private $galeriModel;
    private $saveImage;
    public function __construct()
    {
        $this->galeriModel = new Galeri;
        $this->saveImage = new SaveImageRepository;
    }
    public function getAll($paginate)
    {
        $data = $this->galeriModel->paginate($paginate);
        return $data;
    }
    public function create($data)
    {
        $create = $this->galeriModel->create([
            'image' => $data->image,
            'title' => $data->title
        ]);
        if ($create) {
            return true;
        }
        return false;
    }
    public function update($data, $oldData)
    {
        if ($data->image !== $oldData->image) {
            $image = $data->image;
            $storage = public_path('galeri/' . $oldData->image);
            if (File::exists($storage)) {
                unlink($storage);
            }
        } else {
            $image = $oldData->image;
        }
        $update = $oldData->update([
            'image' => $image,
            'title' => $data->title
        ]);
        if ($update) {
            return true;
        }
        return false;
    }
}