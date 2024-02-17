<?php
namespace App\Repositories;

use Exception;
use App\Models\Penjualan;
use App\Repositories\Interfaces\PenjualanInterface;
use App\Http\Resources\Penjualan\PenjualanAllResource;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;


class PenjualanRepository implements PenjualanInterface{
    
    private $model;

    public function __construct(){
        $this->model = new Penjualan();
    }

    public function numberFormatCountTransaksi($data){
        return $data < 99999 ? number_format($data,0,',','.') : number_format($data / 10000,1,',','.'). 'jt';
    }
    public function countAll(){
        $data = $this->model->count();
        return $this->numberFormatCountTransaksi($data);
    }

    public function countWhereYear(){
        $tahun = Carbon::now()->format('Y');
        $data = $this->model->whereYear('tgl_pemesanan',$tahun)->count();
        return $this->numberFormatCountTransaksi($data);
    }

    public function countWhereMonth(){
        $bulan = Carbon::now()->format('m');
        $data = $this->model->whereMonth('tgl_pemesanan', $bulan)->count();
        return $this->numberFormatCountTransaksi($data);
    }

    public function countNotPay(){
        $data = $this->model->where('status_pembayaran', 'belum dibayar')->count();
        return $this->numberFormatCountTransaksi($data);
    }
    public function appendsPaginate(){
        $appendsPaginate = [
            'search' => request('search'),
            'tahun' => request('tahun'),
            'bulan' => request('bulan'),
            'status' => request('status'),
        ];
        return $appendsPaginate;
    }
    public function getAll($paginate){
        $data = $this->model->latest();
        if(request('search')){
            $data->where('nama_pemesan', 'like','%'.request('search').'%')->orWhere('nomor_tiket', request('search'));
        }

        if(request('tahun')){
            $data->whereYear('tgl_pemesanan', request('tahun'));
        }

        if(request('bulan')){

            $data->whereMonth('tgl_pemesanan', request('bulan'));
        }
        
        if(request('status')){
            $data->where('status_pembayaran', request('status'));
        }
        if($paginate > 0){
            $data->paginate($paginate);
        }else{
            $data;
        }
        return PenjualanAllResource::collection($data->paginate($paginate));
        
    }

    public function show($data){
        return PenjualanAllResource::make($data);
    }
    public function update($data, $id){
        try{
            $chekNo = Penjualan::where('nomor_tiket', $data->nomor_tiket)->whereNotIn('id', [$id])->get();
            if($chekNo->count() > 0){
            return redirect()->back()->with('toast_error', 'Nomor Tiket Sudah Ada');
                
            }
            $up = $this->model->where('id', $id)->update([
                'nama_pemesan' => $data->nama_pemesan,
                'telp' => $data->telp,
                'alamat' => $data->alamat,
                'keberangkatan' => $data->keberangkatan,
                'tujuan' => $data->tujuan,
                'tgl_berangkat' => $data->tgl_berangkat,
                'tgl_sampai' => $data->tgl_sampai,
                'tgl_pemesanan' => $data->tgl_pemesanan,
                'nomor_tiket' => $data->nomor_tiket,
                'harga' => $data->harga,
                'status_pembayaran' => $data->status_pembayaran ?? 'belum dibayar',
                'jenis_pembayaran' => $data->jenis_pembayaran ?? null
            ]);

            return redirect(route('penjualan'))->with('toast_success', 'Berhasil Mengubah Data Transaksi');

        }catch(Exception $e){
            return redirect()->back()->with('toast_error', 'Gagal Mengubah Data Transaksi');
        }
    }
    public function tambah($data){
        try{
            $up = $this->model->create([
                'nama_pemesan' => $data->nama_pemesan,
                'telp' => $data->telp,
                'alamat' => $data->alamat,
                'keberangkatan' => $data->keberangkatan,
                'tujuan' => $data->tujuan,
                'tgl_berangkat' => $data->tgl_berangkat,
                'tgl_sampai' => $data->tgl_sampai,
                'tgl_pemesanan' => $data->tgl_pemesanan,
                'nomor_tiket' => $data->nomor_tiket,
                'harga' => $data->harga,
                'status_pembayaran' => $data->status_pembayaran ?? 'belum dibayar',
                'jenis_pembayaran' => $data->jenis_pembayaran ?? null
            ]);

            return redirect(route('penjualan'))->with('toast_success', 'Berhasil Menambah Data Transaksi');
        }catch(Exception $e){
            return redirect()->back()->with('toast_error', 'Gagal Menambah Data Transaksi');
        }
    }
    
}