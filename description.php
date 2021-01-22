<?php
include 'header.php';
?>
 <title>Description</title>
</head>
<body>
<div class="body1">
<div class="sidenav">
<h2>Administrator</h2>
  <a href="#Description">Description</a>
  <a href="./skills.php">Skills</a>
  <a href="./inbox.php">Inbox</a>
  <a href="./index.php" class="logoutbtn">Logout</a>
</div>

    
<div class="main">
  <h2>Description</h2>
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

if(isset($_POST['create'])){
    echo "<br>";
    
    $name= $_POST['name'];
    $title= $_POST['title'];
    $about = $_POST['about'];
   

    $sql = "insert into description(name,title,about) values ('$name','$title','$about')";
    if($conn->query($sql)){
        // echo "message sent SUCCESSFULLY!!!";
        echo '<span style="color:green;"> about message created SUCCESSFULLY!!!</span>';

    }
    else{
        echo "Error: ".$conn->error;
    }
  }

  if(isset($_POST['update'])){
    echo "<br>";
    
    $name= $_POST['name'];
    $title= $_POST['title'];
    $about = $_POST['about'];
  $sqlu = "UPDATE description SET name='$name', title='$title', about='$about' WHERE name='$name'";

if ($conn->query($sqlu) === TRUE) {
  echo '<span style="color:green;"> about message updated SUCCESSFULLY!!!</span>';
} else {
  echo "Error updating record: " . $conn->error;
}

  }
  if(isset($_POST['delete'])){
    echo "<br>";
    
    $name= $_POST['name'];
   
   

    $sqld =  $sql="DELETE FROM description WHERE name = '$name'";
    if($conn->query($sqld)){
        // echo "message sent SUCCESSFULLY!!!";
        echo '<span style="color:green;"> about message deleted SUCCESSFULLY!!!</span>';

    }
    else{
        echo "Error: ".$conn->error;
    }
  }
    $sqlr = "SELECT * FROM description";
    $result = $conn->query($sqlr);

    while($row = $result->fetch_assoc()){

?>

  <form action="./description.php" method="POST">
        Name
        <br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"/>
        <br><br>
        Title
        <br>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" />
        <br><br>
        Description
        <br>
        <input type="textarea"  name="about" value="<?php echo $row ['about']; ?>" />
        <br><br>
<input type="submit" name="create" value="create" />
<input type="submit" name="delete" value="delete" />
<input type="submit" name="update" value="update" />
</form>
<?php
        }
        ?>
  </div>
</body>
</html>