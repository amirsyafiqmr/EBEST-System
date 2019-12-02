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
            'password' => '$2y$10$gPGrjTho2D54Iw3NE3IzmeoCqbLPh29Cui.6bMyYiWB9YQQyMfBVy',
            'staffEmail' => 'admin@gmail.com',
            'staffPhoneNo' => '0132761397',
            'staffDesignation' => 'Admin'

        ]);
    }
}
