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
                <a class="nav-link text-dark" href="./contact.php">Contact Us</a>
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

<!-- Edit name modal -->
<div class="modal fade" id="namemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <h5 class="modal-title" id="exampleModalLabel">Change Name</h5>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="profileconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="update_nameid" id="update_nameid">
          <div class="form-group">
            <label>Enter Name</label>
            <input type="text" name="name" id="name" class="form-control" required>                    
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="upname" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>     
        </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of edit name modal -->

<!-- Edit username modal -->
<div class="modal fade" id="usernamemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <h5 class="modal-title" id="exampleModalLabel">Change Username</h5>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="profileconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="update_usernameid" id="update_usernameid">
          <div class="form-group">
            <label>Enter Username</label>
            <input type="text" name="username" id="username" class="form-control" required>                    
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="upusername" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>     
        </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of edit username modal -->

<!-- Edit email modal -->
<div class="modal fade" id="emailmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <h5 class="modal-title" id="exampleModalLabel">Change Email</h5>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="profileconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="update_emailid" id="update_emailid">
          <div class="form-group">
            <label>Enter Email</label>
            <input type="text" name="email" id="email" class="form-control" required>                    
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="upemail" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>     
        </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of edit email modal -->

<!-- Change Password modal -->
<div class="modal fade" id="passmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="profileconn.php" method="POST">
        <div class="modal-body">

          <input type="hidden" name="update_passid" id="update_passid">              
            
          <div class="form-group">
            <label>Enter Current Password</label>
            <input type="password" name="currentpass" id="currentpass" class="form-control" placeholder="Enter Current Password" required>                    
          </div><br>
          <div class="form-group">
            <label>Enter New Password</label>
            <input type="password" name="newpass" id="newpass" class="form-control" placeholder="Enter New Password" required>                    
          </div><br>
          <div class="form-group">
            <label>Enter Confirm Password</label>
            <input type="password" name="confirmpass" id="confirmpass" class="form-control" placeholder="Enter Same New Password" required>                    
          </div><br>
          <span id='passwordcheck'></span>           
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="changepassword" class="btn btn-primary rounded-pill passwordvalid" style="width: 80px;">Update</button>
                               
        </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of change password modal -->

    <?php
    if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
    <h5 class="text-center text-muted">Profile</h5><br>
    <div class="container vh-80">
        <div class="row justify-content-center h-80">
            <div class="card w-50 my-auto bg-light shadow">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./assets/profile.png" width="180" height="91"><br><br>
                        <div class="text-start">
                            <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,'lawyerclient');
                                $id = $_SESSION['user']['id'];

                                $query = "SELECT * FROM system WHERE id='$id'";
                                $query_run = mysqli_query($connection, $query);
                                if($query_run){
                                    foreach($query_run as $row)
                                    {
                            ?>
                            <div>
                                <span style="display:none;"><?php echo $row ['id'];?></span>
                                <strong><i class="fa fa-address-card-o"></i> Name : </strong><span><?php echo $row ['name'];?></span>&nbsp;<button title="edit name" class="btn btn-none rounded-pill editname" data-bs-toggle="modal" data-bs-target="#namemodal" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button><br><br> 
                                <strong><i class="fa fa-at"></i> Username : </strong><span><?php echo $row ['username'];?></span>&nbsp;<button title="edit username" class="btn btn-none rounded-pill editusername" data-bs-toggle="modal" data-bs-target="#usernamemodal" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button><br><br>
                                <strong><i class="fa fa-envelope-o"></i> Email : </strong><span><?php echo $row ['email'];?></span>&nbsp;<button title="edit email" class="btn btn-none rounded-pill editemail" data-bs-toggle="modal" data-bs-target="#emailmodal" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button><br><br>
                                <strong><i class="fa fa-lock"></i> Password : </strong><button title="change password" class="btn btn-none rounded-pill editpass" data-bs-toggle="modal" data-bs-target="#passmodal" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button><br><br>
                            </div>
                            <?php
                                    }
                            }
                            else
                            {
                                echo "NO record found";
                                }

                            ?> 
                        </div>  
                    </div>                    
                </div>
            </div>
        </div>
    </div>

   
<!-- Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>  

<script>

$(document).ready(function(){
    $('.editname').on('click', function(){
        

        $tr = $(this).closest('div');

        var data = $tr.children("span").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#update_nameid').val(data[0]);
        $('#name').val(data[1]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.editusername').on('click', function(){
        

        $tr = $(this).closest('div');

        var data = $tr.children("span").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#update_usernameid').val(data[0]);
        $('#username').val(data[2]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.editemail').on('click', function(){
        

        $tr = $(this).closest('div');

        var data = $tr.children("span").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#update_emailid').val(data[0]);
        $('#email').val(data[3]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.editpass').on('click', function(){
        

        $tr = $(this).closest('div');

        var data = $tr.children("span").map(function() {
            return $(this).text();      

        }).get();

        console.log(data);

        $('#update_passid').val(data[0]);
    });
});

</script>

<script>
$('#newpass, #confirmpass').on('keyup', function () { 
    
  if ($('#newpass').val() == $('#confirmpass').val()) {
    $('#passwordcheck').html('Passwords Matching').css('color', 'green');
    $(".passwordvalid").attr('disabled', false);
  }
  else if($('#confirmpass').val() == ''){
    $('#passwordcheck').html('');
  }
  else { 
    $('#passwordcheck').html('Passwords Not Matching').css('color', 'red');
    $(".passwordvalid").attr('disabled', true);
  }
  if ($('#newpass').val() == '' && $('#confirmpass').val() == '') {
    $('#passwordcheck').html('');
  }  
});
</script>

</body>
</html>