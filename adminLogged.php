<?php
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $conn = mysqli_connect("localhost", "root", "", "online_courses");
                            $stmt = "select * from `admin` where `username` = '$username' and `password` = '$password' ";
                            $result = mysqli_query($conn, $stmt);
                            $login = false;
                            while ($row = mysqli_fetch_array($result) )
                            {
                                
                                echo '<script> window.open("admin.php", "_self");</script>';
                                $login=true;
                                
                            }
                            if($login==false)
                            echo '<script>alert("Wrong username/password"); window.open("adminLogin.php", "_self");</script>';
                            ?>