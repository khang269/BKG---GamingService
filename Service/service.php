<!-- TODO: Minh Ngoc - Trang dich vu 
    https://www.vng.com.vn/article/products/products.html#ent
-->
<?php
    include('../phpscripts/connection.php');  

    $gamesql = "SELECT * FROM game WHERE ProductType = 0";
    $gameresult = mysqli_query($con, $gamesql);  

    $socialsql = "SELECT * FROM game WHERE ProductType = 1";
    $socialresult = mysqli_query($con, $socialsql);  

    $paymentsql = "SELECT * FROM game WHERE ProductType = 2";
    $paymentresult = mysqli_query($con, $paymentsql);  
?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        <title>Bootstrap Tutorial Sample Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <body>
        <?php
        include('../phpscripts/navigation.php')
        ?>

        <div class="header">
            <div class="container">
                <h1>SẢN PHẨM</h1>
                <div class="row linknav">
                    <a class="mainnav" href="../index/">Trang Chủ</a>
                    <a href="#">Sản phẩm</a>
                </div>
            </div>
          </div>

        <div class="container center introduction">
            <h1>Sản Phẩm</h1>
            <p>Hệ sinh thái ứng dụng và dịch vụ của 3K1N bao gồm 4 nhóm chính, tập trung hướng đến 
                những trải nghiệm phong phú và giải pháp tối ưu, phục vụ cho người dùng cá nhân và tổ chức. 
                Bên cạnh đó, 3K1N còn nghiên cứu và phát triển nhiều dự án công nghệ mới nhằm hỗ trợ hiệu 
                quả cho hoạt động của các cơ quan quản lý và doanh nghiệp.
            </p>
        </div>

        <div id="game" class="product-item">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-4 product-icon">
                                <img src="images/icon.svg" alt="1st-icon">
                            </div>
                            <div class="col-8 product-name">
                                <strong>Trò chơi trực tuyến</strong>
                            </div>
                            <div class="col-12 product-detail">
                                <ul>
                                    <li>Phát triển và sản xuất trò chơi trực tuyến, phát hành ra thị trường quốc tế. 
                                    </li>
                                    <li>Phát triển và sản xuất trò chơi trực tuyến, phát hành ra thị trường quốc tế. 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <?php
                            while($row = mysqli_fetch_array($gameresult,MYSQLI_ASSOC)){
                                echo "<div class=\"col-6 col-sm-6 col-md-4 col-lg-4\">
                                   <a href=\"../detailProductScreen/detailScreen.php?productID={$row['productID']}\" class=\"product-item-link\">
                                    <img src=\"{$row['picturePath']}\" alt=\"product-logo\">
                                    {$row['name']}
                                </a>
                            </div>";
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="cloud" class="product-item">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-4 product-icon">
                                <img src="images/icon2.svg" alt="2st-icon">
                            </div>
                            <div class="col-8 product-name">
                                <strong>Nền tảng kết nối</strong>
                            </div>
                            <div class="col-12 product-detail">
                                <ul>
                                    <li>Các nền tảng kết nối đa dạng, đa dịch vụ, phục vụ toàn diện nhu cầu kết nối, giải trí, tìm kiếm của cá nhân và tổ chức.
                                    </li>
                                    <li>Các nền tảng kết nối đa dạng, đa dịch vụ, phục vụ toàn diện nhu cầu kết nối, giải trí, tìm kiếm của cá nhân và tổ chức.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                            <?php
                                while($row = mysqli_fetch_array($socialresult,MYSQLI_ASSOC)){
                                    echo "<div class=\"col-6 col-sm-6 col-md-4 col-lg-4\">
                                    <a href=\"../detailProductScreen/detailScreen.php?productID={$row['productID']}\" class=\"product-item-link\">
                                        <img src=\"{$row['picturePath']}\" alt=\"product-logo\">
                                        {$row['name']}
                                    </a>
                                </div>";
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="pay" class="product-item">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-4 product-icon">
                                <img src="images/icon3.svg" alt="3rd-icon">
                            </div>
                            <div class="col-8 product-name">
                                <strong>Nền tảng giao dịch</strong>
                            </div>
                            <div class="col-12 product-detail">
                                <ul>
                                    <li>Các nền tảng và dịch vụ trung gian thanh toán, tài chính cá nhân theo xu hướng mới.
                                    </li>
                                    <li>Các nền tảng và dịch vụ trung gian thanh toán, tài chính cá nhân theo xu hướng mới.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <?php
                                while($row = mysqli_fetch_array($paymentresult,MYSQLI_ASSOC)){
                                    echo "<div class=\"col-6 col-sm-6 col-md-4 col-lg-4\">
                                    <a href=\"../detailProductScreen/detailScreen.php?productID={$row['productID']}\" class=\"product-item-link\">
                                        <img src=\"{$row['picturePath']}\" alt=\"product-logo\">
                                        {$row['name']}
                                    </a>
                                </div>";
                                }
                            ?>
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
