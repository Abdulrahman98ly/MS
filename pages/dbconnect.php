<?php

$db_host="localhost";
$db_username="ms";
$db_password="111";
$db_name="ms";


$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
// check connection 
 if(mysqli_connect_error())
{
 echo "faild to  connected to MySql :" .mysqli_connect_error();
}
 //echo "connection successfuly"; 
?>