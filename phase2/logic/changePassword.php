<?php
session_start();
include('connection.php');
include('encrypt_dencrypt.php');


// Password Arena
$active_user = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username='$active_user';";
$query = mysqli_query($link, $sql);
$active_user_info = mysqli_fetch_assoc($query);
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$new_password_2 =$_POST['new_password_2'];
$real_password=$active_user_info['password'];
print_r($real_password) ;
$errors = array();
// Checks if The passwords are  the Same
if ($new_password === $new_password_2) {
    // Checks if the length of the password is greater than 8
    if (strlen($new_password) >= 8) {
        // Checks for a Special Character in the Password
        if (preg_match('/^[a-zA-Z0-9]*$/', $new_password)) {
            // Checks if the password in the database is already encrypted
            if ($active_user_info['newPassword'] === '') {
                if ($old_password === $active_user_info['password']) {
                    $new_password = encrypt($new_password,$encrypted_values, $real_values );
                    // Sets the current password and the new password to the encrypted one
                    $sql2 = "UPDATE user  SET password='$new_password',newPassword='$new_password' WHERE username='$active_user';";
                    $query2 = mysqli_query($link, $sql2);
                    header('location:../settings.php?success=true');
                } else {
                    array_push($errors, "Incorrect Password");
                    // header('location:../settings.php?error=true');
                }
            } else {
                // Checks if the de_encrypted password is equal to the user Input
                if (de_encrypt($real_password,$encrypted_values ,$real_values) == $old_password)  {
                   echo de_encrypt($real_password,$encrypted_values, $real_values);
                    $new_password = encrypt($new_password, $encrypted_values,$real_values);
                    $sql2 = "UPDATE user  SET password='$new_password',newPassword='$new_password' WHERE username='$active_user';";
                    echo $new_password;
                    echo $active_user;
                    $query2 = mysqli_query($link, $sql2);
                    header('location:../settings.php?success=true');
                }
                else {
                    array_push($errors, "Incorrect Password");
                    header('location:../settings.php?error=Incorrect Password');
                }
            }
        } else {
            array_push($errors, "Password must not contain a Special Character");
            header('location:../settings.php?error=Password must not contain a Special Character');
        }
    } else {
        array_push($errors, "Password characters must be longer or equal to eight");
        header('location:../settings.php?error=Password characters must be longer or equal to eight');
    }
} else {
    array_push($errors, "Password mismatch");
    header('location:../settings.php?error=Password mismatch');
}

// if($active_user_info['newPassword']===''){

// }
