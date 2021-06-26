<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Waiting for Review',
            ],
            [
                'id' => 2,
                'name' => 'Admit'
            ],
            [
                'id' => 3,
                'name' => 'Deny'
            ],
        ];

        DB::table('status')->insert($data);  
    }
}
