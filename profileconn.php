<?php 

session_start();

$db = mysqli_connect('localhost', 'root', '', 'lawyerclient');

if(isset($_POST['upname'])) {

    $id = $_POST['update_nameid'];  
    $name = $_POST ['name'];

    $query = "UPDATE system SET name='$name' WHERE id='$id'";
    $results = mysqli_query($db, $query);
  
    $_SESSION['message'] = "Name has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('Location: ' . $_SERVER['HTTP_REFERER']);               
        
}

if(isset($_POST['upusername'])) {

    $id = $_POST['update_usernameid'];
  
    $username = $_POST ['username'];

    $sql_u = "SELECT * FROM system WHERE username='$username'";
    $res_u = mysqli_query($db, $sql_u);
  
    if (mysqli_num_rows($res_u) > 0) {
        $_SESSION['message'] = "Username already taken!";
        $_SESSION['msg_type'] = "danger";
        header('Location: ' . $_SERVER['HTTP_REFERER']);	
    }
    else {
        $query = "UPDATE system SET username='$username' WHERE id='$id'";
        $results = mysqli_query($db, $query);
  
        $_SESSION['message'] = "Username has been updated!";
        $_SESSION['msg_type'] = "warning";

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }            
        
}

if(isset($_POST['upemail'])) {

    $id = $_POST['update_emailid'];
  
    $email = $_POST ['email'];

    $sql_u = "SELECT * FROM system WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u);
  
    if (mysqli_num_rows($res_u) > 0) {
        $_SESSION['message'] = "That email already using in the system!";
        $_SESSION['msg_type'] = "danger";
        header('Location: ' . $_SERVER['HTTP_REFERER']);	
    }
    else {
        $query = "UPDATE system SET email='$email' WHERE id='$id'";
        $results = mysqli_query($db, $query);
  
        $_SESSION['message'] = "Email has been updated!";
        $_SESSION['msg_type'] = "warning";

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }            
        
}

if(isset($_POST['changepassword'])) {

    $id = $_POST['update_passid'];
  
    $currentpass = md5 ($_POST['currentpass']);
    $newpass = $_POST ['newpass'];
    $confirmpass = $_POST ['confirmpass'];
    $password = md5($newpass);

    $sql_p = "SELECT * FROM system WHERE id='$id' and password='$currentpass'";
    $res_p = mysqli_query($db, $sql_p);
  
    if (mysqli_num_rows($res_p) > 0) {
        $query = "UPDATE system SET password='$password' WHERE id='$id'";
        $results = mysqli_query($db, $query);
  
            $_SESSION['message'] = "Password has been updated!";
            $_SESSION['msg_type'] = "warning";
  
            header('Location: ' . $_SERVER['HTTP_REFERER']);	
    }
    else {
        $_SESSION['message'] = "Invalid Current Password!";
        $_SESSION['msg_type'] = "danger";
        header('Location: ' . $_SERVER['HTTP_REFERER']);        
    }            
        
}

?>