<?php
session_start();
require 'userdb_connect.php';
$upload_dir='../../image';
$tmp_file=$_FILES['img']['tmp_name'];
$file_name=$_FILES['img']['name'];
$a=move_uploaded_file($tmp_file,"$upload_dir/$file_name");
$uploaded_image="$upload_dir/$file_name";
$_SESSION['go']=$uploaded_image;
print_r($_SESSION['go']);
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$parent=$_REQUEST['parents'];
$email=$_REQUEST ['email'];
$password=$_REQUEST['password'];
$birthday=$_REQUEST['birthday'];
$gender=$_REQUEST['gender'];
$religion=$_REQUEST['religion'];
$img=$uploaded_image;
$id=$_REQUEST['user_id'];
print_r($_REQUEST);
$upd_sql="UPDATE `user` SET `first_name` = '$firstname', `last_name` = '$lastname', `password` = '$password', `email` = '$email', `parent` = '$parent', `birth_date` = '$birthday', `gender` = '$gender', `religion` = '$religion', `image` = '$img' WHERE `user`.`user_id` ='$id';";
$result=mysqli_query($conn,$upd_sql);
if($result)
{
    header('Location: Assignment9.php?datatable=success');
}
?>