<?php

namespace App\Http\Controllers\tiket_kapal;

use App\Models\TiketKapal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Kapal\KapalCreateRequest;
use App\Http\Requests\Kapal\KapalUpdateRequest;
use App\Repositories\Interfaces\TiketKapalInterface;
use Carbon\Carbon;

class KapalController extends Controller
{
    private $TiketKapalInterface;

    public function __construct(TiketKapalInterface $TiketKapalInterface){
        $this->TiketKapalInterface = $TiketKapalInterface;
    }
    

    public function detail(TiketKapal $id)
    {
        $data = $this->TiketKapalInterface->show($id);
        $tiketKapal = $this->TiketKapalInterface->getAll($data->id);
        return view('client.tiket_kapal.detail', compact('data','tiketKapal'));
    }


    public function adminIndex()
    {
        $headerTitle = 'Kelola Tiket Kapal';
        $data = $this->TiketKapalInterface->getAllWithFilter(20);
        $countTiketHabis = $this->TiketKapalInterface->countTiketHabis();
        $appendsPaginate = $this->TiketKapalInterface->appendsPaginate();
        return view('admin.tiket_kapal.index', compact('headerTitle','data', 'countTiketHabis', 'appendsPaginate'));
    }
    public function redirecToWa(TiketKapal $id){
        $link = route('kapal.detail', ['id' => $id->slug]);
        $message = "Pemesanan Tiket Kapal {$id->title}, Mohon isi data yang kosong di bawah ini\n"
        . "Nama: ,\n"
        . "Alamat: ,\n"
        . "Keberangkatan: {$id->keberangkatan},\n"
        . "Tujuan: {$id->tujuan},\n"
        . "Waktu Keberangkatan: {$id->waktu_keberangkatan},\n"
        . "Jumlah Tiket: ,\n"
        . "Link asal informasi tiket: {$link}\n"
        ;

        return redirectToWhatsApp($message);
    }
    public function create()
    {
        $headerTitle = 'Tambah Data Tiket';
        return view('admin.tiket_kapal.create', compact('headerTitle'));
    }
    public function postCreate(KapalCreateRequest $request){
        $up = $this->TiketKapalInterface->create($request);
        return $up;
    }
    public function edit(TiketKapal $id){
        $data = $this->TiketKapalInterface->show($id);
        $headerTitle = 'Update Data Tiket';
        $appUrl = config('app.url');
        return view('admin.tiket_kapal.update', compact('data', 'headerTitle', 'appUrl'));
    }

    public function update(KapalUpdateRequest $request, TiketKapal $id){
        $up = $this->TiketKapalInterface->update($request,$id);
        return $up;
    }

    public function toTiketHabis(TiketKapal $id){
        $data = $this->TiketKapalInterface->toTiketHabis($id);
        return $data;
    }
    public function delete(TiketKapal $id){
        return $this->TiketKapalInterface->delete($id);
    }
}
