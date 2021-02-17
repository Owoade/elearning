<?php 
include('connection.php');
session_start();
$username = $_SESSION['username'];
if(isset($_POST['personal'])){
    $title=$_POST['title'];
    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $state_origin=$_POST['state_origin'];
    $hometown=$_POST['hometown'];
    $marital_status=$_POST['marital_status'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $home_address=$_POST['home_address'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    

    // Render above info to db
    $sql="UPDATE bio SET dob='$dob',marital_status='$marital_status',home_address='$home_address',state='$state',city='$city',hometown='$hometown' WHERE matric_no='$username';";
  $query=mysqli_query($link,$sql);
  header("location:../profile.php");
}
 if(isset($_POST['nok'])){
     $nok_name=$_POST['nok_name'];
     $nok_relationship=$_POST['nok_relationship'];
     $nok_phone=$_POST['nok_phone'];
     $nok_address=$_POST['nok_address'];
     $nok_occupation=$_POST['nok_occupation'];
     $sql="UPDATE bio SET nok_name='$nok_name',nok_relationship='$nok_relationship',nok_phone='$nok_phone',nok_address='$nok_address',nok_occupation='$nok_occupation' WHERE matric_no='$username';";
     $query=mysqli_query($link,$sql);
     header("location:../profile.php");
 }
 if(isset($_POST['sponsor'])){
     $sponsor_name=$_POST['sponsor_name'];
     $sponsor_relationship=$_POST['sponsor_relationship'];
     $sponsor_phone=$_POST['sponsor_phone'];
     $sponsor_address=$_POST['sponsor_address'];
     $sponsor_occupation=$_POST['sponsor_occupation'];
     $sql="UPDATE bio SET sponsor_name='$sponsor_name',sponsor_relationship='$sponsor_relationship',sponsor_phone='$sponsor_phone',sponsor_address='$sponsor_address',sponsor_occupation='$sponsor_occupation' WHERE matric_no='$username';";
     $query=mysqli_query($link,$sql);
     header("location:../profile.php");
 }