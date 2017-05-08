<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSchedule extends Model
{
    protected $table = "test_schedules";

    protected $fillable = ['id', 'sv_id', 'sbd', 'mlh_id', 'time_test', 
        'place_test', 'type'];

    public function infoStudent(){
        return $this -> belongsTo('App\InfoStudent','sv_id','sv_id');
    }

    public function infoClass(){
        return $this -> belongsTo('App\InfoClass','mlh_id','mlh_id');
    }
}
