<?php
include 'header.php';
?>
<title>Posts</title>
</head>

<body>
  <div class="body1">
    <div class="sidenav">
      <h2>Administrator</h2>

      <a href="./description.php">Description</a>
      <a href="#skills">Skills</a>
      <a href="./inbox.php">Inbox</a>
      <a href="./index.php" class="logoutbtn">Logout</a>
    </div>


    <div class="main">
      <h2>Skills</h2>
      <?php

      $servername = "localhost";
      $user = "root";
      $pass = "";
      $db = "profile";

      $conn = new mysqli($servername, $user, $pass, $db);

      // if($conn->error){
      //     echo "DB error ".$conn->error."";
      // }
      // else{
      //     echo "Connection successful";
      // }

      if (isset($_POST['add'])) {
        echo "<br>";

        $skill = $_POST['skill'];



        $sql = "insert into skills(skill) values ('$skill')";
        if ($conn->query($sql)) {
          // echo "message sent SUCCESSFULLY!!!";
          echo '<span style="color:green;"> skill added SUCCESSFULLY!!!</span>';
        } else {
          echo "Error: " . $conn->error;
        }
      }
      ?>
      <form action="skills.php" method="POST">
        <input type="text" name="skill" />
        <br><br>
        <input type="submit" name="add" value="add" />
      </form>
      <br><br>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "profile";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $tbl = "skills"; // Table name 
      $sql = "SELECT * FROM $tbl";
      $result = $conn->query($sql);
      while ($rows = $result->fetch_assoc()) {
      ?>
        <?php

        echo '<span style="color:green;"> ' . $rows['skill'] . '</span>';


        echo "<pre>"
        ?>
        <a href="skills.php?skill=<? echo $rows['skill']; ?>">delete</a>
        <hr>
      <?php
      }
      ?>
      <?php
      $conn->close();
      ?>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "profile";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $tbl = "skills";
      $skill = $_GET['skill'];
      $sqlD = "DELETE FROM $tbl WHERE skill = '$skill'";
      $result = $conn->query($sqlD);
      if ($result) {
        // echo "Deleted Successfully";
        // echo "<BR>";
        // echo "<a href='inbox.php'>Back to main page</a>";
      } else {
        echo '<span style="color:green;">ERORR</span>';
      }
      ?>
      <?php
      $conn->close();
      ?>
      <h2>Other</h2>
      <?php

      $servername = "localhost";
      $user = "root";
      $pass = "";
      $db = "profile";

      $conn = new mysqli($servername, $user, $pass, $db);

      // if($conn->error){
      //     echo "DB error ".$conn->error."";
      // }
      // else{
      //     echo "Connection successful";
      // }

      if (isset($_POST['addo'])) {
        // echo "<br>";

        $skill = $_POST['otherskill'];



        $sql = "insert into otherskill(skill) values ('$skill')";
        if ($conn->query($sql)) {
          // echo "message sent SUCCESSFULLY!!!";
          echo '<span style="color:green;"> skill added SUCCESSFULLY!!!</span>';
        } else {
          echo "Error: " . $conn->error;
        }
      }
      ?>
      <form action="skills.php" method="POST">
        <input type="text" name="otherskill" />
        <br><br>
        <input type="submit" name="addo" value="add" />
      </form>


      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "profile";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $tbl = "otherskill"; // Table name 
      $sql = "SELECT * FROM $tbl";
      $result = $conn->query($sql);
      while ($rows = $result->fetch_assoc()) {
      ?>
        <?php

        echo '<span style="color:green;"> ' . $rows['skill'] . '</span>';


        echo "<pre>"
        ?>
        <a href="skills.php?skill=<? echo $rows['skill']; ?>">delete</a>
        <hr>
      <?php
      }
      ?>
      <?php
      $conn->close();
      ?>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "profile";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $tbl = "otherskill";
      $skill = $_GET['skill'];
      $sqlD = "DELETE FROM $tbl WHERE skill = '$skill'";
      $result = $conn->query($sqlD);
      if ($result) {
        // echo "Deleted Successfully";
        // echo "<BR>";
        // echo "<a href='inbox.php'>Back to main page</a>";
      } else {
        echo '<span style="color:green;">ERORR</span>';
      }
      ?>
      <?php
      $conn->close();
      ?>
    </div>
  </div>
</body>

</html>