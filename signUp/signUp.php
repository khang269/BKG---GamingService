<!-- TODO: Khai- trang gioi thieu  
    https://www.vng.com.vn/article/about/management.html
    https://www.vng.com.vn/news/shareholders.1.html
    https://www.vng.com.vn/article/about/ourculture.html
    may trang nay ngan nen gom lai thanh mot trang lon nhe ...
-->


<?php
    include('../phpscripts/connection.php');  
    
    if(!isset($failstate)){
        $failstate = "";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ( !isset($_POST['user'], $_POST['pass']) ) {
            // Could not get the data that should have been sent.
            exit('Please fill both the username and password fields!');
        }
    
        $username = $_POST['user'];
        $fullname = $_POST['fullname']  ;
        $password = $_POST['pass'];  
        $email = $_POST['email'];
        $phone = $_POST['phone'];
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "INSERT INTO user (userName, Pass, Email, userType, FullName, PhoneNumber)
            VALUES ('$username', '$password', '$email', 0, '$fullname', '$phone')";
            
    
            if($con->query($sql) === TRUE){  
                $failstate = "";
                header('Location: ../signIn/signIn.php');
            }  
            else{  
                $failstate = "Username already exist";
                header('Location: ./signUp.php');
            }
    }
?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        <title>Bootstrap Tutorial Sample Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container">
                <a href="../index" class="navbar-brand"><img src="images/logo2.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="../index/index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="../introduction/introduction.php" class="nav-link">Chúng tôi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sản Phẩm</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../Service/service.php#game">Trò Chơi Trực Tuyến</a>
                                <a class="dropdown-item" href="../Service/service.php#cloud">Nền Tảng Kết Nối</a>
                                <a class="dropdown-item" href="../Service/service.php#pay">Tài Chính và Thanh Toán</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kết Nối</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../contact/contact.php">Văn Phòng</a>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
            <a class="btn btn-primary my-btn" href="../signIn/signIn.php">Sign In</a>
        </nav>

        <div class="header row">
            <div class="container col-lg-6">
                <h1>Đăng Ký</h1>
                <div class="container logo-signIn-beside center"><img class="" src="images/logo2.png" alt=""></div>
                <div class="row text-center justify-content-center">
                    <div class="col-sm-4">
                        <img src="images/doan_nhan_thach_thuc.png" alt="#">
                        <p>Đón Nhận Thách Thức</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="images/phat_trien_doi_tac.png" alt="#">
                        <p>Phát Triển Đối tác</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="images/giu_gin_chinh_truc.png" alt="#">
                        <p>Giữ Gìn Chính Trực</p>
                    </div>
                </div>
            </div>
            <form id="f1" action="" method="post" class="signUpBackground container col-lg-5">

                <div class="input-group mb-3">
                    <input id="name" name="fullname" type="text" class="form-control" placeholder="Tên">
                </div>
                <div class="input-group mb-3">
                  <input id="user" name="user" type="text" class="form-control" placeholder="Username">
                </div>
              
                <div class="input-group mb-3">
                  <input id="email" name="email" type="text" class="form-control" placeholder="Địa chỉ Email">
                  <div class="input-group-append">
                    <span class="input-group-text">@example.com</span>
                  </div>
                </div>
                <div class="input-group mb-3">
                    
                    <input id="phone" name="phone" type="text" class="form-control" placeholder="Số điện thoại">
                    <div class="input-group-append">
                        <span class="input-group-text">0987654321</span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="pass" name="pass" type="password" class="form-control" placeholder="Mật khẩu">
                </div>
                  <div class="input-group mb-3">
                    <input id="passcheck" name="passcheck" type="password" class="form-control" placeholder="Nhập lại mật khẩu">
                </div>
                <div class="input-group mb-3">
                    <input id="btn" type="submit" class="btn btn-primary btn-block"></input>
                </div>
                <div class="input-group mb-3 rows">
                    <span class="container col-sm-6"><p class="have-account">Bạn đã có tài khoản?</p></span>
                    <a href="../signIn/signIn.php" class="btn btn-link col-sm-4 signInlink" >Đăng Nhập</a>
                </div>
            </form>
        </div>



        <footer>
            <div class="footer-page">
                <div class="footer-page m-auto text-center">
                    <div class="col-12 social-padding">
                        <div class="social-bt">
                            <a href="#" target="_blank" class="icon-footer"><img src="images/facebook.svg" alt="">
                            </a>
                            <a href="#" target="_blank" class="icon-footer"><img src="images/youtube.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="footer-copyright col-12 text-center text-light">
                        Copyright © 2020 3K1N Team. All right reserved.
                    </div>
                </div>
            </div>
        </footer>

        <script>  
            function validation()  
            {  
                var id=document.getElementById('user').value;  
                var ps=document.getElementById('pass').value;   
                var email=document.getElementById('email').value;
                var passcheck = document.getElementById('passcheck').value;

                if(id.length==0) {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length==0) {  
                    alert("Password field is empty");  
                    return false;  
                }  
                if (email.length < 6) {  
                    alert("Password field must be higher than 6 character");  
                    return false;  
                }  
                
                if(passcheck != ps){
                    alert("Your password check does not match");  
                    return false;  
                }

                return true;
            }  
        </script>
    </body>
 </html>
