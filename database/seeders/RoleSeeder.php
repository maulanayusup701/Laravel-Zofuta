<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::factory()->create([
            'role' => 'Developer',
            'slug-role' => 'depeloper'
        ]);
        Role::factory()->create([
            'role' => 'Admin',
            'slug-role' => 'admin'
        ]);
        Role::factory()->create([
            'role' => 'User',
            'slug-role' => 'user'
        ]);
    }
}
