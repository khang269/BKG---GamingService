<?php
    include('../phpscripts/connection.php');  
    
    if(!isset($_SESSION['userType'])||($_SESSION['userType'] === 0)){
        header('Location: ../signIn/signIn.php');
    }

    $sql = "SELECT * FROM user WHERE userType = '0'";
    $result = mysqli_query($con, $sql);   

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if (isset($_POST['banName'])) {
            $id = $_POST['banName'];
            $bansql = "DELETE FROM comment WHERE userName='$id'";
            $con->query($bansql);
            
            $bansql = "DELETE FROM user WHERE userName='$id'";
            $con->query($bansql);
            header('Location: ./admin-screen.php');
            return;
        }

        if(isset($_POST['nocommentName'])){
            $id = $_POST['nocommentName'];
            $bansql = "UPDATE user SET commentState = 0 WHERE userName='$id'";
            $con->query($bansql);
            header('Location: ./admin-screen.php');
            return;
        }

        if(isset($_POST['allowName'])){
            $id = $_POST['allowName'];
            $bansql = "UPDATE user SET commentState = 1 WHERE userName='$id'";
            $con->query($bansql);
            header('Location: ./admin-screen.php');
            return;
        }
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
            <div class="col-lg-9">
                <h4>Hồ sơ</h4>
                <p>Quản lý hồ sơ</p>
                <div class = "user-list container">
                    <?php
                        while($row =  mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            if ($_SESSION["userType"] == 1) {
                                $banBtn = '
                                <form id="BanForm"  action="" method="POST" class="delete-comment">
                                    <input name="banName" type="text"  hidden value="'.$row['userName'].' ">
                                    <button class="btn btn-danger float-right" type="submit" id="btn" onclick="">Ban Account</button>
                                </form>';
                                
                                $noComment =  '
                                <form id="nocommentForm"  action="" method="POST" class="delete-comment">
                                    <input name="nocommentName" type="text"  hidden value="'.$row['userName'].' ">
                                    <button class="btn btn-danger float-right" type="submit" id="btn" onclick="">No comment</button>
                                </form>';

                                $allowComment = '
                                <form id="allowForm"  action="" method="POST" class="delete-comment">
                                    <input name="allowName" type="text"  hidden value="'.$row['userName'].' ">
                                    <button class="btn btn-primary float-right" type="submit" id="btn" onclick="">Allow comment</button>
                                </form>';
                            }
                            
                            if($row['commentState'] == 1){
                                echo "
                                <div class = \"user-card row\">
                                    <img src=\"..\\profileImages\\{$row['profilePic']}\" class=\"rounded-circle\" alt=\"\" height=\"50px\" width=\"50px\">
                                    <p class=\"userName col-sm-2\">{$row['userName']}</p>
                                    <p class=\"name col-sm-2\">{$row['FullName']}</p>
                                    <p class=\"phoneNumber col-sm-2\">{$row['phoneNumber']}</p>
                                    <div class=\"action col-sm-3\">
                                        {$banBtn}
                                        {$noComment}
                                    </div>
                                </div>
                                ";
                            }
                            else{
                                echo "
                                <div class = \"user-card row\">
                                    <img src=\"..\\profileImages\\{$row['profilePic']}\" class=\"rounded-circle\" alt=\"\" height=\"50px\" width=\"50px\">
                                    <p class=\"userName col-sm-2\">{$row['userName']}</p>
                                    <p class=\"name col-sm-2\">{$row['FullName']}</p>
                                    <p class=\"phoneNumber col-sm-2\">{$row['phoneNumber']}</p>
                                    <div class=\"action col-sm-3\">
                                        {$banBtn}
                                        {$allowComment}
                                    </div>
                                </div>
                                ";
                            }
                        }
                    ?>
                    
                    
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