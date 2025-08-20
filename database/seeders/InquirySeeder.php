<?php

namespace Database\Seeders;
use App\Http\Inquiry\Models\Inquiry;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
           Inquiry::insert([['name'=>'admin',
            'date'=>'11/01/2024',
            ],]);
}
}
