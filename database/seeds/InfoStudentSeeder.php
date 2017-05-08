<?php

use Illuminate\Database\Seeder;

class InfoStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info_students')->insert([
    		'sv_id' => "14020000",
    		"fullname" => "Nguyễn Văn A",
    		'birthday' => "1996-04-18",
    		'info_class' => "QH-2014-I/CQ-C-A"
    	]);
    	DB::table('info_students')->insert([
    		'sv_id' => "14020001",
    		"fullname" => "Phạm Quốc B",
    		'birthday' => "1996-05-10",
    		'info_class' => "QH-2014-I/CQ-C-A"
    	]);
    	DB::table('info_students')->insert([
    		'sv_id' => "14020002",
    		"fullname" => "Nguyễn Bá C",
    		'birthday' => "1996-01-28",
    		'info_class' => "QH-2014-I/CQ-C-A"
    	]);
    	DB::table('info_students')->insert([
    		'sv_id' => "14020003",
    		"fullname" => "Hà Vũ D",
    		'birthday' => "1996-12-18",
    		'info_class' => "QH-2014-I/CQ-C-A"
    	]);
    	DB::table('info_students')->insert([
    		'sv_id' => "14020004",
    		"fullname" => "Mai Ngọc E",
    		'birthday' => "1996-10-02",
    		'info_class' => "QH-2014-I/CQ-C-A"
    	]);
    }
}
