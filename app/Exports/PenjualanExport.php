<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Penjualan;
use App\Exports\ExportBase;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenjualanExport extends ExportBase implements FromCollection,  WithMapping, ShouldAutoSize
{

    private $data;
    private static $counter = 0;


    public function __construct($data){
        $this->data = $data;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->data;
    }

    public function map($row): array
    {
        self::$counter++;

        $this->add_column('No', self::$counter);
        $this->add_column('Nama Pemesan', $row->nama_pemesan);
        $this->add_column('Nomor Tiket', $row->nomor_tiket);
        $this->add_column('Telphone', $row->telp);
        $this->add_column('Alamat', $row->alamat);
        $this->add_column('Keberangkatan', $row->keberangkatan);
        $this->add_column('Tujuan', $row->tujuan);
        $this->add_column('Tanggal Berangkat', Carbon::parse($row->tgl_berangkat)->format('d-M-Y H:i'));
        $this->add_column('Tanggal Sampai', Carbon::parse($row->tgl_sampai)->format('Y-m-d H:i'));
        $this->add_column('Tanggal Pemesanan', Carbon::parse($row->pemesanan)->format('Y-m-d'));
        $this->add_column('Harga', $row->harga);
        $this->add_column('Status Pembayaran', $row->status_pembayaran);
        $this->add_column('Jenis Pembayaran', $row->jenis_pembayaran ?? 'Tidak Ada');

        return $this->get_row();
    }
}
