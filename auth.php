<?php
    session_start();
  
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'profile');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM admin WHERE username='$username'");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<span style="color:red;">Username password combination is wrong!</span>';

        } else {
            if ($password === $result['passcode']) {
                $_SESSION['user_id'] = $result['id'];
                header('Location: dashboard.php');
                echo '<span style="color:red;">Congratulations, you are logged in!</span>';

            } else {
                echo '<span style="color:red;">Username password combination is wrong!</span>';

                
            }
        }
    }
