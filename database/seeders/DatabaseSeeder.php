<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Penjualan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Hartono travel',
            'email' => 'hartonotravel@gmail.com',
            'password' => Hash::make('12345678'),
            'telp' => '082230736205'
        ]);

        Penjualan::create([
            'nama_pemesan' => 'asas',
            'telp' => '012120129192',
            'alamat' => 'asas',
            'keberangkatan' => 'sasfsdf',
            'tujuan' => 'sasfsdf',
            'tgl_berangkat' => Carbon::now(),
            'tgl_sampai' => Carbon::now(),
            'tgl_pemesanan' => Carbon::now(),
            'nomor_tiket' => '24qasd',
            'harga' => 1224324,
            'status_pembayaran' => 'sudah bayar'
        ]);
    }
}
