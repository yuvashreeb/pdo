<?php
ini_set('display_errors', 'on');
$Database = new PDO('mysql:host=localhost;dbname=PDO', 'dbuser', '123');
$User=$Database->query("SELECT * FROM PdoUser");
echo '<pre>',var_dump($User->fetchAll(PDO::FETCH_ASSOC)),'</pre>';
//FETCH_BOTH,FETCH_ASSOC,FETCH_NUM  
//echo '<pre>',var_dump($User->fetchObject()->Email),'</pre>';