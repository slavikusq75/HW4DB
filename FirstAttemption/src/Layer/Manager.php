<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 31.10.15
 * Time: 13:02
 */
namespace Layer;

use Entities\Connector;
use PDO;


/**
 * Class Manager
 * @package Layer\Manager
 */
class Manager implements ManagerInterface
{
    protected $connector;

    public function __construct()
   {
        $this->connector = new Connector;
        $this->connector = $this->connector->connect();

    }

    /**
     * @param $tableName
     */
    public function insert($tablename)
    {
        # STH означает "Statement Handle"
        //$STH = pdo->prepare("INSERT INTO Clients ( familyName ) values ( 'Popov' )");
        // $STH->execute();
        $this->connector->exec("INSERT INTO $tablename VALUES
		('12', 'Vasiliyev', 'Vasiliy', '1970-01-01')");
    }

    /**
     * Update exist entity data in the DB
     * @param $entity
     * @return mixed
     */
    public function update($entity)
    {}
/**
     * Delete entity data from the DB
     * @param $entity
     * @return mixed
     */
    public function remove($entity)
    {}
    /**
     * Search entity data in the DB by Id
     * @param $entityName
     * @param $id
     * @return mixed
     */
    public function find($entityName, $id)
    {}
    /**
     * Search all entity data in the DB
     * @param $entityName
     * @return array
     */
    public function findAll($entityName)
    {}
    /**
     * Search all entity data in the DB like $criteria rules
     * @param $entityName
     * @param array $criteria
     * @return mixed
     */
    public function findBy($entityName, $criteria = [])
    {}

}