<?php 
session_start();
include('logic/security.php');
include('logic/logout.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-learning | Courses</title>
    <link rel="stylesheet" href="css/courses.css">
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="../phase2/remix-icon/remixicon.css">
</head>

<body>
    <div class="mobile-menu-overlay">
        <div class="mobile-menu">
            <span><i class="ri-close-line"></i>Close </span>
            <ul>
                <li><a href="index_comp1.php" ><i class="ri-home-4-fill"></i>Home </i></a></li>
                <li><a href="#" class="profile"><i class="ri-user-3-line"></i>Profile <i class="fa fa-angle-down arrow"></i></a>
                    <div class="sub-mobile-menu">
                        <a href="profile.php">My Profile</a>
                        <a href="courses_comp1.php" class="courses active">Courses <i class="fa fa-angle-down arrow"></i></a>
                        <div class="sub-mobile-menu2">
                            <a href="">My Courses</a>
                            <a href="">Tasks and Assignment</a>
                            <a href="">Course Form</a>
                            <a href="">Result Checker</a>
                        </div>
                    </div>

                </li>
                <li><a href="#"><i class="ri-file-line"></i>Admission Application </i></a></li>
                <li><a href="settings.php"><i class="ri-settings-2-line"></i>Settings </i></a></li>
                <li><a href="#"><i class="ri-question-line"></i>Need help? Contact Admin </i></a></li>
                <li><a href="index_comp1.php?logout=true"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
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
                    <li><a href="index_comp1.php"><i class="ri-home-4-line"></i>Home </i></a></li>
                    <li><a href="#" class="active"><i class="ri-user-3-fill"></i>Profile </i></a></li>
                    <li><a href="#"><i class="ri-question-line"></i>Contact Administrator </i></a></li>
                    <li><a href="#"><i class="ri-notification-3-line"></i>Notification </i></a></li>
                    <li><a href="index_comp1.php?logout=true"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
                </ul>
            </nav>
            <div class="hamburger"> <a href="" class="notification-link-2" style="color: #3b3b3b;"><i class="ri-notification-3-line bell"></i></a> <span class="main-menu"><span class="menu">Menu</span><i class="ri-menu-line burger"></i> </span>
            </div>
        </div>
    </header>
    <section class="grey-container">
        <div class="container">
            <div class="sub-menu1 sub-menu">
                <a href="profile.php" class="sub-link">Profile</a>
                <a href="#" class="sub-link">Courses <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="sub-menu2 sub-menu">
                <a href="courses_comp1.php">My Courses</a>
                <a href="#">Tasks & Assignment </i></a>
                <a href="#">Course Form </i></a>
                <a href="#">Result Checking </i></a>
            </div>
            <div class="right">
                <p id="date">Monday, 25 January, 2020</p>

            </div>
            <div class="underline"></div>
            <div class="bread-crumb">
                <span class="crumb"><p>Dashboard</p>  <i class="fa fa-chevron-right"></i> <p>Profile</p>  <i class="fa fa-chevron-right"></i> <p class="crumb-active">My Courses</p> </span>
            </div>
            <div class="page-header">
                <h2>My Courses</h2>
                <div class="page-links">
                    <a href="#" class="sub-active">My Courses</a>
                    <a href="#">Course Form</a>
                    <a href="#">Result Checker</a>
                </div>
            </div>
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
                            <a href="#" class="first-link">SCIETIFIC PROGRAMMING USING <br>JAVA C0M121</a>
                            <span class="units">2 Units</span>
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
                        <div class="course-card">
                            <img src="img/internet.jpg" alt="" data-courseCode="COM122">
                            <a href="#" class="first-link">INTRODUCTION TO INTERNET<br> ELECTRONICS C0M122</a>
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
                            <a href="#" class="first-link">COMPUTER PACKAGES  <br> C0M113</a>
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
                            <a href="#" class="first-link">DATA STRUCTURE AND <br>ALGORITHM COM124</a>
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
                            <img src="img/sad.jpg" alt="">
                            <a href="#" class="first-link">SYSTEM ANALYSIS AND <br>DESIGN COM125</a>
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
                        <div class="course-card" data-courseCode="COM126">
                            <img src="img/trb.jpg" alt="">
                            <a href="#" class="first-link">PC UPGRADE AND <br>MAINTAINANCE COM126</a>
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
                        <div class="course-card" data-courseCode="MTH121">
                            <img src="img/calculus.jpg" alt="">
                            <a href="#" class="first-link"> CALCULUS I <br> MTH121</a>
                            <span class="units">2 Units</span>
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
                        <div class="course-card" data-courseCode="GNS125">
                            <img src="img/lib.jpg" alt="">
                            <a href="#" class="first-link">USE OF LIBRARY <br>GNS125</a>
                            <span class="units">2 Units</span>
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
                        <div class="course-card" data-courseCode="EED126">
                            <img src="img/eed.jpg" alt="">
                            <a href="#" class="first-link">PRATICE OF ENTERPRENEURSHIP <br>EED126</a>
                            <span class="units">2 Units</span>
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
                        <div class="course-card" data-courseCode="AGT124">
                            <img src="img/agt.jpg" alt="">
                            <a href="#" class="first-link">RURAL SOCIOLOGY<br> AGT124</a>
                            <span class="units">2 Units</span>
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
                    <h3>About </h3>
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
        .notification-link {
            position: relative;
        }
        
        .notification-link::after {
            content: "";
            position: absolute;
            background-color: transparent;
            height: 6px;
            width: 6px;
            border-radius: 50%;
            left: 0;
        }
        
        .notification-link-2 {
            position: relative;
            display: block;
        }
        
        .notification-link-2::after {
            content: "";
            position: absolute;
            background-color: transparent;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            left: -3.1em;
        }
        
        .new-notification::after {
            background-color: red !important;
        }
        
        @media(max-width:600px) {
            .notification-link-2::after {
                content: "";
                position: absolute;
                background-color: transparent;
                height: 6px;
                width: 6px;
                border-radius: 50%;
                left: -3.56em;
                top: 5px;
            }
        }
    </style>
    <script src="js/utility.js"></script>
    <script src="js/search.js"></script>
    <script>
        // Search Mobile
        let searchBox = document.querySelector("#search"),
            searchBtn1 = document.querySelector("#btn1"),
            searchBtn2 = document.querySelector("#btn2");
        console.log(searchBtn1, searchBox)
        searchBtn2.addEventListener('click', () => {
            searchBox.classList.add("animation");
        });
        let notification_link = document.querySelector('.notification-link'),
            notification_link_2 = document.querySelector('.notification-link-2');

        // Notification alert
        let notifAlert = new XMLHttpRequest();
        notifAlert.onreadystatechange = function() {
            if (this.status == 200 && this.readyState == 4) {
                let new_notification = JSON.parse(this.responseText).new_notification;
                if (new_notification == 'true') {
                    notification_link.classList.add('new-notification');
                    notification_link_2.classList.add('new-notification');
                }
            }
        }
        notifAlert.open("GET", 'json/<?php echo $_SESSION['active_user_key '] ?>_progress.json', true);
        notifAlert.send();
    </script>
</body>

</html>