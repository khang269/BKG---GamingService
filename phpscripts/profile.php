<?php
// We need to use sessions, so you should always start sessions using the below code.
include('connection.php');

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
        }  
        else{  
            header('Location: ../signIn/signIn.php');
        }
?>