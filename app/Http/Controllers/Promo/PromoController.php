<?php

namespace App\Http\Controllers\Promo;

use App\Models\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Promo\PromoCreateRequest;
use App\Http\Requests\Promo\PromoUpdateRequest;
use App\Repositories\Interfaces\PromoInterface;

class PromoController extends Controller
{
    private $promoInterface;
    public function __construct(PromoInterface $promoInterface)
    {
        $this->promoInterface = $promoInterface;
    }
    public function adminIndex()
    {
        $headerTitle = 'Kelola Promo';
        $data = $this->promoInterface->allPromo();
        return view('admin.promo.index', compact('headerTitle', 'data'));
    }

    public function create()
    {
        $headerTitle = 'Tambah Promo';
        return view('admin.promo.create', compact('headerTitle'));
    }
    public function store(PromoCreateRequest $request)
    {
        // dd($request->all());
        $create = $this->promoInterface->create($request);
        if ($create) {
            return redirect(route('promo'))->with('toast_success', 'Berhasil Menambah Promo');
        } else {
            return redirect()->back()->with('toast_error', 'Tidak Berhasil Menambah Promo');
        }
    }
    public function edit(Promo $id)
    {
        $data = $id;
        $headerTitle = 'Update Promo';
        return view('admin.promo.edit', compact('headerTitle', 'data'));
    }
    public function update(PromoUpdateRequest $request, Promo $id)
    {
        $update = $this->promoInterface->update($request, $id);
        if ($update) {
            return redirect(route('promo'))->with('toast_success', 'Berhasil Merubah Promo');
        } else {
            return redirect()->back()->with('toast_error', 'Tidak Berhasil Merubah Promo');
        }
    }
    public function delete(Promo $id)
    {
        $delete = $this->promoInterface->delete($id);
        if ($delete) {
            return redirect(route('promo'))->with('toast_success', 'Berhasil Menghapus Promo');
        } else {
            return redirect()->back()->with('toast_error', 'Tidak Berhasil Menghapus Promo');
        }
    }
}
