<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTahunAjaranTable extends Migration
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
            'tahun_ajaran'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 10,
            ],
            'status'       => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tahun_ajaran');
	}

	public function down()
	{
		$this->forge->dropTable('tahun_ajaran');
	}
}
