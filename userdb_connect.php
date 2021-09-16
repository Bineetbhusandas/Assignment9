<?php
$server="localhost";
$user="Bineet";
$password="Bineet@50";
$userdb="userdb";
$conn= mysqli_connect($server,$user,$password,$userdb);
var_dump($con);
if($conn)
{
    echo "Success";
}
?>