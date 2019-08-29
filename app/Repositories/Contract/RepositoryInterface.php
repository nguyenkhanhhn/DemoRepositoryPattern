<?php


namespace App\Repositories\Contract;


interface RepositoryInterface
{
    public function getAll();

    public function create($obj);

    public function getById($id);
    public function delete($obj);
}
