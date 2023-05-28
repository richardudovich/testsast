<?php
//global $email;
require_once 'index.inc.php';
$mysqli=new mysqli('database', 'root', 'secret', 'xxx');
$query = "select * from users where email = '$email'";
$q=$mysqli->query($query);
while($r=$q->fetch_assoc()) {
    print_r($r);
}
