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
/*$servername = "localhost";
$dbname = "PawnShop";
$username = "root";
$password = "7Rtz0mj4h";*/

try {
    //?Doesn't work
    //$db = new PDO("mysql:host=$servername;dbname=$dbname","charset=UTF8", $username, $password);
    $db = new PDO('mysql:host=localhost;dbname=' . 'PawnShop' . ';charset=UTF8', 'root', '7Rtz0mj4h');
    var_dump($db);

    

    $rows = $db->exec("CREATE TABLE `Clients1`(
	idClient INT PRIMARY KEY AUTO_INCREMENT,
	familyName VARCHAR(20) NOT NULL,
	firstName VARCHAR(20) NOT NULL,
	dateOfBirth DATE NOT NULL )");

    $rows1 = $db->exec("CREATE TABLE `MortgagesSubjects1`(
	idSubject INT PRIMARY KEY AUTO_INCREMENT,
	subjectType VARCHAR(20) NOT NULL,
	weight FLOAT NOT NULL,
	assessedValue INT(5) NOT NULL,
	fineness INT(3) NOT NULL )");

    /*CREATE TABLE `MortgagesSubjects` (
    `idSubject` int(11) NOT NULL,
  `SubjectType` varchar(40) NOT NULL,
  `Fineness` int(7) NOT NULL,
  `Weight` float NOT NULL,
  `AssessedValue` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1*/

    $rows2 = $db->exec("CREATE TABLE `Contracts1`(
	idContract INT PRIMARY KEY AUTO_INCREMENT,
	numberOfContract INT(4) NOT NULL,
	dateOfContract DATE NOT NULL )");



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

/*$rows = $db->exec("INSERT INTO `Clients1` VALUES
		('1', 'Ivanov', 'Ivan'),
		('2', 'Petrov', 'Petr'),
		('3', 'Vasiliyev', 'Vasiliy')
	");*/


//Query via standart SQL method
/*foreach($db->query( "SELECT * FROM Clients1" ) as $row) {
    /echo $row['idClient'] . " " . $row['familyName'] . " " . $row['firstName'] . "<br>";
}*/

//Query via POD method
//$stmt = $db->query( "SELECT * FROM Clients1" );
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
/*$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row) {
    $idClient = htmlentities($row['idClient']);
    $familyName = htmlentities($row['familyName']);
    $firstName = htmlentities($row['firstName']);

    echo $idClient . " " . $familyName . " " . $firstName . "<br>";
    var_dump($row);
}*/

//Deleting tables from DB
//$rows2=$db->exec("DROP TABLE PawnShop.testing");

//$rows1=$db->exec("DROP TABLE PawnShop.Clients1");
//$rows1=$db->exec("DROP TABLE PawnShop.MortgagesSubjects1");
//$rows2=$db->exec("DROP TABLE PawnShop.Contracts1");