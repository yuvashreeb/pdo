<?php
ini_set('display_errors','on');
try{
    $Database=new PDO('mysql:host=localhost;dbname=PDO','dbuser','123');
} catch (PDOException $ex) {
    die('site is down');
}