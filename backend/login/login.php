<?php

session_start(); 
$error = ''; 

if (isset($_POST['submit'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) { 
    $error = "les champs sont vides"; 
  } 
  else{ 
    
    $username = $_POST['username']; 
    $password = $_POST['password']; 
   
    $conn = mysqli_connect("localhost", "root", "", "cms"); 
    
    $query = "SELECT user, password from admins where user=? AND password=? LIMIT 1;"; 
    
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute();                                        // keeping the session on -security measures-
    $stmt->bind_result($username, $password); 
    $stmt->store_result(); 
    
    if($stmt->fetch())
    { 
      $_SESSION['login_user'] = $username; 
      header("location: ../admin/dashboard_templ/template.php"); 
    }
    else{
      $error = "Your user or password is incorrect";
    } 
  mysqli_close($conn);
} 
} 
?>