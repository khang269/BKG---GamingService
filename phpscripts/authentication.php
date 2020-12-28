<?php      
    include('connection.php');  

    if ( !isset($_POST['user'], $_POST['pass']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }

    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $loginstate = "Fill in password";
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT  * FROM user WHERE userName = '$username' AND Pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        

        if($count == 1){  
            session_regenerate_id();
		    $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['userType'] = $row["userType"];
            echo 'Welcome ' . $_SESSION['name'] . '!';
            header('Location: ..\index.php');
        }  
        else{  
            header('Location: ..\signIn\signIn.php');
        }     
?>  