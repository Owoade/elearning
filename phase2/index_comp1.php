<?php
session_start();
include('logic/connection.php');
include('logic/logout.php');
include('logic/index_logic.php');
include('logic/security.php');

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="../phase2/remix-icon/remixicon.css">
        <title> E-learning | Home</title>
    </head>

    <body>
        <!-- Header Section -->
        <div class="mobile-menu-overlay">
            <div class="mobile-menu">
                <span><i class="ri-close-line"></i>Close </span>
                <ul>
                    <li><a href="#" class="active"><i class="ri-home-4-fill"></i>Home </i></a></li>
                    <li><a href="#" class="profile"><i class="ri-user-3-line"></i>Profile <i class="fa fa-angle-down arrow"></i></a>
                        <div class="sub-mobile-menu">
                            <a href="profile.phpl">My Profile</a>
                            <a href="#" class="courses">Courses <i class="fa fa-angle-down arrow"></i></a>
                            <div class="sub-mobile-menu2">
                                <a href="courses_comp1.php">My Courses</a>
                                <a href="">Tasks and Assignment</a>
                                <a href="">Course Form</a>
                                <a href="">Result Checker</a>
                            </div>
                        </div>

                    </li>
                    <li><a href="#"><i class="ri-file-line"></i>Admission Application </i></a></li>
                    <li><a href="settings.php"><i class="ri-settings-2-line"></i>Settings </i></a></li>
                    <li><a href="feedback.php"><i class="ri-question-line"></i>Need help? Contact Admin </i></a></li>
                    <li><a href="index.php?logout=true"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt=""> </a>
                    <p>e-learning Portal</p>
                </div>
                <nav>
                    <ul>
                        <li><a href="#" class="active"><i class="ri-home-4-fill"></i>Home </i></a></li>
                        <li><a href="#"><i class="ri-user-3-line"></i>Profile </i></a></li>
                        <li><a href="feedback.php"><i class="ri-question-line"></i>Contact Administrator </i></a></li>
                        <li><a href="notification.php" class="notification-link"><i class="ri-notification-3-line"></i>Notification </i></a></li>
                        <li><a href="index_comp1.php?logout=true"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
                    </ul>
                </nav>
                <div class="hamburger"> <a href="" style="color: #3b3b3b;"><i class="ri-notification-3-line bell"></i></a> <span class="main-menu"><span class="menu">Menu</span><i class="ri-menu-line burger"></i> </span>
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
                    <a href="courses_comp1.php">My Courses</a>
                    <a href="#">Tasks & Assignment </i></a>
                    <a href="#">Course Form </i></a>
                    <a href="#">Result Checking </i></a>
                </div>
                <h2 class="Title">e-Learning Portal</h2>
                <div class="grey-container-first">
                    <div class="left">
                        <h2><span id="greeting"> Good Morning,</span> <span class="name"><?php echo $fullname ?></span></h2>
                    </div>
                    <div class="right">
                        <p id="date">Monday, 25 January, 2020</p>
                    </div>

                </div>
                <div class="underline"></div>
                <div class="grey-container-second">
                    <div class="overview">

                        <div class="cards">
                            <section>
                                <h2>Dashboard</h2>
                                <h3>Overview</h3>
                                <div class="left-card">
                                    <ul>
                                        <li><strong>Full Name:</strong>
                                            <?php echo $result_user['fullname'] ?>
                                        </li>
                                        <li><strong>Matric Number:</strong>
                                            <?php echo $result_user['username'] ?>
                                        </li>
                                        <li><strong>Email:</strong>
                                            <?php echo $result_user['email'] ?>
                                        </li>
                                        <li><strong>Phone:</strong>
                                            <?php echo $result_user['Phone'] ?>
                                        </li>
                                        <li><strong>Department:</strong> Computer Science</li>
                                        <li><strong>Level:</strong>
                                            <?php echo $result_user['level'] ?>
                                        </li>
                                    </ul>
                                    <div class="profile-image">
                                        <img src="<?php echo $img ?>" alt="">
                                    </div>

                                </div>
                            </section>
                            <section>
                                <h2>Course details</h2>
                                <div class="right-card">
                                    <ul>
                                        <li><strong>Program:</strong> ND (Computer Sciene) Full Time</li>
                                        <li><strong>Number of courses registered for:</strong> 11</li>
                                        <li><strong>Number of outstanding courses:</strong> 1</li>
                                        <li><strong>Academic Session:</strong> 2019-First Semester</li>
                                        <li><strong>Total Units:</strong> 24</li>
                                    </ul>
                                    <div class="circular-bar">
                                        <svg>
                                        <circle cx="70" cy="70" r="60"></circle>
                                        
                                        <circle cx="70" cy="70" r="60" class="bar"></circle> 
                                    </svg>
                                        <span id="percentage">38%</span>
                                        <p>Program Completeness</p>

                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
                <div class="grey-container-third">
                    <div class="search-bar">
                        <input type="text" name="" id="search" placeholder="Search course e.g COM124">
                        <span class="fa fa-search" id="btn1"></span>
                        <span class="fa fa-search" id="btn2"></span>

                    </div>
                    <div class="course-list">
                        <h2>Course List</h2>
                        <h3>All Courses</h3>
                        <div class="course-cards">
                            <div class="wrap card-wrapper-search">
                                <div class="course-card" data-courseCode="COM121">
                                    <img src="img/java.png" alt="">
                                    <a href="com101.html" class="first-link">SCIENTIFIC PROGRAMMING USING <br> JAVA C0M121</a>
                                    <span class="units">3 Units</span>
                                    <br>

                                    <div class="underline"></div>

                                    <div class="bottom">
                                        <a href="#"><span><i class="fa fa-file-pdf-o"></i>Lecture slides: 5</span></a>
                                        <div class="icons">
                                            <div class="icon"><i class="ri-share-line"></i></div>
                                            <div class="icon"><i class="ri-bookmark-line"></i></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="course-card" data-courseCode="COM122">
                                    <img src="img/internet.jpg" alt="">
                                    <a href="#" class="first-link">INTRODUCTION TO <br>INTERNET C0M122</a>
                                    <span class="units">3 Units</span>
                                    <br>

                                    <div class="underline"></div>

                                    <div class="bottom">
                                        <a href="#"><span><i class="fa fa-file-pdf-o"></i>Lecture slides: 5</span></a>
                                        <div class="icons">
                                            <div class="icon"><i class="ri-share-line"></i></div>
                                            <div class="icon"><i class="ri-bookmark-line"></i></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="course-card" data-courseCode="COM123">
                                    <img src="img/package.jpg" alt="">
                                    <a href="#" class="first-link">COMPUTER PACKAGES <br>  C0M123</a>
                                    <span class="units">3 Units</span>
                                    <br>

                                    <div class="underline"></div>

                                    <div class="bottom">
                                        <a href="#"><span><i class="fa fa-file-pdf-o"></i>Lecture slides: 5</span></a>
                                        <div class="icons">
                                            <div class="icon"><i class="ri-share-line"></i></div>
                                            <div class="icon"><i class="ri-bookmark-line"></i></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="course-card" data-courseCode="COM124">
                                    <img src="img/comp_prog.jpg" alt="">
                                    <a href="#" class="first-link">DATA STRUCTURE AND ALGORITHM  <br> COM124</a>
                                    <span class="units">3 Units</span>
                                    <br>

                                    <div class="underline"></div>

                                    <div class="bottom">
                                        <a href="#"><span><i class="fa fa-file-pdf-o"></i>Lecture slides: 5</span></a>
                                        <div class="icons">
                                            <div class="icon"><i class="ri-share-line"></i></div>
                                            <div class="icon"><i class="ri-bookmark-line"></i></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="course-card" data-courseCode="COM125">
                                    <img src=" img/sad.jpg " alt=" ">
                                    <a href="# " class="first-link ">SYSTEM ANALYSIS AND <br>DESIGN COM125</a>
                                    <span class="units ">3 Units</span>
                                    <br>

                                    <div class="underline "></div>

                                    <div class="bottom ">
                                        <a href="# "><span><i class="fa fa-file-pdf-o "></i>Lecture slides: 5</span></a>
                                        <div class="icons ">
                                            <div class="icon "><i class="ri-share-line "></i></div>
                                            <div class="icon "><i class="ri-bookmark-line "></i></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="course-card" data-courseCode="COM126">
                                    <img src="img/trb.jpg " alt=" ">
                                    <a href="# " class="first-link ">PC UPGRADE AND  <br>MAINTAINANCE COM126</a>
                                    <span class="units ">2 Units</span>
                                    <br>

                                    <div class="underline "></div>

                                    <div class="bottom ">
                                        <a href="# "><span><i class="fa fa-file-pdf-o "></i>Lecture slides: 5</span></a>
                                        <div class="icons ">
                                            <div class="icon "><i class="ri-share-line "></i></div>
                                            <div class="icon "><i class="ri-bookmark-line "></i></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="load-more "><a href="courses_comp1.php " target="blank ">Load all Courses <i class="fa fa-angle-down "></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="grey-container-fourth ">
                    <div class="title-cards">
                        <div class="download ">
                            <h2>Download</h2>
                            <div class="download-card ">
                                <ul>
                                    <li><a href="# "><i class="fa fa-file-pdf-o "></i> ND I Timetable for 2019/2020 Academic Session </a></li>
                                    <li><a href="# "><i class="fa fa-file-pdf-o "></i>Schedule of Fees (ND I & ND II) </a></li>
                                    <li><a href="# "><i class="fa fa-file-pdf-o "></i>Apply for Student Alumni </a></li>
                                    <li><a href="# "><i class="fa fa-file-pdf-o "></i> Download Course Form </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="announcement ">
                            <h2>Announcement</h2>
                            <div class="announcement-card ">
                                <ul>
                                    <li><a href="# ">Provost's speech on violence within The School </a></li>
                                    <li><a href="# "> Board Finally decides...  </a></li>
                                    <li><a href="# ">Provost Cup Final</a></li>
                                    <li><a href="# ">Response to Nationwide Strike </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="help ">
                            <h2>Need Help?</h2>
                            <div class="help-card ">
                                <ul>
                                    <li><a href="# ">Contact Admin Support </a></li>
                                    <li><a href="# ">Contact Course Advisor </a></li>
                                    <li><a href="# ">Report an Issue </a></li>
                                    <li><a href="# ">FAQ </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container ">

                <ul>
                    <li>
                        <h3>Quick Links</h3>
                    </li>
                    <li><a href="# ">Print course forms</a></li>
                    <li><a href="# ">My Profile</a></li>
                    <li><a href="# ">Result Checking</a></li>
                    <li><a href="# ">E-Transcript Application</a></li>
                    <li><a href="# ">Booknarks</a></li>
                </ul>
                <ul>
                    <li>
                        <h3>Payments</h3>
                    </li>
                    <li><a href="# ">Application Payments</a></li>

                </ul>
                <ul>
                    <li>
                        <h3>News</h3>
                    </li>
                    <li><a href="# ">Provost Matriculation speech</a></li>
                </ul>
                <ul>
                    <li>
                        <h3>Contact Us</h3>
                    </li>
                    <li>
                        <p>college@fcahptib.edu.ng</p>
                        <a href="# ">registrar@fcahptib.edu.ng</a>
                    </li>
                    <li>
                        <p> Support Line: <br> +234 906 670 7545 <br> +234 906 670 7545 </p>
                    </li>
                    <li class="last-list-item ">
                        <p> FCAHPTIB,IAR&T, Moor <br>Plantation,Apata, Ibadan, Oyo <br> State, PMB 5029</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h3>About</h3>
                    </li>
                    <li>
                        <a href="# "> <img src="img/logo.png " alt=" "></a>
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
            <span style="display: none;" class="progress"><?php  echo $result_user['progress']?></span>
            <span style="display: none;" class="circle_value"><?php  echo $result_user['courseProgress']?></span>
            <span style="display: none;" class="active_user"><?php  echo $json_head_name ?></span>


        </footer>
        <style>
            .right-card{
                background-color: white;
            }
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
            .new-notification::after{
                background-color: red !important;
            }
        </style>
        <script>
            // Search Mobile
            let searchBox = document.querySelector("#search "),
                searchBtn1 = document.querySelector("#btn1 "),
                searchBtn2 = document.querySelector("#btn2 ");
            console.log(window);
            searchBtn2.addEventListener('click', () => {
                searchBox.classList.add("animation");
            });
            // Show Progress
            let bar = document.querySelector(".bar"),
                progress = document.querySelector(".progress"),
                circle_value = document.querySelector(".circle_value"),
                percent = document.querySelector("#percentage"),
                active_user = document.querySelector('.active_user'),
                notification_link=document.querySelector('.notification-link'),
                progress_object = {};

            //   Get Active User progress from JSON File
            let getProgress = new XMLHttpRequest();
            getProgress.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    progress_object = JSON.parse(this.responseText);
                    if (parseFloat(progress_object.barProgress) >= 28) {
                        bar.style.strokeDashoffset = `${parseFloat(progress_object.barProgress)}%`;
                    }
                    if (parseFloat(progress_object.progressInpercent) <= 100) {
                        percent.textContent = `${Math.floor(parseFloat(progress_object.progressInpercent))}%`;
                    }
                    if(progress_object.new_notification=='true'){
                        notification_link.classList.add('new-notification');
                    }
                }
            }
            getProgress.open("GET", `json/${active_user.innerHTML}_progress.json`, true);
            getProgress.send();
          
        </script>
        <script src="js/utility.js "></script>
        <script src="js/search.js "></script>
    </body>
<style>

    .left-card img {
    width: 140px;
    border-radius: 50%;
    height: 140px;
    margin-left: 3.1em;
    margin-right: 1em;
}

.profile-image {
    height: 100%;
    clip-path: unset;
    overflow: hidden;
    transform: translateY(1.5em);
}
@media (max-width:1215px) {
    .profile-image {
        transform: translateY(.5em);
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 1em;
    }
    .left-card img {
        margin-top: 1em;
        margin-right: 0;
        margin-left: 0;
    }
   
}

</style>
    </html>