<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'lawyerclient');

if (isset($_POST['save'])) {
    $details = $_POST ['details'];
    $date = $_POST ['date'];
    $addby = $_POST ['addby'];
  
    $query = "INSERT INTO todo (details, date, addby, status) 
        VALUES ('$details', '$date', '$addby', 'Active')";
    $results = mysqli_query($db, $query);
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    header('Location: ' . $_SERVER['HTTP_REFERER']);  	
}

if(isset($_POST['edit'])) {

    $id = $_POST['update_todoid'];
    $details = $_POST ['details'];
    $status = $_POST ['status'];
    $editdate = $_POST ['editdate'];

    $query = "UPDATE todo SET details='$details', status='$status', editdate='$editdate' WHERE id='$id'";
    $results = mysqli_query($db, $query);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('Location: ' . $_SERVER['HTTP_REFERER']);   
          
      
}

if(isset($_POST['delete'])){
    $id = $_POST['delete_todoid'];
  
    $query = "DELETE FROM todo WHERE id='$id'";
    $results = mysqli_query($db, $query);
  
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
  
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  
}

?>