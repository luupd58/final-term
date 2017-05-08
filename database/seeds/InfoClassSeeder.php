<?php

use Illuminate\Database\Seeder;

class InfoClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info_class')->insert([
    		'mlh_id' => "INT3508He",
    		"name_class" => "Thực tập chuyên ngành",
    		"time_test" => "1",
    		"date_test" => "2017-06-01",
    		"place_test" => "Nộp điểm",
    		"real_place" => "Nhà E3",
    	]);
    	DB::table('info_class')->insert([
    		'mlh_id' => "INT3412 2",
    		"name_class" => "Thị giác máy",
    		"time_test" => "2",
    		"date_test" => "2017-06-02",
    		"place_test" => "301-G2",
    		"real_place" => "Nhà G2",
    	]);
    	DB::table('info_class')->insert([
    		'mlh_id' => "INT3306 1",
    		"name_class" => "Phát triển ứng dụng web",
    		"time_test" => "1",
    		"date_test" => "2017-06-03",
    		"place_test" => "302-G2",
    		"real_place" => "Nhà G2",
    	]);
    	DB::table('info_class')->insert([
    		'mlh_id' => "INT2203 2",
    		"name_class" => "Cấu trúc dữ liệu và giải thuật",
    		"time_test" => "1",
    		"date_test" => "2017-06-04",
    		"place_test" => "303-G2",
    		"real_place" => "Nhà G2",
    	]);
    	DB::table('info_class')->insert([
    		'mlh_id' => "INT3406 1",
    		"name_class" => "Xử lý ngôn ngữ tự nhiên",
    		"time_test" => "2",
    		"date_test" => "2017-06-05",
    		"place_test" => "301-GĐ2",
    		"real_place" => "Nhà GĐ2",
    	]);
    	DB::table('info_class')->insert([
    		'mlh_id' => "INT3011 1",
    		"name_class" => "Các vấn đề hiện đại",
    		"time_test" => "1",
    		"date_test" => "2017-06-06",
    		"place_test" => "302-GĐ2",
    		"real_place" => "Nhà GĐ2",
    	]);
    	DB::table('info_class')->insert([
    		'mlh_id' => "INT2044",
    		"name_class" => "Lý thuyết thông tin",
    		"time_test" => "2",
    		"date_test" => "2017-06-07",
    		"place_test" => "303-GĐ2",
    		"real_place" => "Nhà GĐ2",
    	]);
    	DB::table('info_class')->insert([
    		'mlh_id' => "INE1050 2",
    		"name_class" => "Kinh tế vi mô",
    		"time_test" => "2",
    		"date_test" => "2017-06-08",
    		"place_test" => "304-GĐ2",
    		"real_place" => "Nhà GĐ2",
    	]);
    }
}
