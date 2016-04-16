<?php
ini_set('display_errors', 'on');
$Database = new PDO('mysql:host=localhost;dbname=PDO', 'dbuser', '123');
$User=$Database->query("SELECT * FROM PdoUser");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PDO</title>
    </head>
    <body>
        <?php while($List=$User->fetchObject()): ?>
        <div class="List">
            <h3><?php echo $List->FirstName; ?></h3>
            <p><?php echo $List->Email; ?></p>
        </div>
        <?php endwhile; ?>
    </body>
</html>
