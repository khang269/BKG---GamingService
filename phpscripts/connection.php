<?php    
    session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "bkgdatabase";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    if(!isset($_SESSION['loggedin'])){
        $_SESSION['loggedin'] = FALSE;
    }

    if(!isset($_SESSION['commentState'])){
        $_SESSION['loggedin'] = 1;
    }
?>  