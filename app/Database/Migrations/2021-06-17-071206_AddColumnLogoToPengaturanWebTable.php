<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnLogoToPengaturanWebTable extends Migration
{
	public function up()
	{
		$fields = [
        'logo_akreditasi' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'logo_wilayah' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'logo_kabupaten' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'email' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'facebook' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'twitter' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'instagram' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      ];
      $this->forge->addColumn('pengaturan_web', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('pengaturan_web', ['logo_akreditasi', 'logo_wilayah', 'logo_kabupaten', 'email', 'facebook', 'twitter', 'instagram']);
	}
}
