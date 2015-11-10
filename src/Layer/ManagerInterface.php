<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 31.10.15
 * Time: 12:58
 */
namespace Layer;
/**
 * Interface ManagerInterface
 * @package Layer\Manager
 */
interface ManagerInterface
{

    /**
     * Insert new entity data to the DB
     * @param mixed $entity
     * @return mixed
     */
    public function insert($one, $two, $three, $four, $tableName);
    /**
     * Update exist entity data in the DB
     * @param $entity
     * @return mixed
     */
    public function update($one, $two, $three, $four, $tableName);
    /**
     * Delete entity data from the DB
     * @param $entity
     * @return mixed
     */
    public function remove($entity);
    /**
     * Search entity data in the DB by Id
     * @param $entityName
     * @param $id
     * @return mixed
     */
    public function find($tableName);
    /**
     * Search all entity data in the DB
     * @param $entityName
     * @return array
     */
    public function findAll($tableName);
    /**
     * Search all entity data in the DB like $criteria rules
     * @param $entityName
     * @param array $criteria
     * @return mixed
     */
    public function findBy($entityName, $criteria = []);
}