<?php

namespace App\Http\Controllers;

use App\Http\Requests\CariJadwalPesawatRequest;
use App\Repositories\Interfaces\PesawatInterface;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    //

    private $pesawatInterface;

    public function __construct(PesawatInterface $pesawatInterfaces)
    {
        $this->pesawatInterface = $pesawatInterfaces;
    }

    public function cariJadwal(CariJadwalPesawatRequest $request)
    {
        $data = $this->pesawatInterface->CariJadwal($request);
        return $data;
    }
    public function redirecToWa(Request $request)
    {
        // Decode JSON strings from query parameters
        $departure_airport = json_decode($request->query('departure_airport'), true);
        $arrival_airport = json_decode($request->query('arrival_airport'), true);

        // Extract other data
        $duration = $request->query('duration');
        $airplane = $request->query('airplane');
        $airline = $request->query('airline');
        $airline_logo = $request->query('airline_logo');
        $travel_class = $request->query('travel_class');
        $flight_number = $request->query('flight_number');
        $legroom = $request->query('legroom');
        $extensions = $request->query('extensions');
        // dd([
        //     'departure_airport' => $departure_airport,
        //     'arrival_airport' => $arrival_airport,
        //     'duration' => $duration,
        //     'airplane' => $airplane,
        //     'airline' => $airline,
        //     'airline_logo' => $airline_logo,
        //     'travel_class' => $travel_class,
        //     'flight_number' => $flight_number,
        //     'legroom' => $legroom,
        //     'extensions' => $extensions,
        // ]);
        $link = url('/');
        $message = "Pemesanan Tiket Pesawat {$airline} {$airplane}, Mohon isi data yang kosong di bawah ini\n"
        . "Nama: ,\n"
        . "Alamat: ,\n"
        . "Keberangkatan: {$departure_airport['name']},\n"
        . "Tujuan: {$arrival_airport['name']},\n"
        . "Waktu Keberangkatan: {$departure_airport['time']},\n"
        . "Waktu Kedatangan: {$arrival_airport['time']},\n"
        . "Kelas: {$travel_class},\n"
        . "Nomor Penerbangan: {$flight_number},\n"
        . "Jumlah Tiket: ,\n"
        . "Link asal informasi tiket: {$link},\n"
        . "\n"
        . "{$extensions},"
        ;

        return redirectToWhatsApp($message);
    }
}
