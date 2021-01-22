<?php
include 'auth.php';
include 'header.php';
?>

<title>Home</title>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <a href="./projects.php">Projects and Publications</a>
    <!-- <a href="./blog.php">Blog</a> -->
    <a href="./contact.php">Contact</a>
    <button class="open-button" onclick="openForm()">Login</button>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="form-popup" id="myForm">
    <form action="./index.php" class="form-container" method="POST">
      <h1>Login</h1>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn" name="login" value="login">Login</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>

  <div class="section">
    <div class="profilePic">
      <img src="./images/profile.jpeg">
    </div>


    <div class="container">
      <?php

      $servername = "localhost";
      $user = "root";
      $pass = "";
      $db = "profile";

      $conn = new mysqli($servername, $user, $pass, $db);


      $sqlr = "SELECT * FROM description";
      $result = $conn->query($sqlr);

      while ($row = $result->fetch_assoc()) {

      ?>

        <h3><?php echo $row['name'] ?></h3>

        <h2><?php echo $row['title'] ?></h2>


        <p><?php echo $row['about'] ?></p>

        <p><?php echo $row['interest'] ?></p>
      <?php
      }
      ?>
    </div>

    <div class="social-media">
      <ul class="social-link">
        <li class="social">
          <a class="list-link" href="mailto:lukeeraelywin@gmail.com"><i class="fa fa-envelope fa-1x icon" aria-hidden="true"></i></a>
        </li>
        <li class="social">
          <a class="list-link" href="https://github.com/elywin"><i class="fa fa-github fa-1x icon" aria-hidden="true"></i></a>
        </li>
        <li class="social">
          <a class="list-link" href="https://twitter.com/ellywinmichael"><i class="fa fa-twitter fa-1x icon" aria-hidden="true"></i></a>
        </li>
        <li class="social">
          <a class="list-link" href="https://www.linkedin.com/in/michael-lukeera-0a84ba127/"><i class="fa fa-linkedin fa-1x icon" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>
  </div>

  <script src="./script.js"></script>
</body>

</html>