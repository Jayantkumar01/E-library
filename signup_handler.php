
<?php
echo "<link rel='stylesheet' href='handlingpages.css'>";
$insert = false;

if($_POST['password']!=$_POST['repassword']){
    echo "<div class='text'><h4> passwords didn't matched<h4></div>";
    echo '<form action="signup.php" class="text">
        <button><h3>go back<h3></button>
    </form>';
    // header("Location: errorpage.php");
    exit();
}

if($_POST['password']==$_POST['repassword']){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "library_db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{

            $name = $_POST['name'];
            $password1 = $_POST['password'];
            $repassword = $_POST['repassword'];

            $existSql = "SELECT * FROM `signin_data` WHERE name = '$name'";
            $result = mysqli_query($conn, $existSql);
            $numExistRows = mysqli_num_rows($result);
            if($numExistRows > 0){
                echo '<div class="text"> <h4>Username Already Exists</h4>';
                echo '<form action="signup.php" class="text">
                    <button><h3>go back</h3></button>
                    </form>';
                    exit();

                }   
                else{

                    $name = $_POST['name'];
                    $password1 = $_POST['password'];
                    $repassword = $_POST['repassword'];
                    $sql = "INSERT INTO `signin_data` (`name`, `password`, `repassword`) VALUES ('$name', '$password1', '$repassword')";
                    $result = mysqli_query($conn, $sql);
                   
                    if($result){
                        
                        echo '<div class="text"> <h4> congratulation signin succeed     
                        lets go to login page </h4></div>
                        <form action="login.php" class="text">
                        <button><h3>login</h3></button>
                    </form>';
                    }
            }
        }
    
}
?>
