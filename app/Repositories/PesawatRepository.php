<?php
namespace App\Repositories;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use App\Repositories\Interfaces\PesawatInterface;

class PesawatRepository implements PesawatInterface
{
    private $api_url, $api_key;
    public function __construct()
    {
        $this->api_url = config('services.env.api_pesawat_url');
        $this->api_key = config('services.env.api_pesawat');
    }

    public function CariJadwal($data)
    {

        try {
            if ($data->tipe_tiket === 'pulang_pergi') {
                $tipe_tiket = 1;
                if($data->dateEnd === null){
                    throw ValidationException::withMessages([
                        'error' => 'Mohon Lengkapi Data'
                    ]);
                }
            } else if ($data->tipe_tiket === 'sekali_jalan') {
                $tipe_tiket = 2;
            } else {
                throw ValidationException::withMessages([
                    'error' => 'Mohon Maaf Sedang Gangguan'
                ]);
            }
            $from = $this->cutIata($data->from);
            $to = $this->cutIata($data->to);
            if ($from == null || $to == null) {
                throw ValidationException::withMessages([
                    'error' => 'Mohon Lengkapi Data'
                ]);
            }
            return response()->json([
                'data' => $this->fakeResponse(),
            ]);
            // return response()->json(Carbon::parse($data->dateStart)->format('Y-m-d'));
            $get = Http::get($this->api_url . 'search.json', [
                'engine' => 'google_flights', //required
                'departure_id' => $from, //required
                'arrival_id' => $to, //required
                'api_key' => $this->api_key, //required
                'hl' => 'id', //optional ini untuk bahasa
                'outbound_date' => Carbon::parse($data->dateStart)->format('Y-m-d'), //required , ini untuk tgl berangkat
                'return_date' => $tipe_tiket === 1 ? Carbon::parse($data->dateEnd)->format('Y-m-d') : null, //optional, jika tipe tiket pulang_pergi(1), maka ini required
                'type' => $tipe_tiket, //optional, nilai defaultnya 1
                'travel_class' => $data->kelas
            ]);

            return response()->json([
                'data' => $get->json()
            ]);
            

        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 400);
        }


    }

    public function fakeResponse(){
        $filePath = public_path('js/fakeResponse.json');

        // Periksa apakah file ada
        if (File::exists($filePath)) {
            // Baca isi file
            $fileContents = file_get_contents($filePath);

            // Coba untuk mengonversi isi file menjadi array atau objek JSON
            $jsonData = json_decode($fileContents, true);

            // Kirimkan data JSON sebagai respons
            return $jsonData;
        } 
    }

    public function fakeResponseError(){
        $filePath = public_path('js/fakeResponseError.json');

        // Periksa apakah file ada
        if (File::exists($filePath)) {
            // Baca isi file
            $fileContents = file_get_contents($filePath);

            // Coba untuk mengonversi isi file menjadi array atau objek JSON
            $jsonData = json_decode($fileContents, true);

            // Kirimkan data JSON sebagai respons
            return $jsonData;
        } 
    }

    public function cutIata($data)
    {
        $startPos = strpos($data, '(');
        $endPos = strpos($data, ')', $startPos);

        if ($startPos !== false && $endPos !== false) {
            $result = substr($data, $startPos + 1, $endPos - $startPos - 1);

            // Pengecekan panjang string
            if (strlen($result) === 0) {
                $result = null;
            }
        } else {
            $result = null;
        }

        // Output: CGK
        return $result;


    }

}