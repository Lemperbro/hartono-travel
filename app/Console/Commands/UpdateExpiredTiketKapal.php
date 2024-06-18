<?php

namespace App\Console\Commands;

use App\Models\TiketKapal;
use Illuminate\Console\Command;

class UpdateExpiredTiketKapal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-expired-tiket-kapal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update status tiket kapal yang sudah expired.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tiketKapal = TiketKapal::where('expired', '<', now())->get();

        foreach ($tiketKapal as $item) {
            $item->status = 'expired';
            $item->save();
        }

        $this->info('Tiket Kapal yang sudah expired telah diperbarui.');

        return 0;
    }
}
