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
<body class="bg-light" style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg navbar-light bg-color sticky-top">
        <div class="container-fluid d-flex justify-content-start">            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="./home.php"><i class="fa fa-home"></i> Home</a>
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

<!-- To do Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Add To Do Details</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>      
      <form action="todoconn.php" method="POST">
        <div class="modal-body">                    
          <div class="form-group">
            <label>Enter Details</label>
            <input type="text" name="details" class="form-control" maxlength="50" placeholder="Enter Details" required>                              
          </div><br>
          <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" hidden>
          <input type="text" class="form-control" name="addby" value="<?php echo $_SESSION['user']['id']; ?>" hidden>               
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 100px;">Close</button>
          <button type="submit" name="save" class="btn btn-primary rounded-pill" style="width: 100px;">Add</button>                               
        </div>
      </form>
    </div>    
  </div>
</div>
<!-- End Of to do Modal -->
<!-- Edit to do modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <h5 class="modal-title" id="exampleModalLabel">Edit To Do Details</h5>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="todoconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="update_todoid" id="update_todoid">
          <div class="form-group">
            <label>Enter Details</label>
            <input type="text" name="details" id="details" class="form-control" required>                    
          </div><br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="status" class="font-weight-bold">Status</label>
              <select name="status" id="status" class="form-control" required>
                <option selected disabled>Select status from here</option>
                <option value="Active">Active</option>
                <option value="Done">Done</option>
              </select>
            </div>
          </div> 
          <input type="date" class="form-control" name="editdate" value="<?php echo date('Y-m-d'); ?>" hidden>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="edit" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>     
        </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of edit to do modal -->
<!-- Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete To Do</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="todoconn.php" method="POST">
        <div class="modal-body">
            <input type="hidden" name="delete_todoid" id="delete_todoid">            
            Do you want to delete this data?   
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">No</button>
            <button type="submit" name="delete" class="btn btn-danger rounded-pill" style="width: 80px;">Yes</button>
        </div>
     </form>
    </div>    
  </div>
</div>

<!-- New Case Modal -->
<div class="modal fade" id="newcase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <h5 class="modal-title" id="exampleModalLabel">Add New Case</h5>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>      
      <form action="caseconn.php" method="POST">
        <div class="modal-body">                    
          <div class="form-group">
            <label>Enter Title</label>
            <input type="text" name="title" class="form-control" maxlength="50" placeholder="Enter Title" required>                              
          </div><br>
          <div class="form-group col-md-6">
            <label for="assign" class="font-weight-bold">Select Lawyer</label>
              <?php
              $connection = mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,'lawyerclient');

              $query = "SELECT * FROM system WHERE user='Lawyer'";
              $query_run = mysqli_query($connection, $query);
              ?>
            <select name="assign" class="form-control" required>
              <option value="" selected disabled>Select A Lawyer From Here</option>
              <?php

              if($query_run){
                foreach($query_run as $row)
              {
              ?>
              <option><?php echo $row['name']; ?></option>
              <?php
                }
              }
              else
              {
                echo "NO record found";
              }

              ?>
            </select>                                        
          </div><br>
          <div class="form-group">
            <label>Enter Summary Of Case</label>
            <input type="text" name="summary" class="form-control" maxlength="100" placeholder="Enter Summary">                              
          </div><br>
          <div class="form-group">
            <label>Enter Budget Of Case</label>
            <input type="number" name="budget" class="form-control" maxlength="100" placeholder="Enter Budget" required>                              
          </div><br>
          <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" hidden>
          <input type="text" class="form-control" name="addby" value="<?php echo $_SESSION['user']['id']; ?>" hidden>               
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 100px;">Close</button>
          <button type="submit" name="save" class="btn btn-primary rounded-pill" style="width: 100px;">Add</button>                               
        </div>
      </form>
    </div>    
  </div>
</div>
<!-- End Of new case Modal -->

