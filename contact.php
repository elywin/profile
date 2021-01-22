<?php
include 'auth.php';
include 'header.php';
?>
<title>Contact</title>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="./index.php">Home</a>
    <a href="./projects.php">Projects and Publications</a>
    <!-- <a href="./blog.php">Blog</a> -->
    <a href="#contact.php" class="active">Contact</a>
    <button class="open-button" onclick="openForm()">Login</button>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="form-popup" id="myForm">
    <form action="./contact.php" class="form-container" method="POST">
      <h1>Login</h1>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn" name="login" value="login">Login</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  <div class="contact-section">
    <h3 class="hcontact">Contact </h3>
    <div class="address">
      <p><i class="fa fa-mobile" aria-hidden="true"></i> Tel: +256752330676</p>
      <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: lukeeraelywin@gmail.com</p>
      <p><i class="fa fa-map-marker" aria-hidden="true"></i> Location: P.OBox 234, burton street kampala</p>

    </div>


    <div class="contactForm">


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

      if (isset($_POST['send'])) {
        echo "<br>";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "insert into inbox (name,email,message) values ('$name','$email','$message')";

        if ($conn->query($sql)) {
          // echo "message sent SUCCESSFULLY!!!";
          echo '<span style="color:green;">message sent SUCCESSFULLY!!!</span>';
        } else {
          echo "Error: " . $conn->error;
        }
      }

      ?>



      <form action="./contact.php" method="POST">

        Name
        <br>
        <input type="text" name="name" required />
        <br><br>
        Email
        <br>
        <input type="text" name="email" required/>
        <br><br>
        Message
        <br>
        <input style="height:100px;" type="textarea" name="message" class="messo" required/>
        <br><br>
        <input type="submit" name="send" value="send" />

      </form>


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