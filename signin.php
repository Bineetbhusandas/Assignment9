
<?php
include "userdb_connect.php";
session_start();
if (isset($_POST)) {
    $username = $_POST['mail'];
    $password = $_POST['pass'];
    $sql = "select * from user where email='$username' and password ='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {

        $row = mysqli_fetch_assoc($result);

        if ($row['email'] === $username && $row['password'] === $password) {
            $_SESSION['id'] = $username;
            $_SESSION['fname'] = $row['first_name'];
            $_SESSION['lname'] = $row['last_name'];
            $_SESSION['img'] = $row['image'];
            header('Location: Welcome1.php');
            //echo "<script> location.href='Assignment9_1.php'; </script>";
        } else {
            header('Location: Assignment9.php?error=hello');
        }
    } else {
        header('Location: Assignment9.php?error=hello');
    }
}


?>

