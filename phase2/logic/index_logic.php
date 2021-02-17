<?php 
include('connection.php');
// get active user's Information
$active_user=$_SESSION['username'];
$fullname='';
$sql="SELECT * FROM user WHERE username='$active_user';";
$query=mysqli_query($link,$sql);
$result_user=mysqli_fetch_assoc($query);
$fullname=$result_user['fullname'];
$json_head_name=explode(' ',$result_user['fullname'])[0];
$json_head_name=strtolower($json_head_name);
$root_key= explode('/',$result_user['username'])[2] ;
$json_head_name=$json_head_name.$root_key;

$openFile = fopen('json/' . $json_head_name . '_progress.json', 'w');
$user_progress = array('progressInpercent' => $result_user['progress'], 'barProgress' => $result_user['courseProgress'],'new_notification'=>$result_user['new_notification']);

fwrite($openFile, json_encode($user_progress), JSON_PRETTY_PRINT);
fclose($openFile);


// Display Profile Picture
$img='img/profile.jpg';
if($result_user['photo_path'] !==''){
  $img=$result_user['photo_path'];   
}


// Progress System

?>