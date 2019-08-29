<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contract\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @return mixed
     */
    abstract public function getModel();

    /**
     * @param mixed $model
     */
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {

    }

    public function create($obj)
    {
        // TODO: Implement create() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }
    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }
}
