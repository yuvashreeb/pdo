<?php
ini_set('display_errors', 'on');
class User
{
    public function getFullName()
    {
        return "{$this->FirstName} {$this->LastName}";
    }
}

$Database = new PDO('mysql:host=localhost;dbname=PDO', 'dbuser', '123');
$users=$Database->query("SELECT * FROM PdoUser");
$users->setFetchMode(PDO::FETCH_CLASS,'User');
while($user=$users->fetch()){
    echo $user->getFullName(),'<br>';
}