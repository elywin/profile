<?php

$servername = "localhost";
$user = "root";
$pass = "";
$db = "profile";

$conn = new mysqli($servername,$user,$pass,$db);

// if($conn->error){
//     echo "DB error ".$conn->error."";
// }
// else{
//     echo "Connection successful";
// }

if(isset($_POST['send'])){
    echo "<br>";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "insert into inbox (name,email,message) values ('$name','$email','$message')";

    if($conn->query($sql)){
        // echo "message sent SUCCESSFULLY!!!";
        echo '<span style="color:#ffffff;">message sent SUCCESSFULLY!!!</span>';

    }
    else{
        echo "Error: ".$conn->error;
    }

}

?>

<?php
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
  <a href="./dashboard.php" class="loginbtn">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="contact-section">
<h3 class="hcontact">Contact </h3>
<div class="address">
      <p><i class="fa fa-mobile" aria-hidden="true"></i> Tel: +256752330676</p>
      <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: lukeeraelywin@gmail.com</p>
      <p><i class="fa fa-map-marker" aria-hidden="true"></i> Location: P.OBox 234, burton street kampala</p>

    </div>
    
    
    <div class="contactForm">
      <form action="./contact.php" method="POST">

        Name
        <br>
        <input type="text" name="name" />
        <br><br>
        Email
        <br>
        <input type="text" name="email" />
        <br><br>
        Message
        <br>
        <input type="textarea" name="message" class="messo"/>
        <br><br>
        <input type="submit" name="send" value="send" />
        
      </form>
    </div>

    <div class="social-media">
        <ul class="social-link">
          <li class="social">
            <a class="list-link" href="mailto:lukeeraelywin@gmail.com"
              ><i class="fa fa-envelope fa-1x icon" aria-hidden="true"></i
            ></a>
          </li>
          <li class="social">
            <a class="list-link" href="https://github.com/elywin"
              ><i class="fa fa-github fa-1x icon" aria-hidden="true"></i
            ></a>
          </li>
          <li class="social">
            <a class="list-link" href="https://twitter.com/ellywinmichael"
              ><i class="fa fa-twitter fa-1x icon" aria-hidden="true"></i
            ></a>
          </li>
          <li class="social">
            <a
              class="list-link"
              href="https://www.linkedin.com/in/michael-lukeera-0a84ba127/"
              ><i class="fa fa-linkedin fa-1x icon" aria-hidden="true"></i
            ></a>
          </li>
        </ul>
      </div>

</div>

    <script src="./script.js"></script>
</body>
</html>