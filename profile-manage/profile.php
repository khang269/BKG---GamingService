<?php
    include('../phpscripts/connection.php');  
    $failstate = "";

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $profilePic=0;
    $fullname=htmlspecialchars($_POST['fullName']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);
    $address=htmlspecialchars($_POST['address']);
    $sql = "UPDATE user SET FullName='{$fullname}', Email='{$email}', phoneNumber='$phone',  address='$address' WHERE userName='".$_SESSION['name']."';";
    $newname=$_SESSION['profilePic'];
    if(file_exists($_FILES['file']['tmp_name'])) {
        $info = pathinfo($_FILES["file"]["name"]);
        $ext = $info['extension']; // get the extension of the file
        if(in_array(strtolower($ext) , array('png', 'jpg', 'jpeg')))
        {
            $newname = "".$_SESSION['name'].".".$ext; 

            $target = $_SERVER['DOCUMENT_ROOT'].'/Assignment2/profileImages/'.$newname;
            if (move_uploaded_file( $_FILES['file']['tmp_name'], $target))
            {
                $sql = "UPDATE user SET FullName='{$fullname}', Email='{$email}', phoneNumber='$phone',  address='$address', profilePic='$newname' WHERE userName='".$_SESSION['name']."';";
                
            }
        }
    // Update profile info
    }
    
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Profile updated!')</script>";
        $_SESSION['fullName']= $fullname;
        $_SESSION["profilePic"] = $newname;
    } else {
        echo "Error updating record: " . $con->error;
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
    <?php
        //  Get user information
        $sql = "SELECT * FROM user WHERE username='".$_SESSION["name"]."';";
        $result = $con->query($sql);               

        if ($result->num_rows !== 1) {
            session_destroy();
            header("Location: ../signIn/signIn.php");
            die();
        } 
        else {
            $row = $result->fetch_assoc();
        }
    ?>

    <div class="header">
        <div class="container">
            <h1>PROFILE</h1>
            <div class="row linknav">
                <a class="mainnav" href="..\index">Trang Chủ</a>
                <a href="#">Profile</a>
            </div>
        </div>
    </div>
    <div class="container body-profile">
        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <?php 
                            if ($_SESSION['profilePic'] != NULL) {
                                echo '<img src="../profileImages/'.$_SESSION['profilePic'].'" class="rounded-circle" alt="" height="50px" width="50px">';
                            }
                            else {
                                echo '<img src="../assets/img/user.png" class="rounded-circle" alt="" height="50px" width="50px">';
                            }
                        ?>
                    <?php
                            echo '<h3>'.$row["userName"].'</h3>';
                        ?>
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4>Hồ sơ</h4>
                            <p>Quản lý hồ sơ</p>
                            <form action="" method="post">
                                <div class="form-edit">
                                    <div class="element row">
                                        <div class="label col-sm-3">
                                            Username:
                                        </div>
                                        <div class="value col-sm-8">
                                            <?php 
                                        echo '<input type="text" class="form-control" disabled value="'.$row["userName"].'">';
                                        ?>
                                        </div>
                                    </div>
                                    <div class="element row">
                                        <div class="label col-sm-3">
                                            Họ và tên:
                                        </div>
                                        <div class="value col-sm-8">
                                            <?php 
                                            echo '<input type="text" name="fullName" class="form-control" value="'.$row["FullName"].'">';
                                        ?>
                                        </div>
                                    </div>
                                    <div class="element row">
                                        <div class="label col-sm-3">
                                            Email:
                                        </div>
                                        <div class="value col-sm-8">
                                            <?php 
                                            echo '<input type="text" name ="email" class="form-control" value="'.$row["Email"].'">';
                                        ?>
                                        </div>
                                    </div>
                                    <div class="element row">
                                        <div class="label col-sm-3">
                                            Số điện thoại:
                                        </div>
                                        <div class="value col-sm-8">
                                            <?php 
                                            echo '<input type="text" name="phone" class="form-control" value="'.$row["phoneNumber"].'">';
                                        ?>
                                        </div>
                                    </div>
                                    <div class="element row">
                                        <div class="label col-sm-3">
                                            Địa chỉ:
                                        </div>
                                        <div class="value col-sm-8">
                                            <?php 
                                            echo '<input type="text" name="address" class="form-control" value="'.$row["Address"].'">';
                                        ?>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="profile-pic-div">
                                <?php 
                                    if ($_SESSION['profilePic'] != NULL) {
                                        echo '<img src="../profileImages/'.$_SESSION['profilePic'].'" alt="#" id="photo">';
                                    }
                                    else {
                                        echo '<img src="../assets/img/user.png" alt="#" id="photo">';
                                    }
                                ?>
                                <input type="file" name="file" id="file">
                                <label for="file" id="uploadBtn">Chọn ảnh</label>
                            </div>
                            <script src="profile.js"></script>

                        </div>
                    </div>
                    <div class="center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <!-- <input type="submit" id="submit" value="Submit" /> -->
                    </div>
                </form>
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