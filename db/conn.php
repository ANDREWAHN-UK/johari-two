<!-- This file is to handle connecting to the databases -->
<!-- Right now it connects to the local database, so Heroku will not work.
 This is not a problem! Once the remote database is done, Heroku will sort it self out -->

 <?php


// below for local connection
$host = '127.0.0.1';
$db = "johari";
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

//remote database connection:

// $host = 'remotemysql.com';
// $db = "EfIHr2Rh6H";
// $user = 'EfIHr2Rh6H';
// $pass = '3RjWvm9pLh';
// $charset = 'utf8mb4';

$dsn = "mysql:host = $host; dbname=$db; charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) {
    throw new PDOException($e->getMessage());
}

//after succesfully connecting, then activate crud.php
//the functions we are likely to use are in the crud.php file
require_once 'crud.php';
$crud = new crud($pdo);

?>