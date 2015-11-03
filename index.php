<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 29.10.15
 * Time: 22:41
 */

require_once 'vendor/autoload.php';

//use Entities;

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

    //$dbh->exec("CREATE DATABASE 'PawnShop1')");

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

    $rows3 = $db->exec("CREATE TABLE `Checks1`(
	idCheck INT PRIMARY KEY AUTO_INCREMENT,
	numberOfCheck INT(4) NOT NULL,
	summOfCheck INT(6) NOT NULL,
	dateOfCheck DATE NOT NULL )");

    //Iserting data to DB
    $rows = $db->exec("INSERT INTO `Clients1` VALUES
            ('1',    'Ivanov',    'Ivan', '1990-03-20'),
            ('2',    'Petrov',    'Petr', '1981-06-10'),
            ('3',    'Sidorov',   'Sidor', '1980-04-21'),
            ('4',    'Vovanov',    'Vova', '1980-03-10'),
            ('5',    'Mishin',    'Misha', '1980-02-20'),
            ('6',    'Kolin',    'Kolia', '1979-06-15'),
            ('7',    'Dimov',    'Dima', '1975-04-24'),
            ('8',    'Sergeyev', 'Sergey', '1973-07-11'),
            ('9', 'Vasiliyev', 'Vasiliy', '1970-01-01')");

    $rows1 = $db->exec("INSERT INTO `MortgagesSubjects1` VALUES
            ('1',  'Golden Ring', '4.35', '2500', '585'),
            ('2', 'Mobile Phone',     '',  '400',    ''),
            ('3',  'Golden Ring', '6.35', '3500', '585'),
            ('4', 'Mobile Phone',     '',  '600',    ''),
            ('5', 'Mobile Phone',     '',  '400',    ''),
            ('6',  'Golden Ring', '6.35', '3500', '585'),
            ('7', 'Mobile Phone',     '',  '600',    ''),
            ('8',  'Silver Ring',  '10.8',   '120', '925'),
            ('9',  'Silver Ring',  '16.3',   '180', '916')");

    $rows2 = $db->exec("INSERT INTO `Contracts1` VALUES
             ('1', '1562', '2015-09-20'),
             ('2', '1498', '2015-08-10'),
             ('3', '1462', '2015-07-20'),
             ('4', '1438', '2015-07-10'),
             ('5', '1352', '2015-03-02'),
             ('6', '1310', '2015-09-20'),
             ('7', '1260', '2015-08-10'),
             ('8', '1116', '2015-07-20'),
             ('9', '981', '2015-03-01')");

    $rows3 = $db->exec("INSERT INTO `Checks1` VALUES
            ('1', '2134', '1250', '2015-09-20'),
            ('2', '2005',  '250', '2015-08-10'),
            ('3', '2004', '1250', '2015-07-20'),
            ('4', '1934', '1250', '2015-07-10'),
            ('5', '1905',  '250', '2015-03-02'),
            ('6', '1874', '1250', '2015-09-20'),
            ('7', '1755',  '250', '2015-08-10'),
            ('8', '1730',   '60', '2015-07-20'),
            ('9', '1720',   '60','2015-03-01')");



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

//$rows=$db->exec("DROP TABLE PawnShop.Clients1");
//$rows1=$db->exec("DROP TABLE PawnShop.MortgagesSubjects1");
//$rows2=$db->exec("DROP TABLE PawnShop.Contracts1");
//$rows3=$db->exec("DROP TABLE PawnShop.Checks1");();

//$connect1 = new Entities\Connector;

//$firstName = "Kostia";
//$familyName = "Kostev";

$Client1 = new Entities\Client(10,'Smith','John', '1954-03-15');
//$Client1->firstName = "$firstName";
//$Client1->familyName = "$familyName";
$Client1->insertData();
var_dump($Client1);



echo $Client1->familyName;
echo $Client1->firstName;

//$rows = $db->exec("INSERT INTO `Clients1` VALUES
//       ('10', $Client1->familyName;, 'Vasiliy', '1970-01-01')");
