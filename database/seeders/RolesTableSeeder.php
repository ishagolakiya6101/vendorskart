<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laratrust\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'companyAdmin']);
        Role::create(['name' => 'vendorAdmin']);
        Role::create(['name' => 'companyStaff']);
        $role->syncPermissions(['view-vendor','create-vendor','edit-vendor','delete-vendor',
        'view-material','create-material','edit-material','delete-material','view-company','create-company','edit-company',
        'delete-company','view-industry','create-industry','edit-industry','delete-industry']);
        // Role::create(['name' => 'companyAdmin'])->givePermission(['view-vendor','create-vendor','edit-vendor','delete-vendor',
        // 'view-material','create-material','edit-material','delete-material','view-company','create-company','edit-company',
        // 'delete-company','view-industry','create-industry','edit-industry','delete-industry']);
        // Role::create(['name' => 'vendorAdmin'])->givePermission(['view-vendor','create-vendor','edit-vendor','delete-vendor',
        // 'view-material','create-material','edit-material','delete-material']);
        // Role::create(['name' => 'companyStaff'])->givePermission(['view-industry','view-company','view-vendor','create-vendor','edit-vendor','delete-vendor',
        // 'view-material','create-material','edit-material','delete-material']);
    }
}