<!-- Edit client case modal -->
<div class="modal fade" id="editcase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <h5 class="modal-title" id="exampleModalLabel">Edit Case</h5>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="caseconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="update_caseid" id="update_caseid">
          <div class="form-group">
            <label>Enter Title</label>
            <input type="text" name="title" id="title" class="form-control" required>                    
          </div><br>
          <div class="form-group col-md-6">
            <label for="assign" class="font-weight-bold">Select Lawyer</label>
              <?php
              $connection = mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,'lawyerclient');

              $query = "SELECT * FROM system WHERE user='Lawyer'";
              $query_run = mysqli_query($connection, $query);
              ?>
            <select name="assign" id="assign" class="form-control" required>
              <option value="" selected disabled>Select A Lawyer From Here</option>
              <?php

              if($query_run){
                foreach($query_run as $row)
              {
              ?>
              <option><?php echo $row['name']; ?></option>
              <?php
                }
              }
              else
              {
                echo "NO record found";
              }

              ?>
            </select>                                        
          </div><br>
          <div class="form-group">
            <label>Enter Summary Of Case</label>
            <input type="text" name="summary" id="summary" class="form-control" maxlength="100" placeholder="Enter Summary">                              
          </div><br>
          <div class="form-group">
            <label>Enter Budget Of Case</label>
            <input type="number" name="budget" id="budget" class="form-control" maxlength="100" placeholder="Enter Budget" required>                              
          </div><br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="edit" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>     
        </div>
     </form>
    </div>    
  </div>
</div>
<!-- end of edit client case modal -->

<!-- Client case View Modal -->
<div class="modal fade" id="viewcase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Case</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form>
          <div class="modal-body">
            <ol>
              <li>Case ID : <span id="viewid"></span></li><br>
              <li>Title : <span id="viewtitle"></span></li><br>
              <li>Assigned Lawyer : <span id="viewlawyer"></span></li><br>
              <li>Case Summary : <span id="viewsummary"></span></li><br>
              <li>Budget : <span id="viewbudget"></span></li><br>
              <li>Status : <span id="viewstatus"></span></li><br>
              <li>Started Date : <span id="viewdate"></span></li><br>
            </ol>
          </div>          
        </form>      
    </div>
  </div>
</div>

<!-- Client case Delete Modal -->
<div class="modal fade" id="deletecase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Case</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="caseconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="delete_caseid" id="delete_caseid">            
          Do you want to delete this data?   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">No</button>
          <button type="submit" name="delete" class="btn btn-danger rounded-pill" style="width: 80px;">Yes</button>
        </div>
     </form>
    </div>    
  </div>
</div>

<!-- new case View Modal -->
<div class="modal fade" id="newcaseview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Case</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form>
          <div class="modal-body">
            <ol>
              <li>Case ID : <span id="ncid"></span></li><br>
              <li>Title : <span id="nctitle"></span></li><br>
              <li>Client's Name : <span id="ncclient"></span></li><br>
              <li>Case Summary : <span id="ncsummary"></span></li><br>
              <li>Budget : <span id="ncbudget"></span></li><br>
              <li>Lawyer's Offer : <span id="ncoffer"></span></li><br>
            </ol>
          </div>          
        </form>      
    </div>
  </div>
</div>

<!--Accept case Modal -->
<div class="modal fade" id="acceptcase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Accept Case</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="caseconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="accept_caseid" id="accept_caseid">
          <?php 
          if (Lawyer()) {      
          ?>            
          Do you want to accept this case?
          <?php }
          else{
          }
          ?>
          <?php 
          if (Client())  {
          ?>
          Do you want to accept this offer?
          <?php }
          else{
          }
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">No</button>
          <button type="submit" name="accept" class="btn btn-success rounded-pill" style="width: 80px;">Yes</button>
        </div>
     </form>
    </div>    
  </div>
</div>

<!--Reject case Modal -->
<div class="modal fade" id="rejectcase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reject Case</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="caseconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="reject_caseid" id="reject_caseid"> 
          <?php 
          if (Lawyer()) {      
          ?>            
          Do you want to reject this case?
          <?php }
          else{
          }
          ?>
          <?php 
          if (Client())  {
          ?>
          Do you want to reject this offer?
          <?php }
          else{
          }
          ?>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">No</button>
          <button type="submit" name="reject" class="btn btn-danger rounded-pill" style="width: 80px;">Yes</button>
        </div>
     </form>
    </div>    
  </div>
