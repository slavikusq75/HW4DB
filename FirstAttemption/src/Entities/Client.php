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


class Client
{
    public $idClient;
    public $firstName;
    public $familyName;
    public $dateOfBirth;

    public function __construct($one, $two, $three, $four)
    {
        $this->idClient = $one;
        $this->firstName = $two;
        $this->familyName = $three;
        $this->dateOfBirth = $four;
    }
}