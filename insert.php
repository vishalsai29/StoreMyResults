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
    <form action="insert.php" method="post">
    <div class="sel_sem">
      <input type="text" placeholder="Enter the semester number to insert results" class="sem" name="sem" required>
      <div class="get_res">
        <button class="gb" name="ins">Insert</button>
      </div>
    </div>
      <div class="ins_res">
        <table>
          <tr>
            <th>Subjects</th>
            <th>Marks</th>
          </tr>
          <tr>
            <td>Subject-1</td>
            <td><input type="text" name="sub1"></td>
          </tr>
          <tr>
            <td>Subject-2</td>
            <td><input type="text" name="sub2"></td>
          </tr>
          <tr>
            <td>Subject-3</td>
            <td><input type="text" name="sub3"></td>
          </tr>
          <tr>
            <td>Subject-4</td>
            <td><input type="text" name="sub4"></td>
          </tr>
          <tr>
            <td>Subject-5</td>
            <td><input type="text" name="sub5"></td>
          </tr>
          <tr>
            <td>Subject-6</td>
            <td><input type="text" name="sub6"></td>
          </tr>
          <tr>
            <td>Subject-7</td>
            <td><input type="text" name="sub7"></td>
          </tr>
          <?php
            if (isset($_POST['ins'])) {
              $I_USN = $_SESSION['D_USN'];
              $I_SEM = $_POST['sem'];
              $sub1 = $_POST['sub1'];
              $sub2 = $_POST['sub2'];
              $sub3 = $_POST['sub3'];
              $sub4 = $_POST['sub4'];
              $sub5 = $_POST['sub5'];
              $sub6 = $_POST['sub6'];
              $sub7 = $_POST['sub7'];

              $conn = new mysqli("localhost", "root", "", "studentresults");
              if ($conn->connect_error) {
                    die('Could not connect to the database.');
                }
                else {
                    $Select = "SELECT USN FROM $I_SEM WHERE USN = ? LIMIT 1";
                    $Insert = "INSERT INTO $I_SEM(USN, sub1, sub2, sub3, sub4, sub5, sub6, sub7) values(?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($Select);
                    $stmt->bind_param("s", $I_USN);
                    $stmt->execute();
                    $stmt->bind_result($resultUSN);
                    $stmt->store_result();
                    $stmt->fetch();
                    $rnum = $stmt->num_rows;
                    if ($rnum == 0) {
                        $stmt->close();
                        $stmt = $conn->prepare($Insert);
                        $stmt->bind_param("siiiiiii",$I_USN, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7);
                        if ($stmt->execute()) {
                          echo '<script type="text/javascript"> alert("New record inserted sucessfully")</script>';
                        }
                        else {
                            echo $stmt->error;
                        }
                    }
                    else {
                      echo '<script type="text/javascript"> alert("Result already exits")</script>';
                    }
                    $stmt->close();
                    $conn->close();
                }
              }
            // else {
            //     echo "Submit button is not set";
            // }
            ?>
        </table>
      </div>
    </form>
  </body>
</html>
