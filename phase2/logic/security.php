<?php 

$username=$_SESSION['username'];
// echo $username;
if(!isset($_SESSION["username"])){
    header("location:login.php");
}
?>