<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExportController;
use App\Repositories\Interfaces\PenjualanInterface;
use App\Http\Resources\Penjualan\PenjualanAllResource;
use App\Http\Requests\Penjualan\CreatePenjualanRequest;
use App\Http\Requests\Penjualan\UpdatePenjualanRequest;

class PenjualanController extends Controller
{
    //
    private $PenjualanInterface, $export;

    public function __construct(PenjualanInterface $PenjualanInterface)
    {
        $this->PenjualanInterface = $PenjualanInterface;
        $this->export = new ExportController();

    }

    public function index()
    {
        $tahunSekarang = Carbon::now()->format('Y');
        $bulanSekarang = Carbon::now()->locale('id')->isoFormat('MMMM');
        $bulan = config('services.bulan');
        $headerTitle = 'Data Transaksi';
        $data = $this->PenjualanInterface->getAll(20);
        $appendsPaginate = $this->PenjualanInterface->appendsPaginate();
        $countAll = $this->PenjualanInterface->countAll();
        $countWhereYear = $this->PenjualanInterface->countWhereYear();
        $countWhereMonth = $this->PenjualanInterface->countWhereMonth();
        $countNotPay = $this->PenjualanInterface->countNotPay();
        if (request('download') == true) {
            $dataExport = $this->PenjualanInterface->getAll(0);
            return $this->export->export($dataExport);
        }
        return view("admin.penjualan.index", compact("tahunSekarang", "bulanSekarang", "bulan", "headerTitle", "data", "appendsPaginate", "countAll","countWhereYear", "countWhereMonth","countNotPay"));
    }
    public function create()
    {
        $headerTitle = 'Tambah Data Transaksi';
        return view("admin.penjualan.create", compact("headerTitle"));
    }

    public function tambah(CreatePenjualanRequest $request)
    {
        $data = $this->PenjualanInterface->tambah($request);
        return $data;
    }

    public function edit(Penjualan $id)
    {
        $data = $this->PenjualanInterface->show($id);
        return view('admin.penjualan.edit', compact('data'));
    }

    public function update(UpdatePenjualanRequest $request, $id){
        $data = $this->PenjualanInterface->update($request, $id);
        return $data;
    }
    public function delete(Penjualan $id)
    {
        $id->delete();
        return redirect()->back()->with("toast_success", "Berhasil Menghapus Data");
    }

}
