<?php
session_start();
require 'userdb_connect.php';
$id=$_GET['id'];
echo $id.'<br>';
echo $id;
$upd_sql="delete FROM `user` WHERE user_id=$id";
echo $upd_sql;
$result=mysqli_query($conn,$upd_sql);
var_dump($result);
if($result)
{
    header('Location: Assignment9.php?datatable=delete');
}

?>