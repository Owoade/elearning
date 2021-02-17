<?php
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: ../phase2/login.php?logut=successfull');
}
?>