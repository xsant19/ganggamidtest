<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'code'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'barcode'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'judul' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'pengarang' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'keterangan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'harga' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'diskon_beli' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'diskon_jual' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'kategori' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'penerbit' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'distributor' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('code');
        $this->forge->createTable('buku');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
