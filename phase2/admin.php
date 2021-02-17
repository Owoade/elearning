<?php 
session_start();
include('logic/security.php');
include('logic/admin_logic.php');
include('logic/logout.php');

print_r($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | E-learning</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="../phase2/remix-icon/remixicon.css">
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
                <li><a href="login.php"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
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
                    <li><a href="index.html" class="active"><i class="ri-home-4-fill"></i>Home </i></a></li>
                    <li><a href="#"><i class="ri-user-3-line"></i>Profile </i></a></li>
                    <li><a href="#"><i class="ri-file-line"></i>Statistics </i></a></li>
                    <li><a href="#"><i class="ri-question-line"></i>Feedback </i></a></li>
                    <li><a href="login.php"><i class="ri-logout-box-r-line"></i>Logout </i></a></li>
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
                <span class="crumb"><p>Dashboard</p>  <i class="fa fa-chevron-right"></i>  <p class="crumb-active">Home</p> </span>
            </div>

            <div class="admin-section">
                <div class="add-new-section">
                    <h1>Add New Student</h1>
                    <div class="add-new-form-area">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <label for="">Matric No</label>
                            <input type="text" name="matric_no" id="">
                            <label for="">Fullname</label>
                            <input type="text" name="full_name" id="">
                            <label for="">E-mail</label>
                            <input type="text" name="email" id="">
                            <label for="">Phone Number</label>
                            <input type="number" name="phone" id="">
                            <label for="">Level</label>
                            <select name="level" id="">
                                <option value="NDI">ND I</option>
                                <option value="NDII">ND II</option>
                                <option value="HNDI">HND I</option>
                                <option value="HNDII">HND II</option>
                            </select>
                            <label for="">Department</label>
                            <select name="department" id="">
                                <option value="Computer Science">Computer Science</option>
                                <option value="Statistics">Statistics</option>
                                <option value="Animal Health and Production Tech">Animal Health and Production Tech</option>
                                <option value="Vetinary Laboratory Technology">Vetinary Laboratory Technology</option>
                                <option value="Science Laboratory Technology">Science Laboratory Technology</option>
                                <option value="Fisheries Technology">Fisheries Technology</option>
                                <option value="Fisheries (HND)">Fisheries (HND)</option>
                                <option value="Animal Health (HND)">Animal Health (HND)</option>
                                <option value="Animal Production (HND)">Animal Production (HND)</option>
                                <option value="Agricultural Extension and Management (HND)">Agricultural Extension and Management (HND)</option>
                            </select>
                            <label for="">Gender</label>
                            <select name="gender" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="">Passport Photograph</label>
                            <input type="file" name="photo" id="">

                            <button type="reset">Cancel</button>
                            <button type="submit" name="create_user">Create User</button>


                        </form>
                    </div>
                </div>
                <div class="first-wrapper">
                    <div class="notification-section">
                        <h1>Post a Notification</h1>
                        <div class="notification-form">
                            <form action="">
                                <label for="">Subject</label>
                                <input type="text" name="subject">
                                <label for="">Specifically for</label>
                                <input type="text" name="specifically_for">
                                <label for="">Notification</label>
                                <textarea name="notification" id="" cols="30" rows="10"></textarea>
                                <button type="reset">Cancel</button>
                                <button type="submit" name="post_notification">Post</button>

                            </form>
                        </div>
                    </div>
                    <div class="materials-section">
                        <h1>Upload a learning Material</h1>
                        <div class="materials-form">
                            <form action=""  enctype="multipart/form-data" method="POST">
                                <label for="">Choose Department</label>
                                <select name="department" id="">
                                    <option value="computer_science">Computer Science</option>
                                    <option value="statistics">Statistics</option>
                                    <option value="ahpt">Animal Health and Production Tech</option>
                                    <option value="slt">Vetinary Laboratory Technology</option>
                                    <option value="vlt">Science Laboratory Technology</option>
                                    <option value="fisheries">Fisheries Technology</option>
                                    <option value="animal_health">Animal Health (HND)</option>
                                    <option value="animal_production">Animal Production (HND)</option>
                                    <option value="agricultural_extension">Agricultural Extension and Management (HND)</option>
                                </select>
                                <label for="">Choose Level</label>
                                <select name="level" id="">
                                <option value="nd1">NDI</option>
                                <option value="nd2">NDII</option>
                                <option value="hnd1">HNDI</option>
                                <option value="hnd2">HNDII</option>
                            </select>
                                <label for="">Choose Category</label>
                                <select name="category" id="">
                                <option value="1">First-material</option>
                                <option value="2">Second Material</option>
                                <option value="3">Third Mateial</option>
                                <option value="4">Fourth Material</option>
                            </select>
                                <label for="">Choose Material</label>
                                <input type="file" name="material" id="">

                                <button type="reset">Cancel</button>
                                <button type="submit" name="upload_material">Upload</button>
                            </form>

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
    <script src="js/utility.js"></script>
</body>

</html>