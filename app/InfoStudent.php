<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoStudent extends Model
{
    protected $table = "info_students";

    protected $fillable = ['sv_id', 'fullname', 'birthday', 'info_class'];

    public function testSchedule(){
        return $this->hasMany('App\TestSchedule', 'sv_id', 'sv_id');
    }
}
