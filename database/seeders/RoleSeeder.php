<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'key' => 'admin',
                'label' => 'Admin',
            ],
            [
                'key' => 'project_owner',
                'label' => 'Project Owner',
            ],
            [
                'key' => 'user',
                'label' => 'Usuário',
            ],
        );
    }
}
