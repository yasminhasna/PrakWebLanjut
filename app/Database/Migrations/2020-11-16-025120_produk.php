<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=>	[
					'type'			=> 'INT',
					'constraint'	=>	11,
					'unsigned'		=>	true,
					'auto_increment'=>	true,
			],
			'name'		=>[
					'type'		=> 'VARCHAR',
					'constraint'=>	'100',
			],
			'password'		=>[
					'type'		=>	'TEXT',
					'constraint'=>	'191',
			],
			'created'		=>[
					'type'		=>	'DATETIME',
					'null'		
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('produk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('produk');
	}
}