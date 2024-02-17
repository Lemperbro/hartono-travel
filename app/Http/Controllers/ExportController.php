<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PenjualanExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    //

    public function export($data){
        return Excel::download(new PenjualanExport($data), 'data-transaksi.xlsx');
    }
}
