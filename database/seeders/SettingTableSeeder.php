<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                'site_name' => 'Softech Content Management System (SCMS)',
                'site_email' => 'root@admin.com',
                'site_phone' => '9742867915',
                'site_mobile' => '9814618803',
                'site_first_address' => 'Kathmandu',
                'site_second_address' => 'Mid Baneshor KTM',
                'site_description' => 'Softech Content Management System ',
                'site_url' => 'http://127.0.0.1:8000/',
                'logo' => NULL
            ]
        );
    }
}
