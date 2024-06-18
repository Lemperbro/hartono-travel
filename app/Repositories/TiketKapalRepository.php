<?php
namespace App\Repositories;

use Exception;
use App\Models\TiketKapal;
use App\Repositories\SaveImageRepository;
use App\Repositories\Interfaces\TiketKapalInterface;
use Illuminate\Support\Facades\File;


class TiketKapalRepository implements TiketKapalInterface
{
    private $model, $SaveImageRepository;
    private $lokasiImage = 'TiketKapalImage';

    public function __construct()
    {
        $this->model = new TiketKapal;
        $this->SaveImageRepository = new SaveImageRepository;
    }

    public function getAllWithFilter($paginate = 15)
    {
        $data = $this->getAll($paginate);
        if (auth()->user() !== null) {

            if (request('filter') == 'best') {
                $data = $this->model->where('status', 'active')->orderBy('views', 'desc')->paginate(15);
            } else if (request('filter') == 'habis') {
                $data = $this->getAllTiketHabis();
            }

            if (request('search')) {
                $data = $this->model->where('title', 'like', '%' . request('search') . '%');
            }
        }
        return $data;
    }

    public function getAll($notIn = null, $paginate = 15)
    {
        $data = $this->model->where('status', 'active')->latest();
        if ($notIn !== null) {
            $data->whereNotIn('id', [$notIn]);
        }
        return $data->paginate($paginate);
    }

    public function appendsPaginate()
    {
        $appendsPaginate = [
            'search' => request('search'),
            'filter' => request('filter'),
        ];
        return $appendsPaginate;
    }
    public function getAllTiketHabis()
    {
        return $this->model->where('status', 'expired')->paginate(15);
    }

    public function countTiketHabis()
    {
        return $this->getAllTiketHabis()->count();
    }
    public function create($data)
    {
        try {
            $up = $this->model->create([
                'title' => $data->title,
                'image' => $data->image,
                'keberangkatan' => $data->keberangkatan,
                'tujuan' => $data->tujuan,
                'waktu_keberangkatan' => $data->waktu_keberangkatan,
                'waktu_kedatangan' => $data->waktu_kedatangan,
                'expired' => $data->expired,
                'deskripsi' => $data->deskripsi ?? null
            ]);

            return redirect(route('kapal.admin'))->with('toast_success', 'Berhasil Menambah Data');
        } catch (Exception $e) {
            return redirect()->back()->with('toast_error', 'Gagal Menambah Data');
        }
    }

    public function update($data, $id)
    {
        try {
            if ($data->image !== $id->image) {
                $image = $data->image;
                $storage = public_path($this->lokasiImage . '/' . $id->image);
                if (File::exists($storage)) {
                    unlink($storage);
                }
            } else {
                $image = $id->image;
            }
            $id->update([
                'title' => $data->title,
                'image' => $image,
                'keberangkatan' => $data->keberangkatan,
                'tujuan' => $data->tujuan,
                'waktu_keberangkatan' => $data->waktu_keberangkatan,
                'waktu_kedatangan' => $data->waktu_kedatangan,
                'expired' => $data->expired,
                'deskripsi' => $data->deskripsi ?? null
            ]);
            $id->generateSlugOnUpdate();
            return redirect(route('kapal.admin'))->with('toast_success', 'Berhasil memperbarui data');

        } catch (Exception $e) {
            return redirect()->back()->with('toast_error', 'Gagal memperbarui data');
        }
    }

    public function updateViews($data)
    {
        $data->update([
            'views' => $data->views + 1
        ]);
    }

    public function toTiketHabis($data)
    {
        $data->update([
            'status' => 'expired'
        ]);
        return redirect()->back()->with('toast_success', 'Berhasil merubah status');
    }
    public function show($data): mixed
    {
        if ($data->status == 'expired') {
            return redirect()->back()->with('toast_error', 'Gagal memuat data');
        }
        return $data;
    }

    public function delete($data)
    {
        try {
            $this->SaveImageRepository->delete($data->image, 'TiketKapalImage');
            $data->delete();
            return redirect()->back()->with('toast_success', 'Berhasil menghapus data');

        } catch (Exception $e) {
            return redirect()->back()->with('toast_error', 'Tidak berhasil menghapus data');
        }
    }


}