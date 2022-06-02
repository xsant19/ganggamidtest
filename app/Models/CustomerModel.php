<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = "buku";
    protected $primaryKey = "code";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'code', 'barcode', 'judul',
        'pengarang', 'keterangan', 'harga', 'diskon_beli', 'diskon_jual', 'kategori', 'penerbit', 'distributor'
    ];
}
