<?php
    include('../phpscripts/connection.php');  
    $failstate = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ( !isset($_POST['user'], $_POST['pass']) ) {
            // Could not get the data that should have been sent.
            exit('Please fill both the username and password fields!');
        }
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
        $loginstate = "Fill in password";
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "SELECT  * FROM user WHERE userName = '$username' AND Pass = '$password'";  
            $result = mysqli_query($con, $sql);  
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
            
            if($count == 1){  
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $username;
                $_SESSION['fullName'] = $rows["FullName"];
                $_SESSION['profilePic'] = $rows["profilePic"];;
                $_SESSION['userType'] = $rows["userType"];
                $_SESSION['commentState'] = $rows["commentState"];
                header('Location: ..\index\index.php');
                $failstate = "";
            }  
            else{  
                $failstate = "Wrong username or pass word";
            }
    }
?>
<!DOCTYPE html>
<html>
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
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
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
                                <a class="dropdown-item" href="../Service/service.php">Trò Chơi Trực Tuyến</a>
                                <a class="dropdown-item" href="../Service/service.php">Nền Tảng Kết Nối</a>
                                <a class="dropdown-item" href="../Service/service.php">Tài Chính và Thanh Toán</a>
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
            <a class="btn btn-primary my-btn" href="../signUp/signUp.php">Sign Up</a>
        </nav>
        
        <div class="header row">
            <div class="container col-lg-6">
                <h1>Đăng Nhập</h1>
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
            <form id="f1"  onsubmit = "return validation()" action="" class="signUpBackground container col-lg-5" method = "post">
              
                <div class="input-group mb-3">
                  <input     type="text" class="form-control" id="user" name="user" placeholder="Username">
                </div>
              
                
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Fill in password">
                </div>

                <h4>
                    <?php
                    echo $failstate;
                    ?>
                </h4>

                <div class="input-group mb-3">
                    <input class="btn btn-primary btn-block" type="submit" id="btn"></input>
                </div>
                <!-- <div class="input-group mb-3 row">
                    <a href="#" class="btn btn-link col-sm-4 signInlink" >Quên mật khẩu?</a>
                </div>

                <div class="container center face-gg-signin">
                    <button class="btn btn-outline-primary col-sm-4 icon-signIn">
                        <img src="images/facebook.svg" alt="#">
                        facebook
                    </button>
                    <button class="btn btn-outline-primary col-sm-4 icon-signIn">
                        <img src="images/google.svg" alt="#">
                        Google
                    </button>
                </div> -->

                <div class="input-group mb-3 row inkwellinl">
                    <span class="container col-sm-6"><p class="have-account">Bạn không có tài khoản?</p></span>
                    <a href="../signUp/signUp.php" class="btn btn-link col-sm-4 signInlink" >Đăng Ký</a>
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

                
                    if(id.length==0) {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length==0) {  
                        alert("Password field is empty");  
                        return false;  
                    }  

                    return true;                           
            }  
        </script>      
    </body>
    
</html>