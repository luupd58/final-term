<?php
namespace App\Repositories\Test;

use App\Repositories\EloquentRepository;

class TestEloquentRepository extends EloquentRepository implements 
    TestRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\TestSchedule::class;
    }

    /**
     * [showStudent lấy ra student dựa vào liên kết belongsTo]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function showStudent($id)
    {
        $check  = \App\InfoStudent::whereRaw("sv_id LIKE '$id'")->get();
        return $check;
    	
    }

    /**
     * [showStudent lấy ra student]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function showAllStudent()
    {
        $check  = \App\InfoStudent::get();
        return $check;
        
    }

    /**
     * [showStudent lấy ra class dựa vào liên kết belongsTo]
     * @return [type] [description]
     */
    public function showClass($id)
    {
        $check  = \App\InfoClass::whereRaw("mlh_id LIKE '$id'")->get();
        return $check;
    }

    /**
     * [showStudent lấy ra class]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function showAllClass()
    {
        $check  = \App\InfoClass::get();
        return $check;
        
    }

    /**
     * [search theo trường mã sinh viên]
     * @param  [type] $field [description]
     * @return [type]        [description]
     */
    public function searchId($field)
    {
        $search = $this->_model->whereRaw("sv_id LIKE '$field'");
        return $search;
    }
}