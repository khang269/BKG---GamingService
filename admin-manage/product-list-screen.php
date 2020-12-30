<?php
    include('../phpscripts/connection.php');  
    $failstate = "";
    error_reporting(0);

    if($_SESSION['userType'] != 1 || !isset($_SESSION['userType'])){
        header('Location: ..\index\index.php');
    }

    if ($_SESSION['userType']==1) {
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if (isset($_POST['productID'])) {
                $commentsql =  "DELETE FROM comment WHERE productID='$_POST[productID]'";

                $sql = "DELETE FROM game WHERE productID='$_POST[productID]'";
                $con->query($commentsql);

                if ($con->query($sql) === TRUE) {
                    echo "<script>alert('Product deleted successfully');</script>";
                } else {
                    echo "Error deleting product: " . $con->error;
                }
            }
        }

        $productsql = "SELECT * FROM game";
        $productresult = mysqli_query($con, $productsql); 

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
    <?php
        include('../phpscripts/navigation.php')
    ?>


    <div class="header">
        <div class="container">
            <h1>Admin</h1>
            <div class="row linknav">
                <a class="mainnav" href="../index">Trang Chủ</a>
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
                <?php
                    while($productrow = mysqli_fetch_array($productresult,MYSQLI_ASSOC)){
                        $path2Img="../assets/img/user.png";
                        if ($productrow['picturePath'] != NULL){
                            $path2Img=$productrow['picturePath'];
                        }
                        $title=htmlspecialchars($productrow['name']);
                        $about=htmlspecialchars($productrow['about']);
                        $prodType=htmlspecialchars($productrow['ProductType']);
                        echo "
                        <div class = \"game-list container\">
                            <div class = \"game-card row\">
                                <img src=\"../Service/{$path2Img}\" class=\"rounded\" alt=\"\" height=\"100px\" width=\"100px\">
                                <p class=\"title col-sm-3\">{$title}</p>
                                <p class=\"about col-sm-4\">{$about}</p>
                                <p class=\"valueType col-sm-1\">{$prodType}</p>
                                <div class=\"action col-sm-2\">
                                <form action=\"edit-product.php\" method=\"GET\">
                                    <input name=\"productID\" type=\"text\"  hidden value=\"{$productrow['productID']}\">
                                    <button class=\"btn btn-primary\">Chỉnh sửa</button>
                                </form>
                                <form action=\"\" method=\"POST\">
                                    <input name=\"productID\" type=\"text\"  hidden value=\"{$productrow['productID']}\">
                                    <button class=\"btn btn-primary\">Xoá</button>
                                </form>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>   
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