<?php

namespace App\Http\Resources\Penjualan;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PenjualanAllResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama_pemesan,
            'no_tiket' => $this->nomor_tiket,
            'telp' => $this->telp,
            'alamat' => $this->alamat,
            'keberangkatan' => $this->keberangkatan,
            'tujuan' => $this->tujuan,
            'tgl_pemesanan' => Carbon::parse($this->tgl_pemesanan)->format('Y-m-d'),
            'tgl_berangkat' => Carbon::parse($this->tgl_berangkat)->format('Y-m-d H:i'),
            'tgl_sampai' => Carbon::parse($this->tgl_sampai)->format('Y-m-d H:i'),
            'harga' => 'Rp. '.number_format($this->harga, 2, '.', '.'),
            'status' => $this->status_pembayaran,
            'jenis' => $this->jenis_pembayaran ?? 'Tidak Ada'
           
        ];
    }
}
