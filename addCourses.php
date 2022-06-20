<?php
        $id = $_GET["CourseID"];
        $name = $_GET["CouseName"];
        $description = $_GET["Description"];
        $prerequisite = $_GET["Prerequisite"];
        $conn = mysqli_connect("localhost", "root", "", "online_courses");
        if($conn==TRUE){}
  
        else {
 
        die(); } //stop the program. there is no need to continue
        $stmt = "INSERT INTO `courses` (`id`, `name`, `description`, `prerequisite`) VALUES ('$id', '$name', '$description' , '$prerequisite')";
        $result = mysqli_query($conn, $stmt);

    echo '<script> alert("Course Added"); window.open("admin.php", "_self");</script>';
?>