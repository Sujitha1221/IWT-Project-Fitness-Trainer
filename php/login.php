
<?php

    require("config.php");
    session_start();

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $pword = $_POST['pw'];

        $query = "SELECT * FROM login WHERE username='$username'";
        $result = $conn->query($query);

        if ($result->num_rows < 1)
        {
            echo "Login failed: Invalid username";
            $failed = true;
            header("location:../Views/LoginD.php?failed=$failed");
        }
        else
        {
            $row = $result->fetch_assoc();
            $pword_stored = $row['password'];
    
            if ($pword != $pword_stored)
            {
                echo "Login failed: Invalid password";
                $failed = true;
                header("location:../Views/LoginD.php?failed=$failed");
            }
            else
            {
                $_SESSION['username'] = $username;
                $_SESSION['lid'] = $row['lid'];
                echo "Login successful";
                header('location:../Views/HomePage.php');
            }
        }


    } else if (isset($_POST['logout']))
    {
        if(isset($_SESSION['username']))
        {
            session_unset();
            echo "Loggd out";
            header('location:../Views/HomePage.php');
        }
        else
        {
            echo "User not logged in";
        }
    } else if (isset($_POST['delete']))
    {
        $username = $_SESSION['username'];
        $query = "DELETE FROM purchase WHERE username='$username'";
        $result = $conn->query($query);
        $query = "DELETE FROM register WHERE username='$username'";
        $result = $conn->query($query);
        $query = "DELETE FROM login WHERE username='$username'";
        $result = $conn->query($query);

        session_unset();

        $deletedacc = true;
        header("location:../Views/HomePage.php?deletedacc=$deletedacc");
    }
  
?>






































