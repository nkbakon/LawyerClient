<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'lawyerclient');

if (isset($_POST['save'])) {
    $title = $_POST ['title'];
    $assign = $_POST ['assign'];
    $summary = $_POST ['summary'];
    $budget = $_POST ['budget'];
    $date = $_POST ['date'];
    $addby = $_POST ['addby'];

    $userquery = "SELECT * FROM system WHERE name='$assign'";
    $userquery_run = mysqli_query($db, $userquery);

    if($userquery_run){
      foreach($userquery_run as $row)
      {
        $assignid = $row ['id'];
        }
    }
    else
    {

    }
  
    $query = "INSERT INTO cases (title, assign, summary, budget, status, date, addby) 
        VALUES ('$title', '$assignid', '$summary', '$budget', 'Pending', '$date', '$addby')";
    $results = mysqli_query($db, $query);
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    header('Location: ' . $_SERVER['HTTP_REFERER']);  	
}

if(isset($_POST['edit'])) {

    $id = $_POST['update_caseid'];
    $title = $_POST ['title'];
    $assign = $_POST ['assign'];
    $summary = $_POST ['summary'];
    $budget = $_POST ['budget'];

    $userquery = "SELECT * FROM system WHERE name='$assign'";
    $userquery_run = mysqli_query($db, $userquery);

    if($userquery_run){
      foreach($userquery_run as $row)
      {
        $assignid = $row ['id'];
        }
    }
    else
    {

    }

    $query = "UPDATE cases SET title='$title', assign='$assignid', summary='$summary', budget='$budget' WHERE id='$id'";
    $results = mysqli_query($db, $query);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('Location: ' . $_SERVER['HTTP_REFERER']);   
          
      
}

if(isset($_POST['delete'])){
    $id = $_POST['delete_caseid'];
  
    $query = "DELETE FROM cases WHERE id='$id'";
    $results = mysqli_query($db, $query);
  
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
  
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  
}

if(isset($_POST['accept'])){
    $id = $_POST['accept_caseid'];
      
    $query = "UPDATE cases SET status='Active' WHERE id='$id'";
    $results = mysqli_query($db, $query);

    $_SESSION['message'] = "Case accepted!";
    $_SESSION['msg_type'] = "warning";

    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  
}

if(isset($_POST['reject'])){
    $id = $_POST['reject_caseid'];
      
    $query = "UPDATE cases SET status='Rejected' WHERE id='$id'";
    $results = mysqli_query($db, $query);

    $_SESSION['message'] = "Case rejected!";
    $_SESSION['msg_type'] = "warning";

    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  
}

if(isset($_POST['change'])){
    $id = $_POST['change_statusid'];
    $status = $_POST['status'];
      
    $query = "UPDATE cases SET status='$status' WHERE id='$id'";
    $results = mysqli_query($db, $query);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  
}

if(isset($_POST['send'])){
    $id = $_POST['offer_caseid'];
    $offer = $_POST['offer'];
      
    $query = "UPDATE cases SET offer='$offer' WHERE id='$id'";
    $results = mysqli_query($db, $query);

    $_SESSION['message'] = "Offer sent!";
    $_SESSION['msg_type'] = "warning";

    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  
}

?>