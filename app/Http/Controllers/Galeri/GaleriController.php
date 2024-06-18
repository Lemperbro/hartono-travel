<?php

namespace App\Http\Controllers\Galeri;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\GaleriInterface;
use App\Http\Requests\Galeri\CreateGaleriRequest;
use App\Http\Requests\Galeri\UpdateGaleriRequest;

class GaleriController extends Controller
{
    private $galeriInterface;
    public function __construct(GaleriInterface $galeriInterface)
    {
        $this->galeriInterface = $galeriInterface;
    }
    public function adminIndex()
    {
        $data = $this->galeriInterface->getAll(15);
        return view('admin.galeri.index', compact('data'));
    }
    public function create()
    {
        $headerTitle = 'Tambah foto ke galeri';
        return view('admin.galeri.create', compact('headerTitle'));
    }
    public function store(CreateGaleriRequest $request)
    {
        $create = $this->galeriInterface->create($request);
        if ($create) {
            return redirect(route('galeri.admin'))->with('toast_success', 'berhasil menambah foto');
        } else {
            return redirect(route('galeri.admin.create'))->with('toast_error', 'tidak berhasil menambah foto');
        }
    }
    public function edit(Galeri $id)
    {
        $data = $id;
        $headerTitle = 'Ubah Data Galeri';
        return view('admin.galeri.edit', compact('data', 'headerTitle'));
    }
    public function update(UpdateGaleriRequest $request, Galeri $id){
        $update = $this->galeriInterface->update($request, $id);
        if ($update) {
            return redirect(route('galeri.admin'))->with('toast_success', 'berhasil memperbarui foto');
        } else {
            return redirect(route('galeri.admin.create'))->with('toast_error', 'tidak berhasil memperbarui foto');
        }
    }
}
