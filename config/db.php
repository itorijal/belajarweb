<?php 
$db = new mysqli('localhost', 'root', '', 'db_learn');
if(mysqli_connect_errno($db))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>