<?php
session_start();
$serveur="localhost";
$user="root";
$password="";
$dbname="facebook";
$conn=mysqli_connect($serveur, $user, $password, $dbname);

$email=htmlspecialchars($_POST['email_num']);
$password=htmlspecialchars($_POST['password']);

if(isset($_POST['password']) && isset($_POST['email_num'])){
    $sql=mysqli_query($conn, "INSERT INTO user VALUES ('$email','$password')");
    $res=$conn->query($sql);
}
?>  