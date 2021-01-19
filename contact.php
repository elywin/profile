<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="./index.php">Home</a>
  <a href="./projects.php">Projects and Publications</a>
  <a href="#contact.php" class="active">Contact</a>
  <a href="#login" class="loginbtn">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<div class="contact-section">

<div class="address">
      <p><i class="fa fa-mobile" aria-hidden="true"></i> Tel: +256752330676</p>
      <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: lukeeraelywin@gmail.com</p>
      <p><i class="fa fa-map-marker" aria-hidden="true"></i> Location: P.OBox 234, burton street kampala</p>

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
    
    <h3 class="hcontact">Contact </h3>
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
</div>

    <script src="./script.js"></script>
</body>
</html>