<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Internet_project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Pricing-Free-Paid.css">
    <link rel="stylesheet" href="assets/css/Section-Title.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="height: 583px;background: url(&quot;assets/img/hero-bg.jpg&quot;) center / cover;">
    <nav class="navbar navbar-light navbar-expand-md bg-light py-3" data-aos="fade-down" data-aos-duration="550" style="padding: 0px 0px;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"></path>
                    </svg></span><span class="text-secondary">Coursopolis</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active link-dark" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="adminLogin.php">Admin Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="Courses.php">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="Instructors.php">Instructors</a></li>
                    <li class="nav-item"><a class="nav-link" href="searchCourse.php">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#team">About</a></li>
                </ul><a href="signup form.php"><button class="btn btn-primary" type="button">Sign Up</button></a>
            </div>
        </div>
    </nav>
    <div style="height: 76px;"></div>
   
    <div class="row">
        <div class="col"></div>
        <div class="col">
            
        </div>
        <div class="col">
        
        </div>
    </div>
    <div class="row product-list" data-aos="fade-up" data-aos-duration="550" data-aos-delay="550">
       
        <?php
            $courseId = $_GET["searchBar"];
            $conn = mysqli_connect("localhost", "root", "", "online_courses");
            $stmt = "select * from `courses` where `id` = '$courseId'";
            $result = mysqli_query($conn, $stmt);
            while ($row = mysqli_fetch_array($result) )
                            {
                            echo "<h1 style='color:white; text-align:center;'> Search Results = $row[1]</h1><h4 style='color:white;'> ID: $row[0]</h4> <h4 style='color:white;'>Course Name: $row[1]</h4> <h4 style='color:white;'>Course Description: $row[2]</h4> <h4 style='color:white;'>Course Prerequisites: $row[3]</h4>";
                            }

        ?>
       
    </div>
    <div style="height: 76px;"></div>
    <main>
        <footer class="text-center bg-light">
            <div class="container text-muted py-4 py-lg-5">
                <ul class="list-inline">
                    <li class="list-inline-item me-4"><a class="link-secondary" href="#">Web design</a></li>
                    <li class="list-inline-item me-4"><a class="link-secondary" href="#">Development</a></li>
                    <li class="list-inline-item"><a class="link-secondary" href="#">Hosting</a></li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item me-4"><a class="link-secondary" href="https://www.facebook.com/youssefalsabban/" data-bs-target="https://www.facebook.com/youssefalsabban/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg></a></li>
                    <li class="list-inline-item me-4"><a class="link-secondary" href="https://twitter.com/YoussefAlsabban" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                            </svg></a></li>
                    <li class="list-inline-item"><a class="link-secondary" href="https://www.instagram.com/youssefalsabban/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg></a></li>
                </ul>
                <p class="mb-0">Copyright © 2022 ASUTC</p>
            </div>
        </footer>
    </main>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/beh.js"></script>
    <script src="assets/js/test.js"></script>
</body>

</html>