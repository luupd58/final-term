<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoClass extends Model
{
    protected $table = "info_class";

    protected $fillable = ['mlh_id', 'name_class', 'date_test', 'time_test',
    	'place_test', 'real_place'];

    public function testSchedule(){
        return $this->hasMany('App\TestSchedule', 'mlh_id', 'mlh_id');
    }
}
