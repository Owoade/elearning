<?php 
include('logic/login_logic.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="remix-icon/remixicon.css">
    <title>E-learning|login</title>
</head>

<body>
    <div class="content">
        <main>
            <header>
                <img src="img/logo.png" alt="">
                <h2> E-LEARNING PORTAL </h2>
                <P>Student Login page</P>
            </header>
            <div class="form-area">

                <form action="login.php" method="post" >
                   <section class="user" id="user">
                    <i class="ri-user-3-line"></i>
                    <p>Matric number</p>
                </section>
                <input type="text" id="username" name="matric_no">
                <section class="pass" id="pass">
                    <i class="ri-key-2-line"></i>
                    <p>Password</p>
                </section><i class="fa fa-eye" id="show"></i><i class="fa fa-eye-slash" id="hide"></i>
                <input type="password" name="password" id="password">
                <input type="submit" value="Login" name="validate" >   
                </form>
              
                <div class="bottom1">
                    <p>Forgot Password? <a href="#">Click here</a></p>
                </div>
                <div class="bottom2">
                    <p>2020 FCAHPT. All Right Reserved</p>
                </div>


            </div>
        </main>
        <span class="err" style="display: none;"><?php echo $error ?></span>
    </div>
    <div class="overlay"></div>
    <script src="js/login.js"></script>
<script>
let err =document.querySelector('.err');
if(err.textContent==='1'){
    alert('Invalid details');
}
</script>
</body>

</html>