<?php
namespace App\Repositories;

use Exception;
use App\Models\Promo;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\PromoInterface;

class PromoRepository implements PromoInterface
{
    private $model;

    public function __construct()
    {
        $this->model = new Promo;
    }

    public function cekExpired($data)
    {
        $now = now();
        if ($data->expired <= $now) {
            $data->update([
                'status' => 'expired'
            ]);
        }
    }
    public function allPromo($paginate = 10)
    {
        return $this->model->where('expired', '>', now())->latest()->paginate($paginate);
    }

    public function codePromo()
    {
        // Tentukan panjang kode promo yang diinginkan
        $length = 8; // Misalnya, panjang 8 karakter
        $unique = false;
        $promoCode = '';

        while (!$unique) {
            // Generate kode acak
            $promoCode = Str::upper(Str::random($length));

            // Periksa apakah kode promo sudah ada di database
            $exists = $this->model->where('kode_promo', $promoCode)->where('expired', '>', now())->exists();

            // Jika kode belum ada di database, kode unik ditemukan
            if (!$exists) {
                $unique = true;
            }
        }
        return strtoupper($promoCode);
    }
    public function create($data)
    {
        // dd($data);
        try {
            $codePromo = $this->codePromo();
            $create = $this->model->create([
                'kode_promo' => $codePromo,
                'image' => $data->image,
                'title' => $data->title,
                'expired' => $data->expired
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function update($data, $oldData)
    {
        try {
            $oldData->update([
                'image' => $data->image,
                'title' => $data->title,
                'expired' => $data->expired
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function delete($data)
    {
        return $data->delete();
    }

}