<!-- TODO: Khai- trang gioi thieu  
    https://www.vng.com.vn/article/about/management.html
    https://www.vng.com.vn/news/shareholders.1.html
    https://www.vng.com.vn/article/about/ourculture.html
    may trang nay ngan nen gom lai thanh mot trang lon nhe ...
-->

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
        <link href="style.css" rel="stylesheet">
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
                <h1>Chúng Tôi</h1>
                <div class="row linknav">
                    <a class="mainnav" href="../index.php">Trang Chủ</a>
                    <a href="#">Chúng tôi</a>
                </div>
            </div>
        </div>

        <div class="container center introduction">
            <h1>BAN ĐIỀU HÀNH</h1>
            <p>“3K1N đặt ra một khát vọng mới "2332" cho 5 năm tiếp theo. 2332 có nghĩa là lấy cột mốc năm 2023, 3K1N sẽ đạt 320 triệu người dùng toàn cầu, 32 triệu người dùng cho các sản phẩm mới, và 320 ngàn khách hàng doanh nghiệp. 3K1N sẽ cố gắng hết sức và tập trung các nguồn lực để hướng tới những cột mốc này”.</p>
        </div>

        <div class="infomation">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
                </ul>
                <div class="carousel-inner " >
                    <div class="carousel-item active" style="text-align: center;">
                        <img class="rounded-circle" src="images/KHANG.jpg" alt="#">
                        <div class="container">
                            <div class="carousel-caption">
                                <h4>VÕ AN KHANG</h4>
                                <p>MSSV: 1711700</p>
                                <p>Description: ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                        <img class="rounded-circle" src="images/KHAI.jpg" alt="#">
                        <div class="container">
                            <div class="carousel-caption">
                                <h4>CAO MINH KHẢI</h4>
                                <p>MSSV: 1710136</p>
                                <p>Description: ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                        <img class="rounded-circle" src="images/KHIET.jpg" alt="#">
                        <div class="container">
                            <div class="carousel-caption">
                                <h4>HỒ ANH KHIẾT</h4>
                                <p>MSSV: 1710139</p>
                                <p>Description: ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                        <img class="rounded-circle" src="images/NGOC.jpg" alt="#">
                        <div class="container">
                            <div class="carousel-caption">
                                <h4>ĐẶNG MINH NGỌC</h4>
                                <p>MSSV: 1712345</p>
                                <p>Description: ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH ABCDEFGH </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="second-header center">
            <div class="container">
                <h1>CỔ ĐÔNG</h1>
            </div>
        </div>
        <div class="container CD-wall">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="images/logo2.png" class="card-img-top" alt="#">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary my-btn">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="images/logo2.png" class="card-img-top" alt="#">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary my-btn">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="images/logo2.png" class="card-img-top" alt="#">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary my-btn">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="images/logo2.png" class="card-img-top" alt="#">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary my-btn">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="images/logo2.png" class="card-img-top" alt="#">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary my-btn">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="images/logo2.png" class="card-img-top" alt="#">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary my-btn">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container text-center"><a href="#" class="btn btn-primary my-btn">Load more</a></div>
            
        </div>
        <div class=" second-header center">
            <div class="container-fluid">
                <h1>GIÁ TRỊ VĂN HÓA</h1>
            </div>
        </div>

        <div class="container-fluid text-center culture">
            <div class="container-fluid text-center" style="background-color:  #30CFD0;">
                <div class="tagname fonttagname">Sứ Mệnh</div>

                <div class="row text-center justify-content-center" id="slogan">
                    <div class="col-sm-1" id="slogan-quote">"</div>
                    <div class="col-sm-6" id="slogan-body">
                        <p>Kiến tạo công nghệ và Phát triển con người. Vì một cuộc sống tốt đẹp hơn</p>
                    </div>
                    <div class="col-sm-1" id="slogan-quote">"</div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-sm-6">
                        <p>3K1N tin vào sức mạnh thay đổi cuộc sống của Internet và không ngừng phát triển để mang đến cho người dùng những trải nghiệm ý nghĩa.</p>
                    </div>
                </div>
            </div>



            <div class="container-fluid text-center">
                <div class="tagname fonttagname">Giá trị cốt lõi</div>
                <div class="row text-center justify-content-center">
                    <div class="col-sm-10">
                        <p>Thế mạnh của 3K1N chính là con người và văn hóa doanh nghiệp. Dựa vào kim chỉ nam là 3 giá trị cốt lõi, các thành viên ở 3K1N luôn có tinh thần cống hiến vì sự phát triển chung của 3K1N và cộng đồng.</p>
                    </div>
                </div>

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
            <div class="container-fluid text-center" style="background-color:  #30CFD0;">
                <div class="tagname fonttagname">Logo</div>
                <div class="row text-center justify-content-center">
                    <div class="col-sm-10">
                        <p>Với hình dáng cách điệu một ngọn lửa đang cháy, logo 3K1N biểu trưng cho 3 giá trị quan trọng của công ty: nhiệt huyết, cầu tiến và năng động.</p>
                        <p>Hình dáng vươn lên thể hiện sức trẻ và tinh thần dấn thân.</p>
                        <p>Gồm 3 màu cơ bản của ngọn lửa: da cam, xanh lam và vàng</p>
                    </div>
                </div>
            
                <div class="row text-center justify-content-center">
                    <div class="col-sm-4">
                        <img src="images/_logo1.png" alt="#">
                        <p>Màu cam tượng trưng cho người 3K1N nhiệt huyết, đoàn kết và tài năng</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="images/_logo2.png" alt="#">
                        <p>Màu xanh đặc trưng của công ty hoạt động trong lĩnh vực Internet và công nghệ.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="images/_logo3.png" alt="#">
                        <p>Màu vàng thể hiện thông điệp luôn mang lại giá trị tốt nhất cho khách hàng.</p>
                    </div>
                </div>
                
            </div>


            <div class="container-fluid text-center">
                <div class="tagname fonttagname">Slogan</div>

                <div class="row text-center justify-content-center" id="slogan">
                    <div class="col-sm-1" id="slogan-quote">"</div>
                    <div class="col-sm-6" id="slogan-body">
                        <p>Đón nhận thách thức</p>
                    </div>
                    <div class="col-sm-1" id="slogan-quote">"</div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-sm-4">
                        <p>Thể hiện khát vọng chinh phục, đổi mới và vươn lên của tập thể 3K1N.</p>
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
