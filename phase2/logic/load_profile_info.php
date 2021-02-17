<?php 
include('connection.php');
$username=$_SESSION['username'];
$sql = "SELECT * FROM bio WHERE matric_no='$username';";
$query = mysqli_query($link, $sql);
$result = mysqli_num_rows($query);
$result_user = mysqli_fetch_assoc($query);

$sql2 = "SELECT * FROM user WHERE username='$username';";
$query2 = mysqli_query($link, $sql2);
$result = mysqli_num_rows($query2);
$result_user2 = mysqli_fetch_assoc($query2);


$matric_no=$result_user['matric_no'];
$firstname=$result_user['firstname'];
$surname=$result_user['surname'];
$level=$result_user['level'];
$department=$result_user['department'];
$email=$result_user['email'];
$phone=$result_user['phone'];
$title=$result_user['title'];
$gender=$result_user['gender'];
$state_of_origin=$result_user['state_origin'];
$marital_status=$result_user['marital_status'];
$home_address=$result_user['home_address'];
$state=$result_user['state'];
$city=$result_user['city'];
$home_towm=$result_user['hometown'];
$nok_name=$result_user['nok_name'];
$nok_relationship=$result_user['nok_relationship'];
$nok_phone=$result_user['nok_phone'];
$nok_address=$result_user['nok_address'];
$nok_occupation=$result_user['nok_occupation'];
$sponsor_name=$result_user['sponsor_name'];
$sponsor_relationship=$result_user['sponsor_relationship'];
$sponsor_phone=$result_user['sponsor_phone'];
$sponsor_address=$result_user['sponsor_address'];
$sponsor_occupation=$result_user['sponsor_occupation'];
$mode_addmission=$result_user['mode_addmission'];

$img='img/profile.jpg';
$img=$result_user2['photo_path'];
if($result_user2['photo_path']!=''){
    $img_container="<img src='$img'>";
}

// Fetch general info from db
$sql="SELECT * FROM general;";
$query2=mysqli_query($link,$sql);
$general=mysqli_fetch_assoc($query2);
$semester=$general['semester'];


































?>