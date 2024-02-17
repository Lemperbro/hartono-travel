<?php

namespace App\Http\Controllers;

use App\Http\Requests\CariJadwalPesawatRequest;
use App\Repositories\Interfaces\PesawatInterface;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    //

    private $pesawatInterface;

    public function __construct(PesawatInterface $pesawatInterfaces)
    {
        $this->pesawatInterface = $pesawatInterfaces;
    }

    public function cariJadwal(CariJadwalPesawatRequest $request)
    {
        $data = $this->pesawatInterface->CariJadwal($request);
        return $data;
    }
}
