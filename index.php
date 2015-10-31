<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 29.10.15
 * Time: 22:41
 */
require_once 'vendor/autoload.php';

Twig_Autoloader::register();

$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);

$template=$twig->loadTemplate('index.html');
echo $template->render(array());

//My experiment

try {
    $db = new PDO('mysql:host=localhost;dbname=' . 'PawnShop' . ';charset=UTF8', 'root', '7Rtz0mj4h');
    var_dump($db);

    $rows = $db->exec("CREATE TABLE `Clients1`(
	idClient INT PRIMARY KEY AUTO_INCREMENT,
	familyName VARCHAR(20) NOT NULL DEFAULT '',
	firstName VARCHAR(50) NOT NULL DEFAULT '')");

    /*$rows1=$db->exec("CREATE TABLE `Clients1` (
    idClient INT(11) PRIMARY KEY AUTO_INCREMENT,
    familyName VARCHAR(20) NOT NULL DEFAULT '',
    firstName VARCHAR(20) NOT NULL DEFAULT '',
    dateOfBirth DATE NOT NULL DEFAULT '')");*/
}
//It catches mistakes in connection
catch(Exception $e) {
    echo $e->getMessage();
}

$rows = $db->exec("INSERT INTO `Clients1` VALUES
		('1', 'Ivanov', 'Ivan'),
		('2', 'Petrov', 'Petr'),
		('3', 'Vasiliyev', 'Vasiliy')
	");


//Query via standart SQL method
/*foreach($db->query( "SELECT * FROM Clients1" ) as $row) {
    /echo $row['idClient'] . " " . $row['familyName'] . " " . $row['firstName'] . "<br>";
}*/

//Query via POD method
$stmt = $db->query( "SELECT * FROM Clients1" );
/*while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo $row['idClient'] . " " . $row['familyName'] . " " . $row['firstName'] . "<br>";
}*/

//Iserting data to DB
/*$rows = $db->exec("INSERT INTO `testing2` VALUES
		('1', 'Ivanov', 'Ivan'),
		('2', 'Petrov', 'Petr'),
		('3', 'Vasiliyev', 'Vasiliy')
	");*/


// теперь выберем несколько строчек из базы

//$result = $db->query("SELECT * FROM `testing` LIMIT 2");

//fetchAll method
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row) {
    $idClient = htmlentities($row['idClient']);
    $familyName = htmlentities($row['familyName']);
    $firstName = htmlentities($row['firstName']);

    echo $idClient . " " . $familyName . " " . $firstName . "<br>";
    var_dump($row);
}

