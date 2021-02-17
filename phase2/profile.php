<?php 
session_start(); 
include('logic/security.php');
include('logic/load_profile_info.php');
include('logic/logout.php');
include('logic/return_index.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning | Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="../b/remix-icon/remixicon.css">
    <link rel="stylesheet" href="../phase2/remix-icon/remixicon.css">
</head>

<body>
    <div class="mobile-menu-overlay">
        <div class="mobile-menu">
            <span><i class="ri-close-line"></i>Close </span>
            <ul>
                <li><a href="profile.php?return" class="active"><i class="ri-home-4-fill"></i>Home </i></a></li>
                <li><a href="#" class="profile"><i class="ri-user-3-line"></i>Profile <i class="fa fa-angle-down arrow"></i></a>
                    <div class="sub-mobile-menu">
                        <a href="profile.html">My Profile</a>
                        <a href="#" class="profile.php?return_courses">Courses <i class="fa fa-angle-down arrow"></i></a>
                        <div class="sub-mobile-menu2">
                            <a href="profile.php?return_courses">My Courses</a>
                            <a href="">Tasks and Assignment</a>
                            <a href="">Course Form</a>
                            <a href="">Result Checker</a>
                        </div>
                    </div>

                </li>
                <li><a href="#"><i class="ri-file-line"></i>Admission Application </i></a></li>
                <li><a href="#"><i class="ri-settings-2-line"></i>Settings </i></a></li>
                <li><a href="#"><i class="ri-question-line"></i>Need help? Contact Admin </i></a></li>
                <li><a href="login.html"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="logo">
                <a href="profile.php?return"><img src="img/logo.png" alt=""> </a>
                <p>e-learning Portal</p>
            </div>
            <nav>
                <ul>
                    <li><a href="profile.php?return"><i class="ri-home-4-line"></i>Home </i></a></li>
                    <li><a href="#" class="active"><i class="ri-user-3-fill"></i>Profile </i></a></li>
                    <li><a href="#"><i class="ri-file-line"></i>Admission Application </i></a></li>
                    <li><a href="#" class="notification-link"><i class="ri-notification-3-line"></i>Notification </i></a></li>
                    <li><a href="index.php?logout=true"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
                </ul>
            </nav>
            <div class="hamburger"> <a href="notification.php" class="notification-link-2" style="color: #3b3b3b;"><i class="ri-notification-3-line bell"></i></a> <span class="main-menu"><span class="menu">Menu</span><i class="ri-menu-line burger"></i> </span>
                </div>
        </div>
    </header>
    <section class="grey-container">
        <div class="container">
            <div class="sub-menu1 sub-menu">
                <a href="profile.php" class="sub-link">My Profile</a>
                <a href="#" class="sub-link">Courses <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="sub-menu2 sub-menu">
                <a href="profile.php?return_courses">My Courses</a>
                <a href="#">Tasks & Assignment </i></a>
                <a href="#">Course Form </i></a>
                <a href="#">Result Checking </i></a>
            </div>
            <div class="right">
                <p id="date">Monday, 25 January, 2020</p>

            </div>
            <div class="underline"></div>
            <div class="bread-crumb">
                <span class="crumb"><p>Dashboard</p>   <i class="fa fa-chevron-right"></i> <p class="crumb-active">Profile</p> </span>
            </div>
            <div class="page-header">
                <h2>My Profile</h2>
                <div class="page-links">
                    <a href="profile.php" class="sub-active">Profile</a>
                    <a href="#">Uploads</a>
                    <a href="settings.php">Settings</a>

                </div>
            </div>
            <div class="wrap">
                <div class="personal-info-container">
                    <h3>Personal Information</h3>
                    <div class="personal-info">
                        <form action="logic/submit_form.php" method="POST">
                            <div class="sub-wrap">
                                <div class="title">
                                    <label for="Title">Title <span class="first">*</span></label>
                                    <select name="title" id="">
                                   <option value="null" class="field"><?php echo $title ?></option>
                                   <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                </select>
                                </div>

                                <div class="firstname">
                                    <label for="">First Name  <span class="first">*</span></label>
                                    <input type="text" name="firstname" id="" class="field" value="<?php echo $firstname ?>" readonly="true">
                                </div>
                                <div class="surname">
                                    <label for=""> Surname  <span class="first">*</span></label>
                                    <input type="text" name="surname" id="" class="field" value="<?php echo $surname ?>" readonly="true">
                                </div>


                                <div class="small">
                                    <div class="gender">
                                        <label for="">Gender <span class="first">*</span></label>
                                        <select name="gender" id=""  aria-readonly="true">
                                            <option value="<?php echo $gender ?>" class="field"><?php echo $gender ?></option>
                                             <option value="Male">Male</option>
                                             <option value="Female">Female</option>
                                             </select>
                                    </div>
                                    <div class="DOB">
                                        <label for="">Date of birth <span class="first">*</span></label>
                                        <input type="date" name="dob" id="" class="field" >
                                    </div>
                                </div>

                                <div class="state-origin">
                                    <label for="">State Of Origin <span class="first">*</span></label>
                                    <select name="state_origin" id="" >
                                            <option value="<?php echo $state_of_origin ?>" class="field"></option>
                                            <option value="Abia">Abia</option>
                                             <option value="Adamawa">Adamawa</option>
                                             </select>
                                </div>



                                <div class="Hometown">
                                    <label for=""> Hometown  <span class="first">*</span></label>
                                    <input type="text" name="hometown" id="" class="field" value="<?php echo $home_towm ?>">
                                </div>
                                <div class="marital">
                                    <label for="">Marital Stautus <span class="first">*</span></label>
                                    <select name="marital_status" id="" >
                                            <option value="<?php echo $marital_status ?>" class="field"><?php echo $marital_status ?></option>
                                            <option value="Single">Single</option>
                                             <option value="Married">Married</option>
                                             </select>
                                </div>








                                <div class="Email">
                                    <label for=""> Email  <span class="first">*</span></label>
                                    <input type="email" name="email" id="" class="field" value="<?php echo $email ?>">
                                </div>
                                <div class="Phone">
                                    <label for=""> Phone Number  <span class="first">*</span></label>
                                    <input type="number" name="phone" id="" class="field" value="<?php echo $phone ?>" readonly="true">


                                </div>
                                <div class="home-address">
                                    <label for="">Home Address  <span class="first">*</span></label>
                                    <input type="text" name="home_address" id="" class="field" value="<?php echo $home_address ?>" >

                                </div>


                                <div class="state">
                                    <label for="">State <span class="first">*</span></label>
                                    <select name="state" id="" >
                                            <option value="<?php echo $state ?>" class="field"><?php echo $state ?> </option>
                                            <option value="Abia">Abia</option>
                                             <option value="Adamawa">Adamawa</option>
                                             </select>
                                </div>
                                <div class="city">
                                    <label for="">City <span class="first">*</span></label>
                                    <input type="text" name="city" id="" class="field" value="<?php echo $city ?>">
                                </div>

                            </div>

                            <div class="btns">
                                <button>Cancel</button>
                                <input type="submit" value="Save Changes" name="personal">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="profile-photo-container">
                    <h3>Profile Photo</h3>

                    <div class="profile-photo">
                        <form action="?attempt">
                            <div class="img-container">
                               <?php  echo $img_container ?>
                            </div>
                            <input type="submit" name="" value="Change Photo"> <br>
                            <input type="submit" value="Save Photo">

                        </form>


                    </div>
                </div>

                <div class="next-of-kin-container">
                    <h3>Next of Kin Information</h3>
                    <div class="next-of-kin">
                        <form action="logic/submit_form.php" method="POST">
                            <div class="sub-wrap">
                                <div class="name">
                                    <label for="">Next-of-kin <span class="first">*</span></label>
                                    <input type="text" name="nok_name" id="" class="field" value="<?php echo $nok_name ?>">
                                </div>
                                <div class="relationship">
                                    <label for="">Relationship <span class="first">*</span></label>
                                    <input type="text" name="nok_relationship" id="" class="field"  value="<?php echo $nok_relationship ?>">
                                </div>
                                <div class="number">
                                    <label for="">Phone Number <span class="first">*</span></label>
                                    <input type="number" name="nok_phone" id="" class="field"  value="<?php echo $nok_phone ?>">
                                </div>
                                <div class="address">
                                    <label for="">Home Address  <span class="first">*</span></label>
                                    <input type="text" name="nok_address" id="" class="field"  value="<?php echo $nok_address ?>">
                                </div>
                                <div class="occupation">
                                    <label for="">Occupation <span class="first">*</span></label>
                                    <input type="text" name="nok_occupation" id="" class="field"  value="<?php echo $nok_occupation ?>">
                                </div>
                            </div>

                            <div class="btns">
                                <button>Cancel</button>
                                <input type="submit" value="Save Changes" name="nok">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="sponsor-container">
                    <h3>Sponsor's Information</h3>
                    <div class="sponsor">
                        <form action="logic/submit_form.php" method="POST">
                            <div class="sub-wrap">

                                <div class="name">
                                    <label for="">Sponsor <span class="first">*</span></label>
                                    <input type="text" name="sponsor_name" id="" class="field" value="<?php echo $sponsor_name ?>">
                                </div>


                                <div class="relationship">
                                    <label for="">Relationship <span class="first">*</span></label>
                                    <input type="text" name="sponsor_relationship" id="" class="field" value="<?php echo $sponsor_relationship ?>">
                                </div>
                                <div class="number">
                                    <label for="">Phone Number <span class="first">*</span></label>
                                    <input type="number" name="sponsor_phone" id="" class="field" value="<?php echo $sponsor_phone ?>">
                                </div>

                                <div class="address">
                                    <div class="address">
                                        <label for="">Home Address  <span class="first">*</span></label>
                                        <input type="text" name="sponsor_address" id="" class="field" value="<?php echo $sponsor_address ?>">
                                    </div>
                                </div>

                                <div class="occupation">
                                    <label for="">Occupation <span class="first">*</span></label>
                                    <input type="text" name="sponsor_occupation" id="" class="field" value="<?php echo $sponsor_occupation ?>">
                                </div>
                            </div>

                            <div class="btns">
                                <button>Cancel</button>
                                <input type="submit" value="Save Changes" name="sponsor">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="department-info-container">
                    <h3>Department Information</h3>
                    <div class="department-info">
                        <form action="?attempt" method="POST">
                            <div class="sub-wrap">
                                <div class="dept-name">
                                    <label for="">Department <span class="first">*</span></label>
                                    <input type="text" name="" id="" value="<?php echo $department ?>" readonly=true class="field">
                                </div>
                                <div class="Matric">
                                    <label for="">Matric <span class="first">*</span></label>
                                    <input type="text" name="" id="" value="<?php echo $matric_no ?>" readonly=true class="field">
                                </div>



                                <div class="level">
                                    <label for="">Level <span class="first">*</span></label>
                                    <input type="text" name="" id="" value="<?php echo $level ?>" readonly=true class="field">
                                </div>
                                <div class="Semester">
                                    <label for="">Semester <span class="first">*</span></label>
                                    <input type="text" name="" id="" readonly=true value="<?php echo $semester ?>" class="field">
                                </div>
                            </div>


                            <div class="btns">
                                <button>Cancel</button>
                                <input type="submit" value="Save Changes" disabled=true>
                            </div>
                        </form>




                    </div>
                </div>

            </div>








        </div>

    </section>
    <footer>
        <div class="container">

            <ul>
                <li>
                    <h3>Quick Links</h3>
                </li>
                <li><a href="#">Print course forms</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Result Checking</a></li>
                <li><a href="#">E-Transcript Application</a></li>
                <li><a href="#">Booknarks</a></li>
            </ul>
            <ul>
                <li>
                    <h3>Payments</h3>
                </li>
                <li><a href="#">Application Payments</a></li>

            </ul>
            <ul>
                <li>
                    <h3>News</h3>
                </li>
                <li><a href="#">Provost Matriculation speech</a></li>
            </ul>
            <ul>
                <li>
                    <h3>Contact Us</h3>
                </li>
                <li>
                    <p>college@fcahptib.edu.ng</p>
                    <a href="#">registrar@fcahptib.edu.ng</a>
                </li>
                <li>
                    <p> Support Line: <br> +234 906 670 7545 <br> +234 906 670 7545 </p>
                </li>
                <li class="last-list-item">
                    <p> FCAHPTIB,IAR&T, Moor <br>Plantation,Apata, Ibadan, Oyo <br> State, PMB 5029</p>
                </li>
            </ul>
            <ul>
                <li>
                    <h3>About</h3>
                </li>
                <li>
                    <a href="#"> <img src="img/logo.png" alt=""></a>
                    <p>e-learning Portal</p>
                </li>
                <li>
                    <p>Citadel of seamless, affordable and effective learning with World-Class technology </p>
                </li>
                <li>
                    <p> &copy; 2020 FCAHPT. All Right Reserved.</p>
                </li>
            </ul>
        </div>
    </footer>
    <style>
        
        .notification-link{
          position: relative;
        }
        .notification-link::after{
          content: "";
          position: absolute;
          background-color: transparent;
          height: 6px;
          width: 6px;
          border-radius:50%;
          left:0;
        }
        .notification-link-2{
          position: relative;
          display: block;
        }
        .notification-link-2::after{
          content: "";
          position: absolute;
          background-color: transparent;
          height: 10px;
          width: 10px;
          border-radius:50%;
          left:-3.1em;
        }
        .new-notification::after{
            background-color: red !important;
        }
        .profile-photo .img-container{
            clip-path: unset;
        }
        .img-container img{
            width: 170px;
            height: 170px;
            border-radius: 50%;
        }
        @media(max-width:600px){
            .notification-link-2::after{
          content: "";
          position: absolute;
          background-color: transparent;
          height: 6px;
          width: 6px;
          border-radius:50%;
          left:-3.56em;
          top: 5px;

        } 
        .img-container img{
            width: 120px;
            height: 120px;
            
        }
        }
    </style>
    <script src="js/utility.js"></script>
    <script>
    let field=document.querySelectorAll('.field'),
        is_star=document.querySelectorAll('.first');
     field.forEach((each,index)=>{
         if(each.value!=""){
             is_star[index].style.display='none';
         }
     })

  
        //   Check for Errors encountered while changing password
        let notification_link=document.querySelector('.notification-link'),
    notification_link_2=document.querySelector('.notification-link-2');
         
        // Notification alert
        let notifAlert=new XMLHttpRequest();
        notifAlert.onreadystatechange=function(){
            if(this.status==200 && this.readyState==4){
                let new_notification=JSON.parse(this.responseText).new_notification; 
                if(new_notification=='true'){
                    notification_link.classList.add('new-notification');
                    notification_link_2.classList.add('new-notification');
                }
            }
        }
        notifAlert.open("GET",'json/<?php echo $_SESSION['active_user_key'] ?>_progress.json',true);
        notifAlert.send();
      
  
    </script>

</body>

</html>