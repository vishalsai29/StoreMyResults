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
  </nav>
  <hr>
  <form action="viewres.php" method="post">
    <div class="php_prnt">
      <p hidden>
        <?php
          $P_USN = $_SESSION['D_USN'];
        ?>
      </p>
    </div>
    <div class="sel_sem">
      <input type="text" placeholder="Enter the semester number to get results" class="sem" name="sem" required>
      <div class="get_res">
        <button class="gb" name="button">Get Results</button>
      </div>
    </div>
    <div class="prnt_res">
      <table>
        <tr>
          <th>Subject 1</th>
          <th>Subject 2</th>
          <th>Subject 3</th>
          <th>Subject 4</th>
          <th>Subject 5</th>
          <th>Subject 6</th>
          <th>Subject 7</th>
        </tr>
        <?php
        error_reporting(0);
        $D_USN = $_SESSION['D_USN'];
        $sem = $_POST['sem'];

        $con = new mysqli("localhost", "root", "", "studentresults");
        if ($con->connect_error) {
          die("Failed to connect :" . $con->connect_error);
        } else {
          if (isset($_POST['button'])) {
            $sql = "SELECT sub1, sub2, sub3, sub4, sub5, sub6, sub7 FROM $sem WHERE USN='$D_USN'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["sub1"] . "</td><td>" . $row["sub2"] . "</td><td>" . $row["sub3"] . "</td><td>" . $row["sub4"] . "</td><td>" . $row["sub5"] . "</td><td>" . $row["sub6"] . "</td><td>" . $row["sub7"] . "</td></tr>";
              }
              echo "</table>";
            } else {
              echo '<script type="text/javascript"> alert("No Result Found")</script>';
            }
          }
          $con->close();
        }
        ?>
      </table>
    </div>
  </form>
  <div class="prnt_btn">
    <button class="pbtn" onclick="window.print()">Print</button>
  </div>
</body>

</html>