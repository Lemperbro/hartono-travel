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
        $message = "✈️ *Pemesanan Tiket Pesawat*\n"
        . "\n"
        . "🛫 *Keberangkatan:*\n"
        . "  - Bandara: {$departure_airport['name']}\n"
        . "  - Waktu: {$departure_airport['time']}\n"
        . "\n"
        . "🛬 *Tujuan:*\n"
        . "  - Bandara: {$arrival_airport['name']}\n"
        . "  - Waktu: {$arrival_airport['time']}\n"
        . "\n"
        . "🚀 *Detail Penerbangan:*\n"
        . "  - Maskapai: {$airline}\n"
        . "  - Pesawat: {$airplane}\n"
        . "  - Kelas: {$travel_class}\n"
        . "  - Nomor Penerbangan: {$flight_number}\n"
        . "\n"
        . "📝 *Informasi Penumpang:*\n"
        . "  - Nama: \n"
        . "  - Alamat: \n"
        . "  - Jumlah Tiket: \n"
        . "\n"
        . "🔗 *Link Asal Informasi Tiket:*\n"
        . "  {$link}\n"
        . "\n"
        . "*Keterangan Tambahan:*\n"
        . "{$extensions}";


        return redirectToWhatsApp($message);
    }
}
