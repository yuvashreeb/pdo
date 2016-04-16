<?php
ini_set('display_errors', 'on');

class User {
    protected $dates=[
        'Created'
    ];
    public function __construct(){
        foreach ($this->dates as $date){
          $property=$this->{$date};
          $this->{$date}=new DateTime($property);
        }
    }
    public function getFullName() {
        return "{$this->FirstName} {$this->LastName}";
    }

}

$Database = new PDO('mysql:host=localhost;dbname=PDO', 'dbuser', '123');
$users = $Database->query("SELECT * FROM PdoUser");
$users->setFetchMode(PDO::FETCH_CLASS, 'User');
?>
<html>
    <head>
        <title>PDO</title>
    </head>
    <body>
        <?php while ($user = $users->fetch()): ?>
            <div class="user"> 
                <h4><?php echo $user->getFullName(); ?></h4>
                <p>Registered on <?php echo $user->Created; ?></p>
            </div>
        <?php endwhile; ?>
    </body>
</html>