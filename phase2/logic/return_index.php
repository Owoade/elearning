<?php 
include('connection.php');
$active_user=$_SESSION['username'];
$sql="SELECT * FROM user WHERE username='$active_user';";
$query=mysqli_query($link,$sql);
$result_user=mysqli_fetch_assoc($query);
if(isset($_GET['return'])){
 if($result_user['department']==='Computer Science' && $result_user['level']==='NDI' ){
    header('location:index_comp1.php');
 }elseif($result_user['department']==='Computer Science' && $result_user['level']=='NDII' ){
   header('location:index_comp2.php');
 }   
}

if(isset($_GET['return_courses'])){
    if($result_user['department']==='Computer Science' && $result_user['level']==='NDI' ){
        header('location:courses_comp1.php');
     }elseif($result_user['department']==='Computer Science' && $result_user['level']=='NDII' ){
       header('location:courses_comp2.php');
     } 
}




?>