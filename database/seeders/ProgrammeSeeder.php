<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProgrammeSeeder extends Seeder
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
                'name' => 'BACHELOR OF ACCOUNTING WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF BUSINESS ADMINISTRATION WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF COMMUNICATION WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF DIGITAL MEDIA DESIGN WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF EARLY CHILDHOOD EDUCATION WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF EDUCATION (TEACHING OF ENGLISH AS A SECOND LANGUAGE) WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF HUMAN RESOURCE MANAGEMENT WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF INFORMATION TECHNOLOGY WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF ISLAMIC STUDIES (ISLAMIC MANAGEMENT) WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF LIBERAL STUDIES WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF MANAGEMENT WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF MANUFACTURING MANAGEMENT WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF MARKETING WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF MEDICAL AND HEALTH SCIENCES WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF NURSING SCIENCE WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF OCCUPATIONAL SAFETY AND HEALTH MANAGEMENT WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF POLITICAL SCIENCE WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF PSYCHOLOGY WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF SCIENCE IN PROJECT AND FACILITY MANAGEMENT WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF TEACHING (PRIMARY EDUCATION) WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BACHELOR OF TOURISM MANAGEMENT WITH HONOURS',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DIPLOMA IN ACCOUNTING',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DIPLOMA IN EARLY CHILDHOOD EDUCATION',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DIPLOMA IN HUMAN RESOURCE MANAGEMENT',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DIPLOMA IN INFORMATION TECHNOLOGY',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DIPLOMA IN ISLAMIC STUDIES WITH EDUCATION',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DIPLOMA IN MANAGEMENT',
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('programmes')->insert($data);
    }
}
