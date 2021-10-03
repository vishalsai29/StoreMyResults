<?php 
  session_start();
?>


<?php
  $USN = $_POST['USN'];
  $password = $_POST['password'];
  $_SESSION['D_USN'] = $USN;

  $con = new mysqli("localhost", "root", "", "studentresults");
  if($con->connect_error){
    die("Failed to connect :".$con->connect_error);
  }else {
    $stmt = $con->prepare("select * from login_info where USN = ?");
    $stmt->bind_param("s", $USN);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows >0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password){
        header('Location: dashboard.php');
      } else{
        echo '<script type="text/javascript"> alert("Invalid Info1")</script>';
      }
    }else{
      echo '<script type="text/javascript"> alert("Invalid Info")</script>';
    }
  }
?>
