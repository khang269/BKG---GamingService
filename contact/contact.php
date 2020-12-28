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
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container">
                <a href="../introduction/introduction.php" class="navbar-brand"><img src="images/logo2.png" alt="logo_img"></a>
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
                                <a class="dropdown-item" href="contact.php">Văn Phòng</a>
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
                    <img src="../profile-manage/images/user.png" class="rounded-circle" alt="" height="50px" width="50px">
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
                <h1>Kết nối</h1>
                <div class="row linknav justify-content-center">
                    <i class="glyphicon glyphicon-home icon"></i>
                    <a class="mainnav" href="../">Trang Chủ</a>
                    <a class="second-nav" href="#">Kết nối</a>
                    <a href="#">Văn Phòng</a>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="s-sub bg-wildsand p-b-70">
                <div class="container container-top">
                    <h1> Văn Phòng</h1>
                </div>
                <div class="container ">
                            <div class="row justify-content-center">
                                <div class="col-2 col-lg-1 location-item-id">
                                    1
                                </div>
                                <div class="col-8 col-lg-3 location-item-name">
                                    <div class="location-item-title">
                                        <span class="location-item-city">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>
                                            TRỤ SỞ CHÍNH
                                            <br>
                                            HỒ CHÍ MINH
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 location-item-content">
                                    Lô 03b-04-05-06-07, đường số 13, khu Công Nghiệp, Khu Chế Xuất Tân Thuận, phường Tân Thuận Đông, Quận 7, TP.HCM.
                                </div>
                                <div class="col-4 col-lg-2 location-item-btn">
                                    <a href="https://www.google.com/maps/place/VNG+Campus/@10.7584311,106.7443305,17.75z/data=!4m8!1m2!2m1!1sVNG+HCM!3m4!1s0x31752596009b808b:0x44c31d92ca50b338!8m2!3d10.7582605!4d106.7457218?hl=vi-VN">Xem bản đồ</a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2 col-lg-1 location-item-id">
                                    2
                                </div>
                                <div class="col-8 col-lg-3 location-item-name">
                                    <div class="location-item-title">
                                        <span class="location-item-city">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>
                                            VĂN PHÒNG HÀ NỘI
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 location-item-content">
                                    Tầng 17, tòa nhà VP TNR-Tower, 54 Nguyễn Chí Thanh, Đống Đa, Hà Nội.
                                </div>
                                <div class="col-4 col-lg-2 location-item-btn">
                                    <a href="https://www.google.com/maps?ll=21.023436,105.809186&z=16&t=m&hl=vi&gl=US&mapclient=embed&cid=7641397683496268091">Xem bản đồ</a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2 col-lg-1 location-item-id">
                                    3
                                </div>
                                <div class="col-8 col-lg-3 location-item-name">
                                    <div class="location-item-title">
                                        <span class="location-item-city">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>
                                            VĂN PHÒNG ĐÀ NẴNG
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 location-item-content">
                                    Tầng 9, Khu phức hợp khách sạn Bạch Đằng Complex, 50 Bạch Đằng, quận Hải Châu, Đà Nẵng.
                                </div>
                                <div class="col-4 col-lg-2 location-item-btn">
                                    <a href="https://www.google.com/maps/place/50+B%E1%BA%A1ch+%C4%90%E1%BA%B1ng,+H%E1%BA%A3i+Ch%C3%A2u+1,+H%E1%BA%A3i+Ch%C3%A2u,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vi%E1%BB%87t+Nam/@16.072708,108.224129,16z/data=!4m5!3m4!1s0x3142183037a1ea2d:0xcbbcaafceeeb7d9c!8m2!3d16.0727076!4d108.224129?hl=vi">Xem bản đồ</a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2 col-lg-1 location-item-id">
                                    4
                                </div>
                                <div class="col-8 col-lg-3 location-item-name">
                                    <div class="location-item-title">
                                        <span class="location-item-city">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>
                                            VĂN PHÒNG THÁI LAN
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 location-item-content">
                                    Phòng 1704, Tầng 17, Toà nhà UBCII, 591 Đường Sukhumvit 33 , Phường Klongton Nue, Quận Wattana, Bangkok, Thái Lan.
                                </div>
                                <div class="col-4 col-lg-2 location-item-btn">
                                    <a href="https://www.google.com/maps?ll=13.732672,100.56753&z=16&t=m&hl=vi&gl=US&mapclient=embed&cid=17994248496338306798">Xem bản đồ</a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2 col-lg-1 location-item-id">
                                    5
                                </div>
                                <div class="col-8 col-lg-3 location-item-name">
                                    <div class="location-item-title">
                                        <span class="location-item-city">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>
                                            VĂN PHÒNG MYANMAR
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 location-item-content">
                                    Tầng 22, Tháp 1, Tòa nhà HAGL Myanmar Center, 192 Kaba Aye Pagoda, Thị trấn Bahan, TP. Yangon, Myanmar.
                                </div>
                                <div class="col-4 col-lg-2 location-item-btn">
                                    <a href="https://www.google.com/maps?ll=16.827428,96.155198&z=17&t=m&hl=en-US&gl=US&mapclient=embed&q=192+Kabar+Aye+Pagoda+Rd+Yangon+Myanmar+(Burma)">Xem bản đồ</a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2 col-lg-1 location-item-id">
                                    6
                                </div>
                                <div class="col-8 col-lg-3 location-item-name">
                                    <div class="location-item-title">
                                        <span class="location-item-city">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>
                                            DATACENTER
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 location-item-content">
                                    Toà nhà Helios, Lô 6, Đường số 3, Công Viên Phần Mềm Quang Trung, Phường Tân Chánh Hiệp, Quận 12, TP.HCM.
                                </div>
                                <div class="col-4 col-lg-2 location-item-btn">
                                    <a href="https://www.google.com/maps?ll=10.854475,106.626008&z=13&t=m&hl=en&gl=US&mapclient=embed&cid=7501198307417595105">Xem bản đồ</a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2 col-lg-1 location-item-id">
                                    7
                                </div>
                                <div class="col-8 col-lg-3 location-item-name">
                                    <div class="location-item-title">
                                        <span class="location-item-city">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <br>
                                            VĂN PHÒNG HCM
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 location-item-content">
                                    Tầng 13, 14, Toà nhà Sài Gòn Giải Phóng, 432 Nguyễn Thị Minh Khai, Phường 5, Quận 3, TP.HCM
                                </div>
                                <div class="col-4 col-lg-2 location-item-btn">
                                    <a href="https://www.google.com/maps?ll=10.769587,106.685513&z=16&t=m&hl=en&gl=US&mapclient=embed&cid=7194197680117955700">Xem bản đồ</a>
                                </div>
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
