<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Factory as faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        Employee::create([
            'employee_name' => 'Admin Account',
            'phone'=> $faker->phoneNumber(),
            'email' => 'admin@admin.com',
            'password' => bcrypt("admin123"),
            'role' => 'admin',
            'is_admin' => 1
        ]);
    }
}
