<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name' => 'create-article',
        ]);

        Permission::firstOrCreate([
            'name' => 'update-article',
        ]);

        Permission::firstOrCreate([
            'name' => 'delete-article',
        ]);

        Permission::firstOrCreate([
            'name' => 'create-category',
        ]);

        Permission::firstOrCreate([
            'name' => 'update-category',
        ]);

        Permission::firstOrCreate([
            'name' => 'delete-category',
        ]);
    }
}
