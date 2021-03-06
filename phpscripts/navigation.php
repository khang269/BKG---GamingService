<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container">
                <a href="../index/index.php" class="navbar-brand"><img src="images/logo2.png" alt="logo-trademark"></a>
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
                        <?php 
                        if (isset($_SESSION['userType'])) { 
                            if ($_SESSION['userType']==1) {
                                echo '
                                <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="../admin-manage/admin-screen.php" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../admin-manage/admin-screen.php">Hồ sơ</a>
                                    <a class="dropdown-item" href="../admin-manage/product-list-screen.php">Quản lí sản phẩm</a>
                                </li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
                $path2Pic="";
                if($_SESSION['loggedin'] === FALSE){
                    echo '<a class="btn btn-primary my-btn" href="../signIn/signIn.php">Sign In</a>';
                }else{
                    if ($_SESSION['profilePic'] != NULL) {
                        $path2Pic="../profileImages/".$_SESSION['profilePic'];
                    }
                    else {
                        $path2Pic="../assets/img/user.png";
                    }

                    echo '
                    <img src="'.$path2Pic.'" class="rounded-circle" alt="" height="50px" width="50px">
                    <div class="dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                        '.$_SESSION['fullName'].'
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