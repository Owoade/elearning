  <?php
  include('connection.php');


  // Form Validation
  if (isset($_POST['validate'])) {
     
    $error = '';
    $matric_no =strtoupper($_POST['matric_no']) ;
    $password =strtolower($_POST['password']) ;
    // Checks if User is an Admin
    if(preg_match('/admin/',strtolower($matric_no))){
      $sql="SELECT * FROM admin WHERE admin_user='$matric_no' AND admin_pass='$password';";
      $query=mysqli_query($link,$sql);
      $admin_row=mysqli_num_rows($query);
      if ($admin_row > 0){
        $admin_info=mysqli_fetch_assoc($query);
        header('location:admin.php');
        session_start();
        $_SESSION['username']=$matric_no;
        $_SESSION['new_feedback']=$admin_info['new_feedback'];
      }
    }
    // Then User is a Student
    else{
      $sql = "SELECT * FROM user WHERE username='$matric_no';";
      $query = mysqli_query($link, $sql);
      $result = mysqli_num_rows($query);
      $attempting_user = mysqli_fetch_assoc($query);
      if ($result > 0) {
        if ($attempting_user['newPassword'] === '') {
          if ($attempting_user['password'] === $password) {
            $sql2 = "UPDATE user SET no_logins= no_logins + 1 WHERE username='$matric_no';";
            $query2 = mysqli_query($link, $sql2);
            // Increase User's Progress
            $sql = "SELECT * FROM user WHERE username='$matric_no';";
            $query = mysqli_query($link, $sql);
            $result_user = mysqli_fetch_assoc($query);
            $no_logins = $result_user['no_logins'];
            $progress = $result_user['progress'];
            if ($no_logins < 78) {
              // Calculates instantaneus progress
              $progress = $no_logins * (50 / 78);
              $sql2 = "UPDATE user SET courseProgress=courseProgress - 0.5,progress='$progress' WHERE username='$matric_no';";
              $query2 = mysqli_query($link, $sql2);
            }
            // Inserts User Info too biometric Table
          
            if($no_logins <= 1 ){
              $username=$result_user['username'];
              $fullname=$result_user['fullname'];
              $gender=$result_user['gender'];
              $phone=$result_user['Phone'];
              $email=$result_user['email'];
              $level=$result_user['level'];
              $department=$result_user['department'];
             $surname=explode(' ',$fullname)[0]; 
             $firstname=explode(' ',$fullname)[1];
             
             $title=(strtolower($gender)==="male") ? "Mr" : "Mrs";
              $sql3= "INSERT INTO bio (id,matric_no,firstname,surname,level,department,email,phone,outstandings,title,gender,state_origin,dob,marital_status,home_address,state,city,hometown,nok_name,nok_relationship,nok_phone,nok_address,nok_occupation,sponsor_name,sponsor_relationship,sponsor_phone,sponsor_address,sponsor_occupation,mode_addmission) VALUES('','$username','$firstname','$surname','$level','$department','$email','$phone','','$title','$gender','','','','','','','','','','','','','','','','','','');";
              $query=mysqli_query($link,$sql3);
            }
            session_start();
            $_SESSION['username'] = $matric_no;
            $_SESSION['profile_pics']=$result_user['photo_path'];
            // Writes Actiive User's Info to JSON file
            $json_head_name = explode(' ', $result_user['fullname'])[0];
            $json_head_name = strtolower($json_head_name);
            $root_key = explode('/', $result_user['username'])[2];
            $json_head_name = $json_head_name . $root_key;
            $_SESSION['active_user_key'] = $json_head_name;
            $openFile = fopen('json/' . $json_head_name . '_progress.json', 'w');
            $user_progress = array('progressInpercent' => $result_user['progress'], 'barProgress' => $result_user['courseProgress'],'new_notification'=>$result_user['new_notification']);
            
            fwrite($openFile, json_encode($user_progress), JSON_PRETTY_PRINT);
            fclose($openFile);
            if($result_user['department']==='Computer Science' && $result_user['level']==='NDI' ){
              header('location:index_comp1.php');
           }elseif($result_user['department']==='Computer Science' && $result_user['level']=='NDII' ){
             header('location:index_comp2.php');
           }
          } else {
            $error = '1';
          }
        } else {
         
          include('encrypt_dencrypt.php');
          if (de_encrypt($attempting_user['password'], $encrypted_values, $real_values) == $password) {
  
            $sql2 = "UPDATE user SET no_logins= no_logins + 1 WHERE username='$matric_no';";
            $query2 = mysqli_query($link, $sql2);
            // Increase User's Progress
            $sql = "SELECT * FROM user WHERE username='$matric_no';";
            $query = mysqli_query($link, $sql);
            $result_user = mysqli_fetch_assoc($query);
            $no_logins = $result_user['no_logins'];
            $progress = $result_user['progress'];
            if ($no_logins < 78) {
              // Calculates instantaneus progress
              $progress = $no_logins * (50 / 78);
              $sql2 = "UPDATE user SET courseProgress=courseProgress - 0.5,progress='$progress' WHERE username='$matric_no';";
              $query2 = mysqli_query($link, $sql2);
            }
            session_start();
            $_SESSION['username'] = $matric_no;
            $_SESSION['profile_pics']=$result_user['photo_path'];
            // Writes Actiive User's Info to JSON file
            $json_head_name = explode(' ', $result_user['fullname'])[0];
            $json_head_name = strtolower($json_head_name);
            $root_key = explode('/', $result_user['username'])[2];
            $json_head_name = $json_head_name . $root_key;
            $_SESSION['active_user_key'] = $json_head_name;
            $openFile = fopen('json/' . $json_head_name . '_progress.json', 'w');
            $user_progress = array('progressInpercent' => $result_user['progress'], 'barProgress' => $result_user['courseProgress'],'new_notification'=>$result_user['new_notification']);
            fwrite($openFile, json_encode($user_progress), JSON_PRETTY_PRINT);
            fclose($openFile);
            if($result_user['department']==='Computer Science' && $result_user['level']==='NDI' ){
               header('location:index_comp1.php');
            }elseif($result_user['department']==='Computer Science' && $result_user['level']=='NDII' ){
              header('location:index_comp2.php');
            }
          
          } else {
            $error = '1';
          }
        }
      }
    }
  
    // Increase User's Stat
  } else {
  }

  // Send Festive Greetings to all users
  if(date('d')==01 && date('m')==01){
    $subject=strtoupper("happy new year");
    $notification="The whole management of the college wishes a happy and prosperous new year.";
    $millisec = time();
    $time_posted = date('d') . '-' . date('m') . '-' . date('Y') . ' ' . date('H') . ' : ' . date('i');
    $sql4 = "INSERT INTO notifications (id,subject,specifically_for,notification,time_posted,milliseconds) VALUES('','$subject','','$notification','$time_posted','$millisec');";
    $query4 = mysqli_query($link, $sql4);
  }
