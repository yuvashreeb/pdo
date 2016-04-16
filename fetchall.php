<?php
ini_set('display_errors', 'on');
$Database = new PDO('mysql:host=localhost;dbname=PDO', 'dbuser', '123');
$Users=$Database->query("SELECT * FROM PdoUser");
$Users=$Users->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PDO</title>
    </head>
    <body>
        <?php foreach($Users as $user): ?>
        <div class="user">
            <h3><?php echo $user->FirstName; ?></h3>
            <p><?php echo $user->Email; ?></p>
        </div>
        <?php endforeach; ?>
    </body>
</html>