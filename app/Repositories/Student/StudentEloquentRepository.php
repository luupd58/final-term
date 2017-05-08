<?php
namespace App\Repositories\Student;

use App\Repositories\EloquentRepository;

class StudentEloquentRepository extends EloquentRepository implements 
    StudentRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\InfoStudent::class;
    }
}