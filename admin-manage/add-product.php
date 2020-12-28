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
            <a href="#" class="navbar-brand"><img src="images/logo2.png" alt=""></a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Sản Phẩm</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../Service/service.php#game">Trò Chơi Trực Tuyến</a>
                            <a class="dropdown-item" href="../Service/service.php#cloud">Nền Tảng Kết Nối</a>
                            <a class="dropdown-item" href="../Service/service.php#pay">Tài Chính và Thanh Toán</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Kết Nối</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../contact/contact.php">Văn Phòng</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <?php
            if(!(isset($_SESSION['loggedin']))){
                echo '<a class="btn btn-primary my-btn" href="../signUp/signUp.php">Sign Up</a>';
            }else{
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
            }
            ?>
    </nav>


    <div class="header">
        <div class="container">
            <h1>Admin</h1>
            <div class="row linknav">
                <a class="mainnav" href="../">Trang Chủ</a>
                <a href="#">Admin</a>
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
                                <td><a href="admin-screen.php" class="btn btn-link">Hồ sơ</a></td>

                            </tr>

                            <tr>
                                <td><img src="images/gameProduct.svg" alt="" height="30px" width="30px"></td>
                                <td><a href="product-list-screen.php" class="btn btn-link">Dịch vụ</a></td>

                            </tr>

                            <tr>
                                <td><img src="images/logout.svg" alt="" height="30px" width="30px"></td>
                                <td><a href="../phpscripts/logout.php" class="btn btn-link">Đăng xuất</a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <form class="col-lg-9">
                <div class="row">
                    <div class="col-lg-8">
                        <h4>Sản Phẩm</h4>
                        <p>Thêm Sản Phẩm</p>
                        <div class="form-edit">
                            <div class="element row">
                                <div class="label col-sm-3">
                                    Tên sản phẩm:
                                </div>
                                <div class="value col-sm-8">
                                    <input type="text" class="form-control" value="Example">
                                </div>
                            </div>
                            <div class="element row">
                                <div class="label col-sm-3">
                                    Giới thiệu:
                                </div>
                                <div class="value col-sm-8">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="element row">
                                <div class="label col-sm-3">
                                    Thể loại:
                                </div>
                                <div class="value col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ProductType" id="Game"
                                            value="0" checked>
                                        <label class="form-check-label" for="Game">
                                            Game
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ProductType" id="Cloud"
                                            value="1">
                                        <label class="form-check-label" for="Cloud">
                                            Cloud
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="ProductType" id="Pay"
                                            value="2">
                                        <label class="form-check-label" for="Pay">
                                            Pay
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-pic-div pic-div">
                            <img src="./images/user.png" alt="#" id="photo">
                            <input type="file" id="file">
                            <label for="file" id="uploadBtn">Chọn ảnh</label>
                        </div>
                        <script src="loadImage.js"></script>

                    </div>
                </div>
                <div class="center">
                    <button class="btn btn-primary">Thêm</button>
                </div>
            </form>
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