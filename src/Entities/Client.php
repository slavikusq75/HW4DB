<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.15
 * Time: 9:07
 */
namespace Entities;

class Client implements WorkWithDBInterface
{
    public $idClient;
    public $firstName;
    public $familyName;
    public $dateOfBirth;

    public function __construct($one, $two, $three, $four)
    {
        $this->idClient;
        $this->firstName;
        $this->familyName;
        $this->dateOfBirth;

        $db = new \PDO('mysql:host=localhost;dbname=' . 'PawnShop' . ';charset=UTF8', 'root', '7Rtz0mj4h');
    }

    /**
     *
     */
    public function insertData()
    {
        $db = new \PDO('mysql:host=localhost;dbname=' . 'PawnShop' . ';charset=UTF8', 'root', '7Rtz0mj4h');
        $ins = $db->prepare("INSERT INTO Clients1 ($this->idClient, $this->familyName, $this->firstName,
        $this->dateOfBirth) VALUES (:idClient, :familyName, :firstName, :dateOfBirth)");
        
        $ins->bindParam(':idClient', $idClient);
        $ins->bindParam(':familyName', $familyName);
        $ins->bindParam(':firstName', $firstName);
        $ins->bindParam(':dateOfBirth', $dateOfBirth);
    }

    public function updateData()
    {
        echo 1;
    }
    public function removeData()
    {
        echo 2;
    }
}