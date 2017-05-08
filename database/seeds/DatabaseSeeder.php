<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InfoClassSeeder::class);
        $this->call(InfoStudentSeeder::class);
        $this->call(TestScheduleSeeder::class);
    }
}
