<?php 
include('logic/admin_logic.php');
include('logic/connection.php');
$feedbacks=Admin::loadFeedbacks($link);
$empty_msg='';
$feedback_container='';
if($feedbacks===null){
$empty_msg='<span class=empty-msg>No feedbacks yet</span>';
}else{
    foreach($feedbacks as $feedback){
        $feedback_container.="<div class='feedback-card'>
             <h3>$feedback[1]</h3>
             <strong style='color:#3b3b3b;'>From: $feedback[3]</strong>
             <p> $feedback[2]</p>
        </div>";
    }
}
$sql="UPDATE admin SET new_feedback='false' WHERE admin_user='$_SESSION[username]';";
$query=mysqli_query($link,$sql);
$_SESSION['new_feedback']="false";
?>