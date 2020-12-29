<?php
include('connection.php');
  
$password = $_POST['pass'];
$email    = $_POST['email'];

$sql = "UPDATE user SET password='$password', Email='$email' WHERE userName=$_SESSION[name]"; 
if($mysqli->query($sql) === true){ 
    echo "Records was updated successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                        . $mysqli->error; 
} 
$mysqli->close(); 
?> 