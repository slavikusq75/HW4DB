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
    $db = new PDO('mysql:host=localhost;dbname=' . PawnShop . ';charset=UTF8', 'root', '7Rtz0mj4h');
    var_dump($db);
}

catch(Exception $e) {
    echo $e->getMessage();
}
//$sql="INSERT INTO Clients"