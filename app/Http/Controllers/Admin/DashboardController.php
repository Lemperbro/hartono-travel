<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BannerRepository;

class DashboardController extends Controller
{


    public function index()
    {

        return view("admin.dashboard.index");
    }
}
