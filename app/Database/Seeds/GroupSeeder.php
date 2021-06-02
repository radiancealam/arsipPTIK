<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'name' => 'admin',
				'description' => 'Administrator'
			],
			[
				'name' => 'member',
				'description' => 'Regular member'
			]
		];
		$this->db->table('auth_groups')->insertBatch($data);
	}
}
