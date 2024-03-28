<?php 

ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "aopeclinic");

if ($conn) {
    // echo 'we are connected';
}

else {
    echo 'Connection Failed' . mysqli_error($conn);
}

?>