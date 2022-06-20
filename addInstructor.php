<?php
        $name = $_GET["fullName"];
        $phone = $_GET["phone"];
        $email = $_GET["email"];
        

        $conn = mysqli_connect("localhost", "root", "", "online_courses");
        if($conn==TRUE){}
  
        else {
    
        die(); } //stop the program. there is no need to continue
        $stmt = "INSERT INTO `instructor` (`name`, `mobile`, `email`) VALUES ('$name', '$phone', '$email')";
        $result = mysqli_query($conn, $stmt);
        echo '<script> alert("Instructor Added"); window.open("admin.php", "_self");</script>';
?>