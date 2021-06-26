<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'name' => 'Administrator',
            'email' => 'administrator@oum.my',
            'password' => bcrypt('password'),
            'address' => 'Menara OUM, Block C, Kelana Centre Point, Jalan SS 7/19',
            'postcode' => '47301',
            'state' => 'Petaling Jaya',
            'phone_number' => '03-7801 1800',
        ]);
        $admin->attachRole('administrator');

        $users = User::factory()->hasApplications(3)->count(10)->create();
        foreach ($users as $user) {
            $user->attachRole('student');
        }
    }
}
 