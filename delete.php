<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <title>StoreMyResults</title>
  </head>
  <body>
    <div class="logo">
      <a href="dashboard.php"><img src="img/our-official-logo.png" alt="logo"></a>
    </div>
    <nav class="navbar">
      <ul class="nav-list">
        <li><a href="dashboard.php">Home</a></li>
      </ul>
      <div class="right-nav">
        <ul class="right-nav-list">
          <!-- <li><?php echo $email; ?></li> -->
          <li><a href="login.html">Logout</a></li>
        </ul>
      </div>
    </nav><hr>
    <form action="delete.php" method="post">
      <div class="sel_sem">
        <input type="text" placeholder="Enter the semester number to delete results" class="sem" name="sem" required>
        <div class="get_res">
          <button class="gb">Delete</button>
        </div>
      </div>
      <?php
        error_reporting(0);
        $R_USN = $_SESSION['D_USN'];
        $R_SEM = $_POST['sem'];
        
        $con = mysqli_connect("localhost", "root", "", "studentresults");

        if(isset($_POST['sem'])){
          $query = "DELETE FROM $R_SEM WHERE USN='$R_USN'";
          $query_run = mysqli_query($con, $query);

          if($query_run){
            echo '<script type="text/javascript"> alert("Successful")</script>';
          }
          else{
            echo '<script type="text/javascript"> alert("No Data Found")</script>';
          }
        }
      ?>
    </form>
  </body>
</html>
