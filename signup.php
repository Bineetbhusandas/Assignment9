<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
require 'userdb_connect.php';
require 'PHPM/src/Exception.php';
require 'PHPM/src/PHPMailer.php';
require 'PHPM/src/SMTP.php';
session_start();
 echo '<pre>';
// if($_REQUEST== $_POST)
// {
//     echo "hello";
// }
// else
// {
//     echo "noo";
// }
 print_r($_REQUEST);
 print_r($_FILES);
 $upload_dir='../../image';
$tmp_file=$_FILES['image']['tmp_name'];
$file_name=$_FILES['image']['name'];
$a=move_uploaded_file($tmp_file,"$upload_dir/$file_name");
// var_dump($a);

$uploaded_image="$upload_dir/$file_name";
$_SESSION['go']=$uploaded_image;
//print_r($_SESSION['go']);
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$parent=$_REQUEST['parents'];
$email=$_REQUEST ['email'];
$password=$_REQUEST['password'];
$birthday=$_REQUEST['birthday'];
$gender=$_REQUEST['gender'];
$religion=$_REQUEST['religion'];
$img=$uploaded_image;
$sql="INSERT INTO `user` ( `first_name`, `last_name`, `password`, `email`, `parent`, `birth_date`, `gender`, `religion`, `image`) VALUES ( '$firstname', '$lastname', '$password', '$email', '$parent', '$birthday', '$gender', '$religion', '$img');";
$result= mysqli_query($conn, $sql);
// var_dump($result);
if($result)
{
    
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'bineetdas500@gmail.com';             // SMTP username
    $mail->Password = '7504244@Bbg1';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable SSL encryption, TLS also accepted with port 465
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->setFrom('bineetdas500@gmail.com','UN COLLEGE');
    $mail->addReplyTo('bineetdas500@gmail.com','UN COLLEGE');
    $mail->addAddress($email);
    $message="<h2>Hello ";
    $message .=$firstname;
    $message .=" ";
    $message .=$lastname;
    $message .=",</h2><div style='color:#16b2b9;' > <b>You Are Successfully signed up in the UN COLLEGE portal.<br>Please click  on   : </b><a href='http://localhost/Assignment/Assignment9/Assignment9.php'>this link </a><b>to visit  our website. </b> </div>";
    $mail->Subject='Signup Mail';
    $mail->msgHTML($message);
    $sent_mail= $mail->send();
    
    if($sent_mail)
    {
        header('Location: Assignment9.php?signupsuccess=success');
        
    }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
}
else
{
     header('Location: Assignment9.php?signupfalid=failed');
}
