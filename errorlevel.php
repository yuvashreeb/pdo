<?php
ini_set('display_errors', 'on');
$Database = new PDO('mysql:host=localhost;dbname=PDO', 'dbuser', '123');
$Database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
try{
    $Database->query("INVALID");
} catch (Exception $ex) {
var_dump($ex->getMessage());
}
