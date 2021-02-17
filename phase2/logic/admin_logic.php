<?php
include('connection.php');

class Admin
{
    public static function existingUser($user, $link)
    {
        $sql2 = "SELECT * FROM user WHERE username='$user';";
        $query = mysqli_query($link, $sql2);
        if (mysqli_num_rows($query) == 0) {
            return false;
        } else {
            return true;
        }
    }
    public static function addPhoto($photo,$link,$post){
      $ext_array=['jpeg','JPG','jpg','png','dpi','PNG'];
      $photo_error=$photo['error'];
      $photo_name=$photo['name'];
      $photo_size=$photo['size'];
      $photo_temp_name=$photo['tmp_name'];
     $photo_ext=explode('.',$photo_name)[1];

      if($photo_error === 0){
          if($photo_size < 3000000){
              if(in_array($photo_ext,$ext_array)){
                  $name=explode(' ',$post['full_name'])[0];
                  $num=explode('/',$post['matric_no'])[2];
                  $file_name=$name.$num;
               $photo_destination="profile_pics/".$file_name.".".$photo_ext;
               move_uploaded_file($photo['tmp_name'],$photo_destination);
               $photo_directory=scandir('profile_pics');
               if(in_array($file_name.".".$photo_ext,$photo_directory)){
                return [true,$photo_destination];
               }else{
                return [true,''];
               }
               
              }
          }else{
            echo"<script>
            alert('The size of the uploaded picture is too large');
            </script>";
          }
      }else{
          echo"<script>
          alert('There is an error with the uploaded picture')
          </script>";
      }
    }
    public static function addUsers($post_data, $link)
    {
        if (Admin::existingUser($_REQUEST['matric_no'], $link) == false) {
            $photo_func=Admin::addPhoto($_FILES['photo'],$link,$post_data);
            if($photo_func[0]==true){
            $password = explode(' ', $post_data['full_name'])[0];
            $password=strtolower($password);
            $sql = "INSERT INTO user (id,username,password,fullname,gender,Phone,email,photo_path,level,department,newPassword,courseProgress,progress,no_logins,no_coursepages_visited) VALUES('','$post_data[matric_no]','$password','$post_data[full_name]','$post_data[gender]','$post_data[phone]','$post_data[email]','$photo_func[1]','$post_data[level]','$post_data[department]','','185','','','');";
            $query = mysqli_query($link, $sql);  
            }
        
        }
    }
    public static function checkNotification($link, $post)
    {
        $subject=$post['subject'];
        $notification=$post['notification'];
        $sql3 = "SELECT * FROM notifications WHERE subject='$subject' AND notification='$notification';";
        $query3 = mysqli_query($link, $sql3);
        if (mysqli_num_rows($query3) == 0) {
            return true;
        } else {
            return false;
        }
       
    }
    public static function postNotification($post, $link)
    {   $subject=$post['subject'];
        $specific=$post['specifically_for'];
        $notification=$post['notification'];
        $millisec = time();
        $time_posted = date('d') . '-' . date('m') . '-' . date('Y') . ' ' . date('H') . ' : ' . date('i');
        if (Admin::checkNotification($link, $post) == true) {
            $sql4 = "INSERT INTO notifications (id,subject,specifically_for,notification,time_posted,milliseconds) VALUES('','$subject','$specific','$notification','$time_posted','$millisec');";
            $query4 = mysqli_query($link, $sql4);
            $sql5=($specific=='') ? "UPDATE user SET new_notification='true';" : "UPDATE user SET new_notification='true' WHERE username='$specific';";
            $query5=mysqli_query($link,$sql5);

        }else{
            
            
        }
    }
    public static function loadFeedbacks($link){
     $sql="SELECT * FROM feedback ORDER BY milliseconds DESC;";
     $query=mysqli_query($link,$sql);
     if(mysqli_num_rows($query)>0){
         $feedbacks=mysqli_fetch_all($query);
         return $feedbacks;
     }else{
         return null;
     }
    }

    public static function addCourseMaterials($post_data,$material,$link){
     $ext_array=['docx','pdf','ppt'];
     $material_size=$material['size'];
     $material_location=$material['tmp_name'];
     $material_name=$material['name'];
     $material_error=$material['error'];
     $material_ext=explode('.',$material_name)[1];
     echo $material_ext;
     if(in_array($material_ext,$ext_array)){
         echo '1';
       if($material_size <= 5000000){
           if($material_error === 0){
               $material_destination='learning_materials/'.$post_data['department'].'/'.$post_data['level'].'/'.'material-'.$post_data['category'].'.'.$material_ext;
               move_uploaded_file($material_location,$material_destination);
               echo $material_destination;
           }
       }
     }

     
    }
}
if (isset($_REQUEST['create_user'])) {
    Admin::addUsers($_REQUEST, $link);
    header('location:admin.php?user_created_successfully');
    print_r($_FILES['photo']);
}
if(isset($_REQUEST['post_notification'])){
    Admin::postNotification($_REQUEST,$link);
    header('location:admin.php?notification_posted_successfully');
 
}
 
if(isset($_REQUEST['upload_material'])){
    Admin::addCourseMaterials($_REQUEST,$_FILES['material'],$link);
   
}