</div>

<!--Send off Modal -->
<div class="modal fade" id="sendoffer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Offer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="caseconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="offer_caseid" id="offer_caseid">            
          <div class="form-group">
            <label>Enter an offer</label>
            <input type="number" name="offer" id="offer" class="form-control" maxlength="100" placeholder="Enter an offer" required>                              
          </div><br> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="send" class="btn btn-success rounded-pill" style="width: 80px;">Send</button>
        </div>
     </form>
    </div>    
  </div>
</div>

<!--Change status Modal -->
<div class="modal fade" id="changestatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="caseconn.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="change_statusid" id="change_statusid">            
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="status" class="font-weight-bold">Status</label>
              <select name="status" id="casestatus" class="form-control" required>
                <option selected disabled>Select status from here</option>
                <option value="Pending">Pending</option>
                <option value="Active">Active</option>
                <option value="Completed">Completed</option>
                <option value="Rejected">Rejected</option>
              </select>
            </div>
          </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" style="width: 80px;">Close</button>
          <button type="submit" name="change" class="btn btn-primary rounded-pill" style="width: 80px;">Update</button>
        </div>
     </form>
    </div>    
  </div>
</div>

    <?php
    if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
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
    <h5 class="text-center text-muted">Welcome <?php echo $row ['name'];?></h5><br>
    <?php
            }
    }
    else
    {
        echo "NO record found";
        }

    ?>    
    <button type="button" class="btn btn-success rounded-pill" title="Add to do" style="margin-left: 225px;" data-bs-toggle="modal" data-bs-target="#add"><i class="fa fa-plus"></i></button>
    <div class="row justify-content-center">
      <div class="col-4">
        <div>
          <h6 class="text-center"><strong>To Do</strong></h6>
          <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'lawyerclient');
            $id = $_SESSION['user']['id'];

            $limit = 10;  
            if (isset($_GET["page"])) {
            $page  = $_GET["page"]; 
            } 
            else{ 
            $page=1;
            };  
            $start_from = ($page-1) * $limit;

            $query = "SELECT * FROM todo WHERE addby='$id' ORDER BY status LIMIT $start_from, $limit";
            $query_run = mysqli_query($connection, $query);
          ?>
          <table class="table table-light table-hover table-bordered">
            <thead>
              <tr>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

              if($query_run){
                  foreach($query_run as $row)
                  {
            ?>
            <tbody>
            <tr>
              <td style="display:none;"><?php echo $row ['id'];?></td>
              <td><?php echo $row ['details'];?></td>
              <td style="display:none;"><?php echo $row ['date'];?></td>
              <td style="display:none;"><?php echo $row ['addby'];?></td>
              <td><?php echo $row ['status'];?></td>
              <td class="text-end">                 
              <button title="edit" class="btn btn-none rounded-pill edittodo" data-bs-toggle="modal" data-bs-target="#edit" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button>
              <button title="delete" class="btn btn-none rounded-pill deletetodo" data-bs-toggle="modal" data-bs-target="#delete" style="width: 40px;"><i class="fa fa-trash-o"></i></button>                  
              </td>
            </tr>              
            </tbody>
            <?php
                    }
            }
            else
            {
                echo "NO record found";
                }

            ?> 
          </table>
          <?php  

            $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM todo WHERE addby='$id'"); 
            $row_db = mysqli_fetch_row($result_db);  
            $total_records = $row_db[0];  
            $total_pages = ceil($total_records / $limit); 
            
            $pagLink = "<ul class='pagination'>";  
            for ($i=1; $i<=$total_pages; $i++) {
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
            }
            echo $pagLink . "</ul>";  
          ?>
        </div>            
      </div>
      <?php    

      if (Lawyer()) {   
      
      ?>
      <div class="col-4">
        <div>
          <h6 class="text-center"><strong>New Cases</strong></h6>
          <?php
            $limit = 15;  
            if (isset($_GET["page"])) {
            $page  = $_GET["page"]; 
            } 
            else{ 
            $page=1;
            };  
            $start_from = ($page-1) * $limit;

            $query = "SELECT *, C.id, S.name AS Client FROM cases C INNER JOIN system S ON C.addby = S.id WHERE assign='$id' && status='Pending' ORDER BY status LIMIT $start_from, $limit";
            $query_run = mysqli_query($connection, $query);
          ?>
          <table class="table table-light table-hover table-bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>Client</th>
                <th>Budget</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

              if($query_run){
                  foreach($query_run as $row)
                  {
            ?>
            <tbody>
            <tr>
              <td style="display:none;"><?php echo $row ['id'];?></td>
              <td><?php echo $row ['title'];?></td>
              <td><?php echo $row ['Client'];?></td>
              <td style="display:none;"><?php echo $row ['summary'];?></td>
              <td><?php echo $row ['budget'];?></td>
              <td style="display:none;"><?php echo $row ['status'];?></td>
              <td style="display:none;"><?php echo $row ['offer'];?></td>
              <td class="text-end">
                <button title="see more" class="btn btn-nome rounded-pill viewcasebtn" data-bs-toggle="modal" data-bs-target="#newcaseview" style="width: 30px;"><i class="fa fa-info"></i></button>                 
                <button title="accept case" class="btn btn-none rounded-pill acceptbtn" data-bs-toggle="modal" data-bs-target="#acceptcase" style="width: 30px;"><i class="fa fa-check"></i></button> 
                <button title="reject case" class="btn btn-none rounded-pill rejectbtn" data-bs-toggle="modal" data-bs-target="#rejectcase" style="width: 30px;"><i class="fa fa-times"></i></button>
                <button title="send offer" class="btn btn-none rounded-pill offerbtn" data-bs-toggle="modal" data-bs-target="#sendoffer" style="width: 30px;"><i class="fa fa-usd"></i></button>                
              </td>
            </tr>              
            </tbody>
            <?php
                    }
            }
            else
            {
                echo "NO record found";
            }

            ?> 
          </table>
          <?php  

            $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE assign='$id' && status='Pending'"); 
            $row_db = mysqli_fetch_row($result_db);  
            $total_records = $row_db[0];  
            $total_pages = ceil($total_records / $limit); 
            
            $pagLink = "<ul class='pagination'>";  
            for ($i=1; $i<=$total_pages; $i++) {
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
            }
            echo $pagLink . "</ul>";  
          ?>
        </div>
      </div>
        
      <?php }

      else{
      }

      ?>
      <?php 

      if (Client())  { 

      ?>
      <div class="col-4">
        <div class="d-flex justify-content-center">
          <button title="Add new case" class="btn btn-none border border-success" data-bs-toggle="modal" data-bs-target="#newcase" style="width: 140px; height: 140px;"><i class="fa fa-plus"></i> Add New Case</button>&nbsp;&nbsp;&nbsp;
          <img src="./assets/agree.png" width="150" height="150">
        </div>
      </div>
      <?php }

      else{
      }

      ?>
    </div>

    <?php    

      if (Lawyer()) {   
      
    ?>

    <div class="row justify-content-center">
      <div class="col-8">
        <div>
          <h6 class="text-center">Active Cases</h6>
          <?php
            $limit = 15;  
            if (isset($_GET["page"])) {
            $page  = $_GET["page"]; 
            } 
            else{ 
            $page=1;
            };  
            $start_from = ($page-1) * $limit;

            $query = "SELECT *, C.id, S.name AS Client FROM cases C INNER JOIN system S ON C.addby = S.id WHERE assign='$id' && status='Active' ORDER BY status LIMIT $start_from, $limit";
            $query_run = mysqli_query($connection, $query);
          ?>
          <table class="table table-light table-hover table-bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>Client</th>
                <th>Budget</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

              if($query_run){
                  foreach($query_run as $row)
                  {
            ?>
            <tbody>
            <tr>
              <td style="display:none;"><?php echo $row ['id'];?></td>
              <td><?php echo $row ['title'];?></td>
              <td><?php echo $row ['Client'];?></td>
              <td style="display:none;"><?php echo $row ['summary'];?></td>
              <td><?php echo $row ['budget'];?></td>
              <td style="display:none;"><?php echo $row ['status'];?></td>
              <td style="display:none;"><?php echo $row ['offer'];?></td>
              <td class="text-end">
                <button title="see more" class="btn btn-nome rounded-pill viewcasebtn" data-bs-toggle="modal" data-bs-target="#newcaseview" style="width: 40px;"><i class="fa fa-info"></i></button>                 
                <button title="accept case" class="btn btn-none rounded-pill statusbtn" data-bs-toggle="modal" data-bs-target="#changestatus" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button> 
            </tr>              
            </tbody>
            <?php
                    }
            }
            else
            {
                echo "NO record found";
                }

            ?> 
          </table>
          <?php  

            $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE assign='$id' && status='Active'"); 
            $row_db = mysqli_fetch_row($result_db);  
            $total_records = $row_db[0];  
            $total_pages = ceil($total_records / $limit); 
            
            $pagLink = "<ul class='pagination'>";  
            for ($i=1; $i<=$total_pages; $i++) {
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
            }
            echo $pagLink . "</ul>";  
          ?>
        </div>
      </div><br>

      <div class="col-8">
        <div>
          <h6 class="text-center">Completed Cases</h6>
          <?php
            $limit = 15;  
            if (isset($_GET["page"])) {
            $page  = $_GET["page"]; 
            } 
            else{ 
            $page=1;
            };  
            $start_from = ($page-1) * $limit;

            $query = "SELECT *, C.id, S.name AS Client FROM cases C INNER JOIN system S ON C.addby = S.id WHERE assign='$id' && status='Completed' ORDER BY status LIMIT $start_from, $limit";
            $query_run = mysqli_query($connection, $query);
          ?>
          <table class="table table-light table-hover table-bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>Client</th>
                <th>Budget</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

              if($query_run){
                  foreach($query_run as $row)
                  {
            ?>
            <tbody>
            <tr>
              <td style="display:none;"><?php echo $row ['id'];?></td>
              <td><?php echo $row ['title'];?></td>
              <td><?php echo $row ['Client'];?></td>
              <td style="display:none;"><?php echo $row ['summary'];?></td>
              <td><?php echo $row ['budget'];?></td>
              <td style="display:none;"><?php echo $row ['status'];?></td>
              <td style="display:none;"><?php echo $row ['offer'];?></td>
              <td class="text-end">
                <button title="see more" class="btn btn-nome rounded-pill viewcasebtn" data-bs-toggle="modal" data-bs-target="#newcaseview" style="width: 40px;"><i class="fa fa-info"></i></button>                 
                <button title="accept case" class="btn btn-none rounded-pill statusbtn" data-bs-toggle="modal" data-bs-target="#changestatus" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button> 
            </tr>              
            </tbody>
            <?php
                    }
            }
            else
            {
                echo "NO record found";
                }

            ?> 
          </table>
          <?php  

            $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE assign='$id' && status='Completed'"); 
            $row_db = mysqli_fetch_row($result_db);  
            $total_records = $row_db[0];  
            $total_pages = ceil($total_records / $limit); 
            
            $pagLink = "<ul class='pagination'>";  
            for ($i=1; $i<=$total_pages; $i++) {
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
            }
            echo $pagLink . "</ul>";  
          ?>
        </div>
      </div><br>

      <div class="col-8">
        <div>
          <h6 class="text-center">Rejected Cases</h6>
          <?php
            $limit = 15;  
            if (isset($_GET["page"])) {
            $page  = $_GET["page"]; 
            } 
            else{ 
            $page=1;
            };  
            $start_from = ($page-1) * $limit;

            $query = "SELECT *, C.id, S.name AS Client FROM cases C INNER JOIN system S ON C.addby = S.id WHERE assign='$id' && status='Rejected' ORDER BY status LIMIT $start_from, $limit";
            $query_run = mysqli_query($connection, $query);
          ?>
          <table class="table table-light table-hover table-bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>Client</th>
                <th>Budget</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

              if($query_run){
                  foreach($query_run as $row)
                  {
            ?>
            <tbody>
            <tr>
              <td style="display:none;"><?php echo $row ['id'];?></td>
              <td><?php echo $row ['title'];?></td>
              <td><?php echo $row ['Client'];?></td>
              <td style="display:none;"><?php echo $row ['summary'];?></td>
              <td><?php echo $row ['budget'];?></td>
              <td style="display:none;"><?php echo $row ['status'];?></td>
              <td style="display:none;"><?php echo $row ['offer'];?></td>
              <td class="text-end">
                <button title="see more" class="btn btn-nome rounded-pill viewcasebtn" data-bs-toggle="modal" data-bs-target="#newcaseview" style="width: 40px;"><i class="fa fa-info"></i></button>                 
                <button title="accept case" class="btn btn-none rounded-pill statusbtn" data-bs-toggle="modal" data-bs-target="#changestatus" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button> 
            </tr>              
            </tbody>
            <?php
                    }
            }
            else
            {
                echo "NO record found";
                }

            ?> 
          </table>
          <?php  

            $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE assign='$id' && status='Rejected'"); 
            $row_db = mysqli_fetch_row($result_db);  
            $total_records = $row_db[0];  
            $total_pages = ceil($total_records / $limit); 
            
            $pagLink = "<ul class='pagination'>";  
            for ($i=1; $i<=$total_pages; $i++) {
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
            }
            echo $pagLink . "</ul>";  
          ?>
        </div>
      </div><br>
    </div>
    <?php }

      else{
      }

    ?>
    <?php 

    if (Client())  { 

    ?>   
    
    <div class="row justify-content-center">
    <div class="col-8">
        <h6 class="text-center">Received Offers</h6>
        <?php
          $limit = 10;  
          if (isset($_GET["page"])) {
          $page  = $_GET["page"]; 
          } 
          else{ 
          $page=1;
          };  
          $start_from = ($page-1) * $limit;

          $query = "SELECT *, C.id, S.name AS Lawyer FROM cases C INNER JOIN system S ON C.assign = S.id WHERE addby='$id' && status='Pending' && offer>'0' ORDER BY status LIMIT $start_from, $limit";
          $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table table-light table-hover table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Lawyer</th>
              <th>Budget</th>
              <th>Lawyer's Offer</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php

            if($query_run){
                foreach($query_run as $row)
                {
          ?>
          <tbody>
          <tr>
            <td style="display:none;"><?php echo $row ['id'];?></td>
            <td><?php echo $row ['title'];?></td>
            <td><?php echo $row ['Lawyer'];?></td>
            <td style="display:none;"><?php echo $row ['summary'];?></td>
            <td><?php echo $row ['budget'];?></td>
            <td><?php echo $row ['offer'];?></td>
            <td style="display:none;"><?php echo $row ['date'];?></td>
            <td class="text-end">                
              <button title="accept offer" class="btn btn-none rounded-pill acceptbtn" data-bs-toggle="modal" data-bs-target="#acceptcase" style="width: 30px;"><i class="fa fa-check"></i></button> 
              <button title="reject offer" class="btn btn-none rounded-pill rejectbtn" data-bs-toggle="modal" data-bs-target="#rejectcase" style="width: 30px;"><i class="fa fa-times"></i></button>                  
            </td>
          </tr>              
          </tbody>
          <?php
                  }
          }
          else
          {
            echo "NO record found";
          }

          ?> 
        </table>
        <?php  

          $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE addby='$id' && (status='Active' || status='Pending')"); 
          $row_db = mysqli_fetch_row($result_db);  
          $total_records = $row_db[0];  
          $total_pages = ceil($total_records / $limit); 
          
          $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
                      $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
          }
          echo $pagLink . "</ul>";  
        ?>                   
      </div><br>

      <div class="col-8">
        <h6 class="text-center">Pending and Active Cases</h6>
        <?php
          $limit = 15;  
          if (isset($_GET["page"])) {
          $page  = $_GET["page"]; 
          } 
          else{ 
          $page=1;
          };  
          $start_from = ($page-1) * $limit;

          $query = "SELECT *, C.id, S.name AS Lawyer FROM cases C INNER JOIN system S ON C.assign = S.id WHERE addby='$id' && (status='Active' || status='Pending') ORDER BY status LIMIT $start_from, $limit";
          $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table table-light table-hover table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Lawyer</th>
              <th>Budget</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php

            if($query_run){
                foreach($query_run as $row)
                {
          ?>
          <tbody>
          <tr>
            <td style="display:none;"><?php echo $row ['id'];?></td>
            <td><?php echo $row ['title'];?></td>
            <td><?php echo $row ['Lawyer'];?></td>
            <td style="display:none;"><?php echo $row ['summary'];?></td>
            <td><?php echo $row ['budget'];?></td>
            <td><?php echo $row ['status'];?></td>
            <td style="display:none;"><?php echo $row ['date'];?></td>
            <td class="text-end">
              <button title="see more" class="btn btn-none rounded-pill viewclientcase" data-bs-toggle="modal" data-bs-target="#viewcase" style="width: 40px;"><i class="fa fa-info"></i></button>                 
              <button title="edit" class="btn btn-none rounded-pill editclientcase" data-bs-toggle="modal" data-bs-target="#editcase" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button>
              <button title="delete" class="btn btn-none rounded-pill deleteclientcase" data-bs-toggle="modal" data-bs-target="#deletecase" style="width: 40px;"><i class="fa fa-trash-o"></i></button>                  
            </td>
          </tr>              
          </tbody>
          <?php
                  }
          }
          else
          {
              echo "NO record found";
              }

          ?> 
        </table>
        <?php  

          $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE addby='$id' && (status='Active' || status='Pending')"); 
          $row_db = mysqli_fetch_row($result_db);  
          $total_records = $row_db[0];  
          $total_pages = ceil($total_records / $limit); 
          
          $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
                      $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
          }
          echo $pagLink . "</ul>";  
        ?>                   
      </div><br>
      <div class="col-8">
        <h6 class="text-center">Completed Cases</h6>
        <?php
          $limit = 15;  
          if (isset($_GET["page"])) {
          $page  = $_GET["page"]; 
          } 
          else{ 
          $page=1;
          };  
          $start_from = ($page-1) * $limit;

          $query = "SELECT *, C.id, S.name AS Lawyer FROM cases C INNER JOIN system S ON C.assign = S.id WHERE addby='$id' && status='Completed' ORDER BY status LIMIT $start_from, $limit";
          $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table table-light table-hover table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Lawyer</th>
              <th>Budget</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php

            if($query_run){
                foreach($query_run as $row)
                {
          ?>
          <tbody>
          <tr>
            <td style="display:none;"><?php echo $row ['id'];?></td>
            <td><?php echo $row ['title'];?></td>
            <td><?php echo $row ['Lawyer'];?></td>
            <td style="display:none;"><?php echo $row ['summary'];?></td>
            <td><?php echo $row ['budget'];?></td>
            <td><?php echo $row ['status'];?></td>
            <td style="display:none;"><?php echo $row ['date'];?></td>
            <td class="text-end">
              <button title="see more" class="btn btn-none rounded-pill viewclientcase" data-bs-toggle="modal" data-bs-target="#viewcase" style="width: 40px;"><i class="fa fa-info"></i></button>                 
              <button title="edit" class="btn btn-none rounded-pill editclientcase" data-bs-toggle="modal" data-bs-target="#editcase" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button>
              <button title="delete" class="btn btn-none rounded-pill deleteclientcase" data-bs-toggle="modal" data-bs-target="#deletecase" style="width: 40px;"><i class="fa fa-trash-o"></i></button>                  
            </td>
          </tr>              
          </tbody>
          <?php
                  }
          }
          else
          {
              echo "NO record found";
              }

          ?> 
        </table>
        <?php  

          $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE addby='$id' && status='Completed'"); 
          $row_db = mysqli_fetch_row($result_db);  
          $total_records = $row_db[0];  
          $total_pages = ceil($total_records / $limit); 
          
          $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
                      $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
          }
          echo $pagLink . "</ul>";  
        ?>                   
      </div><br>
      <div class="col-8">
        <h6 class="text-center">Rejected Cases</h6>
        <?php
          $limit = 15;  
          if (isset($_GET["page"])) {
          $page  = $_GET["page"]; 
          } 
          else{ 
          $page=1;
          };  
          $start_from = ($page-1) * $limit;

          $query = "SELECT *, C.id, S.name AS Lawyer FROM cases C INNER JOIN system S ON C.assign = S.id WHERE addby='$id' && status='Rejected' ORDER BY status LIMIT $start_from, $limit";
          $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table table-light table-hover table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Lawyer</th>
              <th>Budget</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php

            if($query_run){
                foreach($query_run as $row)
                {
          ?>
          <tbody>
          <tr>
            <td style="display:none;"><?php echo $row ['id'];?></td>
            <td><?php echo $row ['title'];?></td>
            <td><?php echo $row ['Lawyer'];?></td>
            <td style="display:none;"><?php echo $row ['summary'];?></td>
            <td><?php echo $row ['budget'];?></td>
            <td><?php echo $row ['status'];?></td>
            <td style="display:none;"><?php echo $row ['date'];?></td>
            <td class="text-end">
              <button title="see more" class="btn btn-none rounded-pill viewclientcase" data-bs-toggle="modal" data-bs-target="#viewcase" style="width: 40px;"><i class="fa fa-info"></i></button>                 
              <button title="edit" class="btn btn-none rounded-pill editclientcase" data-bs-toggle="modal" data-bs-target="#editcase" style="width: 40px;"><i class="fa fa-pencil-square-o"></i></button>
              <button title="delete" class="btn btn-none rounded-pill deleteclientcase" data-bs-toggle="modal" data-bs-target="#deletecase" style="width: 40px;"><i class="fa fa-trash-o"></i></button>                  
            </td>
          </tr>              
          </tbody>
          <?php
                  }
          }
          else
          {
              echo "NO record found";
              }

          ?> 
        </table>
        <?php  

          $result_db = mysqli_query($connection,"SELECT COUNT(id) FROM cases WHERE addby='$id' && status='Rejected'"); 
          $row_db = mysqli_fetch_row($result_db);  
          $total_records = $row_db[0];  
          $total_pages = ceil($total_records / $limit); 
          
          $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
                      $pagLink .= "<li class='page-item'><a class='page-link' href='home.php?page=".$i."'>".$i."</a></li>";	
          }
          echo $pagLink . "</ul>";  
        ?>                   
      </div><br>          
    </div>
    <?php }

    else{
    }

    ?>   

    

