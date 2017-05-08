<?php
namespace App\Repositories\InfoClass;

use App\Repositories\EloquentRepository;

class InfoClassEloquentRepository extends EloquentRepository implements 
    InfoClassRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\InfoClass::class;
    }
}