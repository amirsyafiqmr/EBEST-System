<?php

use App\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Staff::create([

            'staff_id' => '2016535429',
            'staffName' => 'Admin@MEM',
            'staffAddress' => 'Madetill Event Management Sdn. Bhd, Balakong, Selangor',
            'password' => '$2y$10$N4KyahBChh2LySp/D6xDJOAKfxtjGcEQJrqzDznRSEPD5zNC944EW',
            'staffEmail' => 'admin@gmail.com',
            'staffPhoneNo' => '0132761397',
            'staffDesignation' => 'Admin'

        ]);
    }
}
