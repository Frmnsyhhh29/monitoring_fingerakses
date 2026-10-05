<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FingerAccess;

class CheckFingerAccessStatus extends Command
{
    protected $signature = 'finger:check';
    protected $description = 'Cek status online/offline semua IP finger access';

    public function handle(): void
    {
        $devices = FingerAccess::whereNotNull('ip_address')->get();

        $this->info("Mengecek {$devices->count()} device...");

        foreach ($devices as $device) {
            $isOnline = $this->pingHost($device->ip_address);

            $device->update([
                'status' => $isOnline ? 'online' : 'offline',
                'last_checked_at' => now(),
            ]);

            $this->line("{$device->kode_ruangan} ({$device->ip_address}) -> " . ($isOnline ? 'ONLINE' : 'OFFLINE'));
        }

        $this->info('Selesai.');
    }

    private function pingHost(string $ip): bool
    {
        // Windows pakai -n (jumlah paket) dan -w (timeout ms)
        // Linux/Mac pakai -c (jumlah paket) dan -W (timeout detik)
        $isWindows = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';

        $command = $isWindows
            ? "ping -n 1 -w 1000 {$ip}"
            : "ping -c 1 -W 1 {$ip}";

        exec($command, $output, $resultCode);

        return $resultCode === 0;
    }
}