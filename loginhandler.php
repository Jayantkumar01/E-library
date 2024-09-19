<?php

$login = false;
echo "<link rel='stylesheet' href='handlingpages.css'>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "library_db";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn){
    die("Error". mysqli_connect_error());
    } else{
        $name = $_POST['name'];
        $password = $_POST['password'];

        $sql = "Select * from signin_data where name='$name' and password='$password' ";
        $result= mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $name;
            header("location: home_page_2.php");
        } else{
            echo "<div class='text'><h4>login failed<h4></div>";
            echo '<form action="login.php" class="text">
            <button><h3>go back</h3></button>
            </form>';
        }

    } 

}

