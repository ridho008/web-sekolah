<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelasTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nama_kelas'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 10,
            ],
            'id_jurusan'       => [
                    'type'           => 'INT',
                    'constraint'     => 11,
            ],
            'kouta'       => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null' => true
            ],
            'jml_kelas'       => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kelas');
	}

	public function down()
	{
		$this->forge->dropTable('kelas');
	}
}
