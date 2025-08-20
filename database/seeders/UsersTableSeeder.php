<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->syncRoles(['companyAdmin']);
        $user->syncPermissions(['view-vendor','create-vendor','edit-vendor','delete-vendor',
        'view-material','create-material','edit-material','delete-material','view-company','create-company','edit-company',
        'delete-company','view-industry','create-industry','edit-industry','delete-industry']);
        // $user->givePermission(['view-vendor','create-vendor','edit-vendor','delete-vendor',
        // 'view-material','create-material','edit-material','delete-material','view-company','create-company','edit-company',
        // 'delete-company','view-industry','create-industry','edit-industry','delete-industry']);
    }
}
