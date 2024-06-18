<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilePondCreateRequest;
use Illuminate\Support\Facades\File;
use App\Repositories\SaveImageRepository;

class FilePondController extends Controller
{
    private $SaveImageRepository,$lokasi = 'TiketKapalImage';

    public function __construct(){
        $this->SaveImageRepository = new SaveImageRepository;        
    }

    public function postImage(FilePondCreateRequest $request, $folder){
        $image = $this->SaveImageRepository->saveImageSingle($request->imageName, $folder);
        return $image;
    }

    public function deleteImage(Request $request, $folder){
        $fileName = $request->input('imageName');
        $filePath = public_path("$folder/$fileName");
    
        if (File::exists($filePath)) {
            File::delete($filePath);
            return response()->json(['message' => 'File deleted successfully']);
        }

        return response()->json(['error' => 'File not found'], 404);
    }
}
