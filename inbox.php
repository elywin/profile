<?php
include 'header.php';
?>
 <title>Description</title>
</head>
<body>
<div class="body1">
<div class="sidenav">
<h2>Administrator</h2>

  <a href="./description.php">Description</a>
  <a href="./skills.php">Skills</a>
  <a href="#inbox">Inbox</a>
  <a href="./index.php" class="logoutbtn">Logout</a>
</div>

    
<div class="main">
  <h2>Inbox</h2>
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

$Rsql = "SELECT name, email, message FROM inbox";
$result = $conn->query($Rsql);
if ($result->num_rows > 0) {
  echo "<table ><tr><th style=padding:50px;>Name</th><th>email</th><th>Message</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td style=padding-left:10px;>".$row["name"]."</td><td style=padding-left:10px;>".$row["email"]."</td><td style=padding-left:100px;>".$row["message"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

</div>
</div>
</body>
</html>

