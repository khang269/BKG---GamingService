<?php
    include('../phpscripts/connection.php');  
    $failstate = "";

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
               <a href="#" class="navbar-brand"><img src="images/logo2.png" alt="logo-trademark"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponsive">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navResponsive">
                   <ul class="navbar-nav ml-auto">
                       <li class="nav-item dropdown">
                           <a href="../index.php" class="nav-link">Home</a>
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
            <?php
                if($_SESSION['loggedin'] === FALSE){
                    echo '<a class="btn btn-primary my-btn" href="../signUp/signUp.php">Sign Up</a>';
                }else{
                    echo '
                    <img src="./images/user.png" class="rounded-circle" alt="" height="50px" width="50px">
                    <div class="dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                          Username
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="../profile-manage/profile.php">Profile</a>
                          <a class="dropdown-item" href="../phpscripts/logout.php">Logout</a>
                        </div>
                    </div>
                    ';
                }

            ?>
       </nav>
       <div class="header">
           <div class="container">
               <h1>PROFILE</h1>
               <div class="row linknav">
                   <a class="mainnav" href="../">Trang Chủ</a>
                   <a href="#">Profile</a>
               </div>
           </div>
       </div>
       <div class="container body-profile">
            <div class="row">
                <div class="col-lg-3">
                    <div class="row">
                        <img src="./images/user.png" class="rounded-circle" alt="" height="50px" width="50px">
                        <h3>Username</h3>
                    </div>
                    <div class="action">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td><img src="images/curriculum.svg" alt="" height="30px" width="30px"></td>
                                    <td><a href="#" class="btn btn-link">Profile</a></td>
                                    
                                </tr>
                                <tr>
                                    <td><img src="images/logout.svg" alt="" height="30px" width="30px"></td>
                                    <td><a href="../phpscripts/logout.php" class="btn btn-link">Logout</a></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4>Hồ sơ</h4>
                            <p>Quản lý hồ sơ</p>
                            <div class="form-edit">
                                <div class="element row">
                                    <div class="label col-sm-3">
                                        Username: 
                                    </div>
                                    <div class="value col-sm-8">
                                        <input type="text" class="form-control" value="Example" disabled>
                                    </div>
                                </div>
                                <div class="element row">
                                    <div class="label col-sm-3">
                                        Họ và tên: 
                                    </div>
                                    <div class="value col-sm-8">
                                        <input type="text" class="form-control" value="Nguyen Van A">
                                    </div>
                                </div>
                                <div class="element row">
                                    <div class="label col-sm-3">
                                        Email: 
                                    </div>
                                    <div class="value col-sm-8">
                                        <input type="text" class="form-control" value="Anguyen@Example.com">
                                    </div>
                                </div>
                                <div class="element row">
                                    <div class="label col-sm-3">
                                        Số điện thoại: 
                                    </div>
                                    <div class="value col-sm-8">
                                        <input type="text" class="form-control" value="0987456321">
                                    </div>
                                </div>
                                <div class="element row">
                                    <div class="label col-sm-3">
                                        Địa chỉ: 
                                    </div>
                                    <div class="value col-sm-8">
                                        <input type="text" class="form-control" value="123, CMT8, q**, tp HCM">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="profile-pic-div">
                                <img src="./images/user.png" alt="#" id="photo">
                                <input type="file" id="file">
                                <label for="file" id="uploadBtn">Chọn ảnh</label>
                            </div>
                            <script src="profile.js"></script>

                        </div>
                    </div>
                    <div class="center">
                        <button class="btn btn-primary">Lưu</button>
                    </div>
                </div>

            </div>

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
   </body>
</html>
