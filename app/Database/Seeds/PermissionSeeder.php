<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermissionSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'name' => 'kelola-user',
				'description' => 'Mengelola semua user'
			],
			[
				'name' => 'kelola-dokumen',
				'description' => 'Mengelola semua dokumen'
			],
			[
				'name' => 'kelola-pinjam',
				'description' => 'Mengelola peminjaman dokumen'
			],
			[
				'name' => 'kelola-denda',
				'description' => 'Mengelola denda dari peminjaman'
			],
			[
				'name' => 'kelola-profil',
				'description' => 'Mengelola profil saya'
			],
		];
		$this->db->table('auth_permissions')->insertBatch($data);
	}
}
