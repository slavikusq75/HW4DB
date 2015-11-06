<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 30.10.15
 * Time: 10:40
 */
namespace Entities;
use Layer\ManagerInterface;
use PDO;

class Connector implements ManagerInterface
{
   protected $db;
    //private $pdo;
    /**
     * StudentsRepository constructor.
     * Initialize the database connection with sql server via given credentials
     * @param $databasename
     * @param $user
     * @param $pass
     */
/*    public function __construct($databasename, $user, $pass)
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=' . $databasename . ';charset=UTF8', $user, $pass);
        if (!$this->pdo) {
            return false;
            //throw new Exception('Error connecting to the database');
        }
    }
    public function getPdo()
    {
        return $this->pdo;
    }
}*/



//My attemption
//try {
    public function connect()
    {
    /*$db = new PDO("mysql:host=$servername;dbname=$dbname","charset=UTF8", $username, $password);*/
        $this->db =  new PDO('mysql:host=localhost;dbname=' . 'PawnShop' . ';charset=UTF8', 'root', '7Rtz0mj4h');
    }

    public function getdb()
    {
        return $this->db;
    }
    public function insert($tablename)
    {
        # STH означает "Statement Handle"
        //$STH = pdo->prepare("INSERT INTO Clients ( familyName ) values ( 'Popov' )");
        // $STH->execute();
        $this->db->exec("INSERT INTO $tablename VALUES
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