<!-- Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>  

<script>

$(document).ready(function(){
    $('.edittodo').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#update_todoid').val(data[0]);
      $('#details').val(data[1]);
      $('#status').val(data[4]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.deletetodo').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#delete_todoid').val(data[0]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.editclientcase').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#update_caseid').val(data[0]);
      $('#title').val(data[1]);
      $('#assign').val(data[2]);
      $('#summary').val(data[3]);
      $('#budget').val(data[4]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.viewclientcase').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);
      
      document.getElementById('viewid').innerHTML = data[0];
      document.getElementById('viewtitle').innerHTML = data[1];
      document.getElementById('viewlawyer').innerHTML = data[2];
      document.getElementById('viewsummary').innerHTML = data[3];
      document.getElementById('viewbudget').innerHTML = data[4];
      document.getElementById('viewstatus').innerHTML = data[5];
      document.getElementById('viewdate').innerHTML = data[6];
    });
});

</script>

<script>

$(document).ready(function(){
    $('.deleteclientcase').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#delete_caseid').val(data[0]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.viewcasebtn').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);
      
      document.getElementById('ncid').innerHTML = data[0];
      document.getElementById('nctitle').innerHTML = data[1];
      document.getElementById('ncclient').innerHTML = data[2];
      document.getElementById('ncsummary').innerHTML = data[3];
      document.getElementById('ncbudget').innerHTML = data[4];
      document.getElementById('ncoffer').innerHTML = data[6];
    });
});

</script>

<script>

$(document).ready(function(){
    $('.acceptbtn').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#accept_caseid').val(data[0]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.rejectbtn').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#reject_caseid').val(data[0]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.statusbtn').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#change_statusid').val(data[0]);
      $('#casestatus').val(data[5]);
    });
});

</script>

<script>

$(document).ready(function(){
    $('.offerbtn').on('click', function(){
        

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
          return $(this).text();      

      }).get();

      console.log(data);

      $('#offer_caseid').val(data[0]);
      $('#offer').val(data[6]);
    });
});

</script>

</body>
</html>