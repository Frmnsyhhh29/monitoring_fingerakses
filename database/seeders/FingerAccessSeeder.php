<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FingerAccess;

class FingerAccessSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'unit' => 'GBB Penicillin',
                'kode_ruangan' => 'R.135A',
                'nama_ruangan' => 'VACANT',
                'ip_address' => '192.168.202.24',
            ],
            [
                'unit' => 'GBB Penicillin',
                'kode_ruangan' => 'R.140',
                'nama_ruangan' => 'PRINTED MATERIAL STORAGE AREA',
                'ip_address' => '192.168.202.23',
            ],
            [
                'unit' => 'GBB Penicillin',
                'kode_ruangan' => 'R.134',
                'nama_ruangan' => 'REJECTED MATERIAL STORAGE',
                'ip_address' => '192.168.202.21',
            ],
            [
                'unit' => 'GBB Penicillin',
                'kode_ruangan' => 'R.138',
                'nama_ruangan' => 'POLYCELLO STORAGE',
                'ip_address' => '192.168.202.22',
            ],
            [
                'unit' => 'GBB Penicillin',
                'kode_ruangan' => 'R.133',
                'nama_ruangan' => 'Loker GBB PCL LT.1',
                'ip_address' => '192.168.202.36',
            ],
        ];

        foreach ($data as $row) {
            FingerAccess::create($row);
        }
    }
}