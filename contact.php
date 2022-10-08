<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>

    <link href="./include/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-light" style="overflow: hidden;">
    <nav class="navbar navbar-expand-lg navbar-light bg-color sticky-top">
        <div class="container-fluid d-flex justify-content-start">            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-dark" aria-current="page" href="./home.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="./about.php">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="./testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="./contact.php">Contact Us</a>
                </li>
            </ul>
            </div>
        </div>

        <div class="container-fluid justify-content-end"> 
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-o"></i> My Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./system.php" name="logout">Sign out</a></li>
                    </ul>
                    </li>
                </ul>
            </div>                      
        </div>        
    </nav>    
    <?php include('./systemconn.php');?>


    <?php
    if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
    <h5 class="text-center text-muted">Contact Us</h5><br>
    <div class="container vh-80">
        <div class="row justify-content-center h-80">
            <div class="card w-50 my-auto bg-light shadow">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./assets/contact.png" width="223" height="112"><br><br>
                        <div class="text-start">                            
                            <strong><i class="fa fa-map-marker"></i> Address : </strong><br><br> 
                            <strong><i class="fa fa-phone"></i> Tele Phone : </strong><br><br>
                            <strong><i class="fa fa-tablet"></i> Mobile : </strong><br><br>
                            <strong><i class="fa fa-envelope-o"></i> Email : </strong><br><br> 
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

   
<!-- Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>  

</body>
</html>