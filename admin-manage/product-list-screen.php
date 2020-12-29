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
    <?php
        include('../phpscripts/navigation.php')
    ?>


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
            <div class="col-lg-2">
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
                                <td><a href="#" class="btn btn-link">Dịch vụ</a></td>

                            </tr>

                            <tr>
                                <td><img src="images/logout.svg" alt="" height="30px" width="30px"></td>
                                <td><a href="../phpscripts/logout.php" class="btn btn-link">Đăng xuất</a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-10">
                <h4>Sản Phẩm</h4>
                <p>Quản lý sản phẩm</p>
                <div class = "game-list container">
                    <div class = "game-card row">
                        <img src="./images/user.png" class="rounded" alt="" height="100px" width="100px">
                        <p class="title col-sm-3">AdventureTime</p>
                        <p class="about col-sm-4">This game is about the adventure of Finn and Jake. Together, they discover distant land, protect Candy Kingdom from The Evil Ice-King. On their journey, they make friend with Vampire, Fire Princess and much more. </p>
                        <p class="valueType col-sm-1">0</p>
                        <div class="action col-sm-2">
                            <a href="edit-product.php" class="btn btn-primary">Chỉnh sửa</a>
                            <button class="btn btn-primary">Xoá</button>
                        </div>
                    </div>
                </div>
                <div class = "game-list container">
                    <div class = "game-card row">
                        <img src="./images/user.png" class="rounded" alt="" height="100px" width="100px">
                        <p class="title col-sm-3">AdventureTime</p>
                        <p class="about col-sm-4">This game is about the adventure of Finn and Jake. Together, they discover distant land, protect Candy Kingdom from The Evil Ice-King. On their journey, they make friend with Vampire, Fire Princess and much more. </p>
                        <p class="valueType col-sm-1">0</p>
                        <div class="action col-sm-2">
                            <a href="edit-product.php" class="btn btn-primary">Chỉnh sửa</a>
                            <button class="btn btn-primary">Xoá</button>
                        </div>
                    </div>
                </div>
                <div class = "game-list container">
                    <div class = "game-card row">
                        <img src="./images/user.png" class="rounded" alt="" height="100px" width="100px">
                        <p class="title col-sm-3">AdventureTime</p>
                        <p class="about col-sm-4">This game is about the adventure of Finn and Jake. Together, they discover distant land, protect Candy Kingdom from The Evil Ice-King. On their journey, they make friend with Vampire, Fire Princess and much more. </p>
                        <p class="valueType col-sm-1">0</p>
                        <div class="action col-sm-2">
                            <a href="edit-product.php" class="btn btn-primary">Chỉnh sửa</a>
                            <button class="btn btn-primary">Xoá</button>
                        </div>
                    </div>
                </div>
                <div class = "game-list container">
                    <div class = "game-card row">
                        <img src="./images/user.png" class="rounded" alt="" height="100px" width="100px">
                        <p class="title col-sm-3">AdventureTime</p>
                        <p class="about col-sm-4">This game is about the adventure of Finn and Jake. Together, they discover distant land, protect Candy Kingdom from The Evil Ice-King. On their journey, they make friend with Vampire, Fire Princess and much more. </p>
                        <p class="valueType col-sm-1">0</p>
                        <div class="action col-sm-2">
                            <a href="edit-product.php" class="btn btn-primary">Chỉnh sửa</a>
                            <button class="btn btn-primary">Xoá</button>
                        </div>
                    </div>
                </div>
                <div class="add-btn container center">
                    <a href="add-product.php" class="btn btn-primary"> Thêm Sản Phẩm</a>
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