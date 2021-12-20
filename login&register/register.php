<?php
$connection = mysqli_connect("localhost","root","","nhom4");
mysqli_set_charset($connection,"utf8");
if(isset($_POST['submit'])){
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $old = mysqli_query($connection,$sql);
    $password = md5($password);
   if(mysqli_num_rows($old)> 0){
       header('location:indexregister.php');
   }
   else
   {
    $sql = "INSERT INTO users(`fullname`, `email`, `password`) VALUES ('$fullname','$email','$password')";
    mysqli_query($connection,$sql);
    header('location:indexlogin.php');

   }
   
}
else
{
    header('location:indexregister.php');
}
?>