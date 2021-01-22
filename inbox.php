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

$tbl="inbox"; // Table name 
$sql = "SELECT * FROM $tbl";
$result = $conn->query($sql);
while($rows = $result->fetch_assoc()){
?>
<?php
  
echo "Name: ".$rows['name'];
echo "<pre>"."Email: ".$rows['email'];
echo "<pre>"."Message: ".$rows['message']; 
echo "<pre>"
?> 
<a href="inbox.php?name=<? echo $rows['name']; ?>">delete</a>
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

    $tbl="inbox"; 
    $name = $_GET['name'];
    $sqlD="DELETE FROM $tbl WHERE name = '$name'";
    $result = $conn->query($sqlD);
    if($result){
        // echo "Deleted Successfully";
        // echo "<BR>";
        // echo "<a href='inbox.php'>Back to main page</a>";
    }else {
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

