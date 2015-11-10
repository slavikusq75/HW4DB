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
use PDOStatement;

/**
 * Class Manager
 * @package Layer\Manager
 */
class Manager implements ManagerInterface
{
    protected $connector;

    public function __construct()
   {
        $this->connector = new Connector();
        $this->connector = $this->connector->connect();
        //return $this->connector;
    }

    /**
     * @param $tableName
     */
    public function insert($one, $two, $three, $four, $tableName)
    {
        $stmt = $this->connector->prepare("INSERT INTO `$tableName` (idClient, familyName, firstName, dateOfBirth) VALUES
        (:idClient, :familyName, :firstName,:dateOfBirth)");
        $stmt->bindParam(':idClient', $one);
        $stmt->bindParam(':familyName', $two);
        $stmt->bindParam(':firstName', $three);
        $stmt->bindParam(':dateOfBirth', $four);
        $stmt->execute();
        var_dump($stmt);

        # STH означает "Statement Handle"
        //$STH = pdo->prepare("INSERT INTO Clients ( familyName ) values ( 'Popov' )");

       // $this->connector->exec("INSERT INTO `Clients1` VALUES
		//($one, $two, $three, $four)");
       // var_dump($this);
    }


    /**
     * Update exist entity data in the DB
     * @param $entity
     * @return mixed
     */
    public function update($one, $two, $three, $four, $tableName)
    {
        $stmt = $this->connector->prepare("UPDATE `$tableName` SET familyName = :familyName WHERE idClient = :idClient)");
        $stmt->bindParam(':idClient', $one);
        $stmt->bindParam(':familyName', $two);
        //$stmt->bindParam(':firstName', $three);
        //$stmt->bindParam(':dateOfBirth', $four);
        $stmt->execute();
        var_dump($stmt);
    }
/**
     * Delete entity data from the DB
     * @param $entity
     * @return mixed
     */
    public function remove($entity)
    {
        $this->connector->exec("DELETE FROM `Clients` WHERE
        idClient = '13'");
    }
    /**
     * Search entity data in the DB by Id
     * @param $entityName
     * @param $id
     * @return mixed
     */

    public function find($tableName)
    {
        $stmt = $this->connector->prepare("SELECT idContract, dateOfContract FROM `$tableName`");
        //$stmt->execute();
        //return $stmt->fetch(PDO::FETCH_ASSOC);
        //$this->connector->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
             echo $row['idContract'] . "\n";// $row['familyName'] . "\n";
             echo $row['dateOfContract'] . "\n";
       }
    }
    /**
     * Search all entity data in the DB
     * @param $entityName
     * @return array
     */
    public function findAll($tableName)
    {
        $stmt = $this->connector->prepare("SELECT subjectType, assessedValue FROM `$tableName`");
        $stmt->execute();
        $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
        //$this->connector->execute();
    }
    /**
     * Search all entity data in the DB like $criteria rules
     * @param $entityName
     * @param array $criteria
     * @return mixed
     */
    public function findBy($entityName, $criteria = [])
    {}

}