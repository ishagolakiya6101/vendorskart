<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laratrust\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view-vendor']);
        Permission::create(['name' => 'create-vendor']);
        Permission::create(['name' => 'edit-vendor']);
        Permission::create(['name' => 'delete-vendor']);
        Permission::create(['name' => 'view-material']);
        Permission::create(['name' => 'create-material']);
        Permission::create(['name' => 'edit-material']);
        Permission::create(['name' => 'delete-material']);
        Permission::create(['name' => 'view-company']);
        Permission::create(['name' => 'create-company']);
        Permission::create(['name' => 'edit-company']);
        Permission::create(['name' => 'delete-company']);
        Permission::create(['name' => 'view-industry']);
        Permission::create(['name' => 'create-industry']);
        Permission::create(['name' => 'edit-industry']);
        Permission::create(['name' => 'delete-industry']);

    }
}
