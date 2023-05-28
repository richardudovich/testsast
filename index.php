<?php
//global $email;
require_once 'index.inc.php';
$mysqli=new mysqli('database', 'root', 'secret', 'havas_health_accounts_20220206020001');
$query = "select * from users where email = '$email'";
die($query);
$q=$mysqli->query($query);
while($r=$q->fetch_assoc()) {
    print_r($r);
}
