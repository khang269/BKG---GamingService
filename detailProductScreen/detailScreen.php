<?php
    include('../phpscripts/connection.php');  
    $failstate = "";
    error_reporting(0);
    
    if(isset($_GET["productID"]))
    {
        $productID = htmlspecialchars($_GET["productID"]);
    }

    $name = htmlspecialchars($_SESSION['name']);
    $sql = "SELECT * FROM game WHERE productID = $productID";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    if ($result->num_rows < 1) {
        echo "here";
        die();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if (isset($_POST['commentID'])) {
            $sql = "DELETE FROM comment WHERE commentID='$_POST[commentID]'";

            if ($con->query($sql) === TRUE) {
                echo "<script>alert('Comment deleted successfully');</script>";
            } else {
                echo "Error deleting comment: " . $con->error;
            }
        }
        else {
            $commentcontent = htmlspecialchars($_POST['comment']);
            $submitsql = $sql = "INSERT INTO comment (userName, productID, Content)
            VALUES ('$name','$productID','$commentcontent')";
            $con->query($submitsql);
        }
    }

    $commentsql = "SELECT * FROM comment WHERE productID = $productID";
    $commentresult = mysqli_query($con, $commentsql); 
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
                <h1>SẢN PHẨM</h1>
                <div class="row linknav">
                    <a class="mainnav" href="../">Trang Chủ</a>
                    <a href="#">Sản phẩm</a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row product-info">
                <div class="col-sm-6 product-img">
                    <img src=<?php echo "..\\Service\\{$row['picturePath']}" ?> alt="#">
                </div>
                <div class="col-sm-6 product-description">
                    <h1>
                        <?php echo "{$row['name']}"; ?>
                    </h1>
                    <p> <?php echo "{$row['about']}" ?></p>
                </div>
            </div>
        </div>

        <div class="container desc-comment-part" id="accordion">

            <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  Description
                </a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <div class="col-sm-8 product-description">
                        <h1><?php echo "{$row['name']}"; ?></h1>
                        <p> <?php echo "{$row['about']}" ?></p>
                    </div>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                  Comment
                </a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <div class="col-sm-8 product-description">
                        <h1>Comment</h1>
                        <form id="f1" onsubmit="return validation()" action="" method="POST" class="input-comment">
                            <?php
                                if(!(isset($_SESSION['loggedin'])) || ($_SESSION['loggedin'] === FALSE)){
                                    echo '
                                    <input name="comment" type="text" class="form-control" rows="2" id="comment" placeholder="đăng nhập để có thể bình luận" disabled></input>
                                    <button class="btn btn-primary float-right" type="submit" id="btn" onclick="">Submit</button>
                                    ';
                                }else{
                                    echo '
                                    <input name="comment" type="text" class="form-control" rows="2" id="comment" placeholder="..." ></input>
                                    <button class="btn btn-primary float-right" type="submit" id="btn" onclick="">Submit</button>
                                    ';
                                }
                            ?>
                        </form>
                        <?php
                        while($commentrow = mysqli_fetch_array($commentresult,MYSQLI_ASSOC)){
                            $deleteBtn = "";
                            if ($_SESSION["userType"] == 1) {
                                $deleteBtn = '
                                <form id="deleteForm"  action="" method="POST" class="delete-comment">
                                    <input name="commentID" type="text"  hidden value="'.$commentrow['commentID'].' ">
                                    <button class="btn btn-danger float-right" type="submit" id="btn" onclick="">Delete</button>
                                </form>';
                            }
                            echo "<div class=\"comment-card row\">
                            <div class=\"col-sm-1\">
                                <img src=\"images/user.png\" class=\"rounded-circle\" alt=\"\" height=\"50px\" width=\"50px\">
                            </div>
                            <div class=\"col-sm-11\">
                                <h4>{$commentrow['userName']}</h4>
                                <p>{$commentrow['Content']}</p>".$deleteBtn."
                            </div>
                        </div> ";
                        }
                        ?>   
                    </div>
                </div>
              </div>
            </div>
          </div>
        <div class="container">
            
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
