<?php 
session_start();
include('logic/security.php');
include('logic/logout.php');
include('logic/get_feedback.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/feedback_admin.css">
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="../phase2/remix-icon/remixicon.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="mobile-menu-overlay">
        <div class="mobile-menu">
            <span><i class="ri-close-line"></i>Close </span>
            <ul>
                <li><a href="index.html" class="active"><i class="ri-home-4-fill"></i>Home </i></a></li>
                <li><a href="#" class="profile"><i class="ri-user-3-line"></i>Profile <i class="fa fa-angle-down arrow"></i></a>
                    <div class="sub-mobile-menu">
                        <a href="">My Profile</a>
                        <a href="#" class="courses">Courses <i class="fa fa-angle-down arrow"></i></a>
                        <div class="sub-mobile-menu2">
                            <a href="courses.html">My Courses</a>
                            <a href="">Tasks and Assignment</a>
                            <a href="">Course Form</a>
                            <a href="">Result Checker</a>
                        </div>
                    </div>

                </li>
                <li><a href="#"><i class="ri-file-line"></i>Admission Application </i></a></li>
                <li><a href="settings.html"><i class="ri-settings-2-line"></i>Settings </i></a></li>
                <li><a href="#"><i class="ri-question-line"></i>Need help? Contact Admin </i></a></li>
                <li><a href="login.html"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">

            <div class="logo">
                <a href=""><img src="img/logo.png" alt=""> </a>
                <p>e-learning Portal</p>
            </div>
            <nav>
                <ul>
                    <li><a href="admin.php"><i class="ri-home-4-line"></i>Home </i></a></li>
                    <li><a href="#"><i class="ri-user-3-line"></i>Profile </i></a></li>
                    <li><a href="#"><i class="ri-file-line"></i>Admission Application </i></a></li>
                    <li><a href="#" class="active"><i class="ri-question-fill"></i>Feedback </i></a></li>
                    <li><a href="login.html"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
                </ul>
            </nav>
            <div class="hamburger"> <a href="" style="color: #3b3b3b;"><i class="ri-notification-3-line bell"></i></a> <span class="main-menu"><span class="menu">Menu</span><i class="ri-menu-line burger"></i> </span>
            </div>
        </div>
    </header>
    <section class="grey-container">
        <div class="container">

            <div class="sub-menu1 sub-menu">
                <a href="profile.html" class="sub-link">My Profile</a>
                <a href="#" class="sub-link">Courses <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="sub-menu2 sub-menu">
                <a href="courses">My Courses</a>
                <a href="#">Tasks & Assignment </i></a>
                <a href="#">Course Form </i></a>
                <a href="#">Result Checking </i></a>
            </div>
            <div class="right">
                <p id="date">Monday, 25 January, 2020</p>

            </div>
            <div class="underline"></div>
            <div class="bread-crumb">
                <span class="crumb"><p>Dashboard</p>  <i class="fa fa-chevron-right"></i>  <p class="crumb-active">Feedbacks</p> </span>
            </div>

            <div class="feedback-section">
                <?php echo $empty_msg ?>
                <?php echo $feedback_container ?>
                <!-- <div class="feedback-card">
                    <h3>NDCOM/18/289 ND II</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta fugiat saepe explicabo temporibus? Magnam, fugit! Omnis id placeat itaque exercitationem.</p>

                </div>
                <div class="feedback-card">
                    <h3>THE COVID-19 PRINCIPLE FOR RESUMPTION</h3>
                    <p>Lorem ipsum Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis odio excepturi ab quam eum alias, quo minima quisquam nesciunt doloribus qui corporis blanditiis provident neque nemo accusamus dolor saepe distinctio.
                        dolor sit amet consectetur adipisicing elit. Dicta fugiat saepe explicabo temporibus? Magnam, fugit! Omnis id placeat itaque exercitationem.</p>

                </div>
                <div class="feedback-card">
                    <h3>THE COVID-19 PRINCIPLE FOR RESUMPTION</h3>
                    <p>Lorem ipsum Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis odio excepturi ab quam eum alias, quo minima quisquam nesciunt doloribus qui corporis blanditiis provident neque nemo accusamus dolor saepe distinctio.
                        dolor sit amet consectetur adipisicing elit. Dicta fugiat saepe explicabo temporibus? Magnam, fugit! Omnis id placeat itaque exercitationem.</p>

                </div>
                <div class="feedback-card">
                    <h3>THE COVID-19 PRINCIPLE FOR RESUMPTION</h3>
                    <p>Lorem ipsum Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis odio excepturi ab quam eum alias, quo minima quisquam nesciunt doloribus qui corporis blanditiis provident neque nemo accusamus dolor saepe distinctio.
                        dolor sit amet consectetur adipisicing elit. Dicta fugiat saepe explicabo temporibus? Magnam, fugit! Omnis id placeat itaque exercitationem.</p>

                </div> -->





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
                    <h3>About Us</h3>
                </li>
                <li>
                    <a href="#"> <img src="img/logo.png" alt=""></a>
                    <p>e-learning Portal</p>
                </li>
                <li>
                    <p>Citadel of seamless, affordable and effective learning with World-Class technology </p>
                </li>
                <li>
                    <p> &copy;2020 FCAHPT. All Right Reserved.</p>
                </li>
            </ul>
        </div>
    </footer>
        <style>
        .empty-msg{
            display: block;
            color: grey;
           transform:translateY(1.5em) ;
           text-align: center;
        }
        @media(max-width:600px){
            .empty-msg{
                text-align:left; 
            }
        }
    </style>
    <script src="js/utility.js"></script>
</body>

</html>