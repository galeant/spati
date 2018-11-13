<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
            'name' => 'momo',
            'email' => 'momo@mail.com',
            'password' => 'momo',
        ]);
    }
}
