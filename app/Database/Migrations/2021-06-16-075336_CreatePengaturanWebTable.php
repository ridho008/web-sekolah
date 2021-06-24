<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengaturanWebTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
         'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
         ],
         'nama_website' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
         ],
         'visi' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'misi' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'no_telp' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => true,
         ],
         'no_whatsapp' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => true,
         ],
         'alamat' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'logo_sekolah' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
         ],
      ]);

      $this->forge->addKey('id', true);
      $this->forge->createTable('pengaturan_web');
	}

	public function down()
	{
		$this->forge->dropTable('pengaturan_web');
	}
}
