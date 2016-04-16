<?php
ini_set('display_errors', 'on');
$Database = new PDO('mysql:host=localhost;dbname=PDO', 'dbuser', '123');
$updateUser=$Database->query("UPDATE PdoUser SET LastName='madishetty' WHERE Id=4");
var_dump($updateUser);