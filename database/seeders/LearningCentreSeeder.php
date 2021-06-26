<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LearningCentreSeeder extends Seeder
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
                'name' => 'ALOR SETAR LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BANGI LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BANTING LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BATU PAHAT LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BINTULU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'IPOH LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'JOHOR BAHRU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KENINGAU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KOTA BHARU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KOTA KINABALU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KOTA MARUDU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KUALA LIPIS LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KUALA SELANGOR LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KUANTAN LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KUCHING LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'LAHAD DATU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'MANJUNG LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'MELAKA LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'MIRI LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'MELAKA LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'NEGERI SEMBILAN LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PETALING JAYA LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PONTIAN LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SANDAKAN LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PONTIAN LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SEBERANG JAYA LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SHAH ALAM LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SIBU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SIMPANG RENGGAM LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SRI RAMPAI LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SUNGAI PETANI LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TAIPING LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TANJONG MALIM LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TAWAU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TEMERLOH LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TERENGGANU LEARNING CENTRE',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('learning_centres')->insert($data);

    }
}
