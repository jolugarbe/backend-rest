<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 22/04/2018
 * Time: 19:39
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepo {

    abstract public function getModel();

    /**
     * Get a model by ID
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->getModel()->findOrFail($id);
    }


    /**
     * Get all objects of a model
     * @return mixed
     */
    public function all()
    {
        return $this->getModel()->all();
    }


    /**
     * Create a model with the attributes assigned in bulk
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }


    /**
     * Update a model with the attributes assigned in bulk
     * @param Model $entity
     * @param array $data
     * @return Model
     */
    public function update(Model $entity, array $data){
        $entity->fill($data);
        $entity->save();
        return $entity;

    }


    /**
     * Save a new model or update an existing model
     * @param Model $entity
     * @return Model
     */
    public function updateWithoutData(Model $entity){
        $entity->save();
        return $entity;
    }


    /**
     * Delete a model. If receive a number find the model and delete it.
     * @param $entity
     * @return mixed
     */
    public function delete($entity){

        if(is_numeric($entity))
        {
            $entity = $this->findOrFail($entity);
        }
        $entity->delete();
        return $entity;
    }

    public function orderBy($column, $order = 'asc'){
        return $this->getModel()->orderBy($column, $order);
    }

    public function orderByEntity($entity, $column, $order = 'asc'){
        return $entity->orderBy($column, $order);
    }

    public function pluck($column, $key = null){
        return $this->getModel()->pluck($column, $key);
    }

    public function pluckEntity($entity, $column, $key = null){
        return $entity->pluck($column, $key);
    }

    public function select($array){
        return $this->getModel()->select($array);
    }

    public function selectEntity($entity, $array){
        return $entity->select($array);
    }

    public function where($column, $compare, $operator = '='){
        return $this->getModel()->where($column, $operator, $compare);
    }

    public function whereEntity($entity, $column, $compare, $operator = '='){
        return $entity->where($column, $operator, $compare);
    }

    public function firstEntity($entity){
        return $entity->first();
    }

    public function firstOrCreate($entity){
        return $entity->firstOrCreate($entity);
    }
}