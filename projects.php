<?php
include 'auth.php';
include 'header.php';
?>
<title>Projects&Publications</title>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="./index.php">Home</a>
    <a href="#projects.php" class="active">Projects and Publications</a>
    <!-- <a href="./blog.php">Blog</a> -->
    <a href="./contact.php">Contact</a>
    <button class="open-button" onclick="openForm()">Login</button>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="form-popup" id="myForm">
    <form action="./projects.php" class="form-container" method="POST">
      <h1>Login</h1>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn" name="login" value="login">Login</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  <h3>Skills</h3>
  <ul>
    <li style="font-weight:950; color:white; text-align:center">Web development</li>

    <?php

    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "profile";

    $conn = new mysqli($servername, $user, $pass, $db);


    $sqlr = "SELECT * FROM skills";
    $result = $conn->query($sqlr);

    while ($row = $result->fetch_assoc()) {

    ?>

      <div class="skills">


        <li><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['skill'] . "<pre>";  ?></li>
      <?php
    }
      ?>

  </ul>

  <h3>Other</h3>
  <?php

  $servername = "localhost";
  $user = "root";
  $pass = "";
  $db = "profile";

  $conn = new mysqli($servername, $user, $pass, $db);


  $sqlr = "SELECT * FROM otherskill";
  $result = $conn->query($sqlr);

  while ($row = $result->fetch_assoc()) {

  ?>

    <div class="skills">


      <li><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['skill'] . "<pre>";  ?></li>
    <?php
  }
    ?>

    </ul>
    </div>

    <h3>Projects</h3>
    <div class="projects">
      <div class="flip-card">
        <a href="#">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="./images/menu-5.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>Lollifud hub</h1>
              <p>Online resturant menu</p>
              <p>Order food online from anywhere</p>
            </div>
          </div>
        </a>
      </div>


      <div class="flip-card">
        <a href="#">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="./images/api.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>EDU-StackAPI</h1>
              <p>Question answer API</p>
              <p>Question Answer, RESTFULL API Create,Read,Update,Delete</p>
            </div>
          </div>
        </a>
      </div>


      <div class="flip-card">
        <a href="#">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="./images/blog.jpg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>Blog</h1>
              <p>Trending Technologies</p>
              <p>Follow trending technologies</p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>