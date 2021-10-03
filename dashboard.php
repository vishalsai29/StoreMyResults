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
      <a href="index.html"><img src="img/our-official-logo.png" alt="logo"></a>
    </div>
    <nav class="navbar">
      <ul class="nav-list">
        <li><a href="dashboard.php">Home</a></li>
      </ul>
      <div class="right-nav">
        <ul class="right-nav-list">
          <li><a href="login.html">Logout</a></li>
        </ul>
      </div>
    </nav><hr>
    <form action="dashboard.php" method="post">
      <?php 
        $DIS_USN = $_SESSION['D_USN'];

      ?>
    <div class="container">
      <div class="stud_details">
        <span>USN: <?php echo $DIS_USN;?> </span>
      </div>
      <div class="content">
        <ul class="c_list">
          <li class="vr"><a href="viewres.php">View Results</a></li>
          <li class="ins"><a href="insert.php">Insert</a></li>
          <li class="del"><a href="delete.php">Delete</a></li>
        </ul>
      </div>
    </div>
    </form>
  </body>
</html>
