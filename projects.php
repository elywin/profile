<?php
include 'header.php';
?>
 <title>Projects&Publications</title>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="./index.php">Home</a>
  <a href="#projects.php" class="active">Projects and Publications</a>
  <a href="./blog.php">Blog</a>
  <a href="./contact.php">Contact</a>
  <a href="./dashboard.php" class="loginbtn">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

  <h3>Skills</h3>
  <div class="skills">
   
    <ul>
    <li style="font-weight:950;">Web development</li>
      <li>Reactjs</li>
      <li>Nodejs</li>
      <li>MongoDB</li>
      <li>Laravel</li>
    </ul>

  <h3>Other</h3>
  <ul>
    <li>Version control</li>
    <li>Wordpress</li>
    <li>CI / CD</li>
  </ul>
  </div>

<h3>Projects</h3>
<div class="projects">
<div class="flip-card">
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
</div>


<div class="flip-card">
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
</div>


<div class="flip-card">
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
</div>
</div>
    <script src="./script.js"></script>
</body>
</html>