<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 30.10.15
 * Time: 10:40
 */
namespace Entities;
//use Layer\ManagerInterface;
use PDO;

class Connector
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
      return $this->db = new PDO('mysql:host=localhost;dbname=' . 'PawnShop' . ';charset=UTF8', 'root', '7Rtz0mj4h');
    }

    public function getdb()
    {
        return $this->db;
    }

}