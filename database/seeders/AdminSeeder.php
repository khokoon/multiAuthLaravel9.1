<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= [ 
            'name' => 'MD FEROZ AHMED KHOKOON',
            'email' => 'fakhokoon@gmail.com',
            'password' => bcrypt('123456789')
        ];
        Admin::create($admin);
    }
}
