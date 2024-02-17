<?php

namespace App\Http\Requests\Penjualan;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePenjualanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_pemesan' => 'required',
            'telp' => 'required|min:10',
            'alamat' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_sampai' => 'required',
            'tgl_pemesanan' => 'required',
            'nomor_tiket' => 'required',
            'harga' => 'required',
            'status_pembayaran' => 'nullable|in:sudah bayar,belum dibayar',
            'jenis_pembayaran' => 'nullable|in:transfer,cash'
        ];
    }

    public function messages()
    {
        return [
            'nama_pemesan.required' => 'Kolom nama pemesan harus diisi.',
            'telp.required' => 'Kolom telepon harus diisi.',
            'telp.min' => 'Panjang telepon minimal :min digit.',
            'alamat.required' => 'Kolom alamat harus diisi.',
            'keberangkatan.required' => 'Kolom keberangkatan harus diisi.',
            'tujuan.required' => 'Kolom tujuan harus diisi.',
            'tgl_berangkat.required' => 'Kolom tanggal berangkat harus diisi.',
            'tgl_sampai.required' => 'Kolom tanggal sampai harus diisi.',
            'tgl_pemesanan.required' => 'Kolom tanggal pemesanan harus diisi.',
            'nomor_tiket.required' => 'Kolom nomor tiket harus diisi.',
            'harga.required' => 'Kolom harga harus diisi.',
            'status_pembayaran.in' => 'Status pembayaran yang dipilih tidak valid.',
            'jenis_pembayaran.in' => 'Jenis pembayaran yang dipilih tidak valid.',
        ];
    }
}
