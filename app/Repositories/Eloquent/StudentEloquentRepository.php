<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contract\StudentRepositoryInterface;
use App\Students;

class StudentEloquentRepository extends EloquentRepository implements StudentRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getModel()
    {
        return Students::class;
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function create($obj)
    {
        return $obj->save();
    }

    public function getById($id)
    {
        return $this->model->findOrfail($id);
    }
    public function delete($obj)
    {
        return $obj->delete();
    }

}
