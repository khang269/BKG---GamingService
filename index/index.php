<!-- TODO: Khang - trang index
    https://www.vng.com.vn/index.php
 -->
<?php
    include('../phpscripts/connection.php');  
    $failstate = "";
    // error_reporting(0);

?>
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <title>Bootstrap Tutorial Sample Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
        <link rel="stylesheet" href="../assets/style/indexstyle.css">
        
    </head>
    <body>


        <?php
            include('../phpscripts/navigation.php')
        ?>

        <section class="i-header">
            <div class="container-fluid p-0 m-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../assets/img/header1.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../assets/img/header2.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../assets/img/header3.png" class="d-block w-100" alt="...">
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
        </section>


        <section class="i-number">
            <div class="container">
                <div class = "row">
                    <div class = "col-6 col-lg-3">
                        <div class="number-circle visible">
                            <div class="number-circle-inner">
                                <span class="circle-text">
                                    52
                                </span>

                            </div>
                        </div>
                        <div class="label text-light text-center">
                            <strong>
                                Billion
                            </strong>
                            <br>
                            Doanh thu 2019
                        </div>
                    </div>
                    <div class = "col-6 col-lg-3">
                        <div class="number-circle visible">
                            <div class="number-circle-inner">
                                <span class="circle-text">
                                    5
                                </span>

                            </div>
                        </div>
                        <div class="label text-light text-center">
                            <strong>
                                Nam
                            </strong>
                            <br>
                            Hinh thanh va phat trien
                        </div>
                    </div>
                    <div class = "col-6 col-lg-3">
                        <div class="number-circle visible">
                            <div class="number-circle-inner">
                                <span class="circle-text">
                                    6
                                </span>
                            </div>
                        </div>
                        <div class="label text-light text-center">
                            <strong>
                                Van  phong
                            </strong>
                            <br>
                            Tai 3 quoc gia
                        </div>
                    </div>
                    <div class = "col-6 col-lg-3">
                        <div class="number-circle visible">
                            <div class="number-circle-inner">
                                <span class="circle-text">
                                    4
                                </span>
                            </div>
                        </div>
                        <div class="label text-light text-center">
                            <strong>
                                Nhom
                            </strong>
                            <br>
                            San pham chu luc
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="i-product">
            <div class="container-fluid">
                <div class="row">
                    <div class="product-content col-12 col-xl-6 p-0 m-0">
                        <div class="container-fluid p-0">
                            <div class="mySlides p-0 m-0">
                                <div class="product-title text-center">
                                    ONLINE GAME
                                </div>
                                <div class="box-product">
                                    <img class="product-item-1" src="https://img.zing.vn/products/vng/skin-2018/images/products/digital-content.png" alt>
                                </div>
                                <div class="product-title">
                                    Develop and build online game. Import and publish many game.
                                </div>
                            </div>
                            <div class="mySlides p-0 m-0">
                                <div class="product-title text-center">
                                    SOCIAL MEDIA
                                </div>
                                <div class="box-product">
                                    <img class="product-item-1" src="https://img.zing.vn/products/vng/skin-2018/images/products/communication.png" alt>
                                </div>
                                <div class="product-title">
                                    Variaty of social service.
                                </div>
                            </div>
                            <div class="mySlides p-0 m-0">
                                <div class="product-title text-center">
                                    PAYMENT PLATFORMS
                                </div>
                                <div class="box-product">
                                    <img class="product-item-1" src="https://img.zing.vn/products/vng/skin-2018/images/products/digital-pay.png" alt>
                                </div>
                                <div class="product-title">
                                    Many platforms for transaction, payment that is fast and secure.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 p-0 m-0">
                        <a class="h1ref" href="Service\service.php">
                            <h2 class="text-steelgray f-unisect">
                                PRODUCT
                            </h2>
                        </a>
                        <p class="product-text">
                            3K1N focus on 3  major products, by that bring to the users a dirverse
                            and simple experience.
                        </p>
                        <div class="product-list p-0 m-0">
                            <div class="container-fluid p-0 m-0">
                                <div class="row p-0 m-0">
                                    <div class ="demo cursor col-4 col-xl-12"
                                    onclick="currentSlide(1)">
                                        <img src="..\assets\img\03.svg">
                                        <span class = "product-title-2">GAME</span>
                                    </div>
                                    <div class ="demo cursor col-4 col-xl-12"
                                    onClick="currentSlide(2)">
                                        <img src="..\assets\img\01.svg">
                                        <span class = "product-title-2">SOCIAL MEDIA</span>
                                    </div>
                                    <div class ="demo cursor col-4 col-xl-12" 
                                    onClick="currentSlide(3)"> 
                                        <img src="..\assets\img\02.svg">
                                        <span class = "product-title-2">PAYMENT PLATFORMS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="i-aboutus">
            <div class="container black-bg mb-5">
                <a class="h1ref black-bg" href="introduction\introduction.php">
                    <h2 class="text-light text-center black-bg f-unisect">
                        We are 3K1N
                    </h2>
                </a>
                <p class="text-light m-auto text-center pt-5">
                    Thành lập ngày 9/9/2004, 3K1N hiện là công ty Internet và công nghệ hàng đầu, kỳ lân công nghệ 1 tỷ USD + duy nhất của Việt Nam.
                </p>
            </div>
            <div class="container-fluid p-0 m-0">
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExample" data-slide-to="1"></li>
                      <li data-target="#carouselExample" data-slide-to="2"></li>
                      <li data-target="#carouselExample" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="..\assets\img\campus.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\assets\img\campus2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\assets\img\campus3.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\assets\img\campus4.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </section>
        

        <section class="i-carrer"></section>
        
        <footer>
            <div class="footer-page">
                <div class="footer-page m-auto text-center">
                    <div class="col-12 social-padding">
                        <div class="social-bt">
                            <a href="#" target="_blank" class="icon-footer"><img src="../assets/img/facebook.svg" alt="">
                            </a>
                            <a href="#" target="_blank" class="icon-footer"><img src="../assets/img/youtube.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="footer-copyright col-12 text-center text-light">
                        Copyright ©2020 3K1N Team. All right reserved.
                    </div>
                </div>
            </div>
        </footer>

        <script src="../assets/jquery-3.5.1.min.js"></script>
        <script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              var captionText = document.getElementById("caption");
              if (n > slides.length) {slideIndex = 1}
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " active";
              captionText.innerHTML = dots[slideIndex-1].alt;
            }
            </script>
    </body>
 </html>