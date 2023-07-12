<?php
include("connect.php");

$name= $_POST['name'];
$password=$_POST['password'];

$sql= mysqli_query($dbc ,"SELECT * FROM users WHERE name='$name' AND password='$password'");

$count=mysqli_num_rows ( $sql );

if($count>0)
{
    header('Location: dashboard.php');
    exit;
}
else
{
    echo 'BŁĄD LOGOWANIA  <p><a class="link-opacity-70-hover" href="registration.php">POWRÓT</a></p>';
}
?>