<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code'          =>  'B000057',
                'barcode'         =>  '345-5678-09-23',
                'judul'       =>  'web',
                'pengarang' => 'Gangga',
                'keterangan'    =>  'proses uts',
                'harga'    =>  '85000',
                'diskon_beli'    =>  '50',
                'diskon_jual'    =>  '32',
                'kategori'    =>  'Komputer dan Jaringan',
                'penerbit'    =>  'Dosen',
                'distributor'    =>  'PT.abal-abal',
                'created_at' => Time::now()
            ],
            [
                'code'          =>  'B000067',
                'barcode'         =>  '345-5678-09-03',
                'judul'       =>  'android',
                'pengarang' => 'Putra',
                'keterangan'    =>  'proses praktek',
                'harga'    =>  '95000',
                'diskon_beli'    =>  '50',
                'diskon_jual'    =>  '40',
                'kategori'    =>  'Komputer dan Internet',
                'penerbit'    =>  'Dosen',
                'distributor'    =>  'PT.abal-abal',
                'created_at' => Time::now()
            ],
        ];
        $this->db->table('buku')->insertBatch($data);
    }
}
