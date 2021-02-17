<?php 
include('logic/connection.php');
if(isset($_POST['send_feedback'])){
    $subject=$_POST['subject'];
    $feedback=$_POST['feedback'];
    $time_sent= date('d') . '-' . date('m') . '-' . date('Y') . ' ' . date('H') . ' : ' . date('i');
    $milli=time();
    $from=$_SESSION['username'];
    $sql="INSERT INTO feedback (id,subject,feedback,username,time_sent,milliseconds) VALUES('','$subject','$feedback','$from','$time_sent','$milli');";
    $query=mysqli_query($link,$sql);
    $sql="UPDATE admin SET new_feedback='true';";
    $query=mysqli_query($link,$sql);
    header('location:feedback.php?feedback_sent_successfully');
    unset($_POST['send_feedback']);
}


?>