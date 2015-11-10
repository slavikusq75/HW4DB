<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.15
 * Time: 9:07
 */
namespace Entities;
use Entities\Connector;
use PDO;
use Layer\Manager;


class Client
{
    protected $subzero;
    protected $connectorManager;
    protected $idClient;
    protected $firstName;
    protected $familyName;
    protected $dateOfBirth;

    public function __construct($one, $two, $three, $four, $five, $tableName)
    {
        $this->idClient = $one;
        $this->firstName = $two;
        $this->familyName = $three;
        $this->dateOfBirth = $four;

        var_dump($this);

        $this->connectorManager = new Manager();
        $this->subzero = $five;

        if ($this->subzero == '1')
            $this->connectorManager->insert($one, $two, $three, $four, $tableName);
        var_dump($this);
        //elseif ($this->subzero == 2)
        //    $this->connectorManager = $this->connectorManager->update();

        if ($this->subzero == '2')
            $this->connectorManager->update($one, $two, $three, $four, $tableName);

        if ($this->subzero == '3')
            $this->connectorManager->find($tableName);

        if ($this->subzero == '4')
            $this->connectorManager->findAll($tableName);



    }
}