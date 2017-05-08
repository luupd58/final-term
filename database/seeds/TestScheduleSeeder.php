<?php

use Illuminate\Database\Seeder;

class TestScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_schedules')->insert([
    		'sv_id' => "14020000",
    		"sbd" => "145",
    		'mlh_id' => "INT3508He",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020000",
    		"sbd" => "15",
    		'mlh_id' => "INT3412 2",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020000",
    		"sbd" => "14",
    		'mlh_id' => "INT3406 1",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020000",
    		"sbd" => "45",
    		'mlh_id' => "INT3011 1",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020000",
    		"sbd" => "5",
    		'mlh_id' => "INE1050 2",
    	]);


    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020001",
    		"sbd" => "146",
    		'mlh_id' => "INT3508He",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020001",
    		"sbd" => "1",
    		'mlh_id' => "INT3011 1",
    	]);


    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020002",
    		"sbd" => "11",
    		'mlh_id' => "INT2044",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020002",
    		"sbd" => "17",
    		'mlh_id' => "INE1050 2",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020002",
    		"sbd" => "19",
    		'mlh_id' => "INT3306 1",
    	]);


    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020003",
    		"sbd" => "9",
    		'mlh_id' => "INT3508He",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020003",
    		"sbd" => "123",
    		'mlh_id' => "INT2203 2",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020003",
    		"sbd" => "149",
    		'mlh_id' => "INT3011 1",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020003",
    		"sbd" => "120",
    		'mlh_id' => "INE1050 2",
    	]);


    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020004",
    		"sbd" => "197",
    		'mlh_id' => "INT3508He",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020004",
    		"sbd" => "239",
    		'mlh_id' => "INT2203 2",
    	]);
    	DB::table('test_schedules')->insert([
    		'sv_id' => "14020004",
    		"sbd" => "125",
    		'mlh_id' => "INE1050 2",
    	]);
    }
}
