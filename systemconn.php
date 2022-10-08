<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'lawyerclient');

if (isset($_POST['create'])) {
    $name = $_POST ['name'];
    $username = $_POST ['username'];
    $user = $_POST ['user'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $cmpassword = $_POST ['cmpassword'];
    $regdate = $_POST ['regdate'];
    $password = md5($password);

    $userquery = "SELECT * FROM system WHERE username='$username'";
    $userquery_run = mysqli_query($db, $userquery);

    if($userquery_run){
      foreach($userquery_run as $row)
      {
        $usernamecheck = $row ['username'];
        }
    }
    else
    {

    }

    $emailquery = "SELECT * FROM system WHERE email='$email'";
    $emailquery_run = mysqli_query($db, $emailquery);

    if($emailquery_run){
      foreach($emailquery_run as $row)
      {
        $emailcheck = $row ['email'];
        }
    }
    else
    {

    }	

  	if ($usernamecheck == $username) {
      $_SESSION['message'] = "Username already taken!";
      $_SESSION['msg_type'] = "danger";
      header('Location: ' . $_SERVER['HTTP_REFERER']);	
  	}
    else if($emailcheck == $email){
      $_SESSION['message'] = "That email already using in the system!";
      $_SESSION['msg_type'] = "danger";
      header('Location: ' . $_SERVER['HTTP_REFERER']);	
    }
    else{
      $query = "INSERT INTO system (name, username, user, email, password, regdate) 
          VALUES ('$name', '$username', '$user', '$email', '$password', '$regdate')";
      $results = mysqli_query($db, $query);
      $_SESSION['message'] = "Account created!";
      $_SESSION['msg_type'] = "success";
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  	}
}

if (isset($_POST['login_btn'])) {

	$username = $_POST['username'];
	$password = md5 ($_POST['password']);
		

		$query = "SELECT * FROM system WHERE (username='$username' || email='$username') AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$logged_in_user = mysqli_fetch_assoc($results);

			            
            if ($logged_in_user['user'] == 'Lawyer') {

                $_SESSION['user'] = $logged_in_user;
                header('location: home.php');

            }
            else if ($logged_in_user['user'] == 'Client'){
                $_SESSION['user'] = $logged_in_user;

                header('location: home.php');
            }
			
		}
		else {
			$_SESSION['message'] = "Invalid username or password";

			header("location: system.php");
		}		
}

function Lawyer()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user'] == 'Lawyer' ) {
		return true;
	}else {
		return false;
	}
}

function Client()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user'] == 'Client' ) {
		return true;
	}else {
		return false;
	}
}



?>
