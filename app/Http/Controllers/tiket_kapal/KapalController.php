<?php

namespace App\Http\Controllers\tiket_kapal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KapalController extends Controller
{
    //

    public function detail(){
        return view('client.tiket_kapal.detail');
    }

    public function adminIndex(){
        $headerTitle = 'Kelola Tiket Kapal';
        return view('admin.tiket_kapal.index', compact('headerTitle'));
    }
}
