<?php
  $USN = $_POST['USN'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = new mysqli('localhost', 'root', '', 'studentresults');
  if($conn->connect_error){
    die("Failed to connect :".$conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into login_info(USN, name, email, password) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$USN, $name, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header('Location: login.html');
  }
?>
