<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!= true){
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_page</title>
    <link rel="stylesheet" href="home_page.css">
</head>
<body>
  <section class="showcase">
    <header>
      <h2 class="logo">welcome <?php echo $_SESSION["username"] ?></h2>
      <div class="buttons">
        <a href="logout.php">logout</a>
        <!-- <a href="signup.php">signup</a> -->
        </div>
      <div class="toggle"></div>
    </header>
    <video src="fantasy_book.mp4" muted loop autoplay></video>
    <!-- <video src="amv villan.mp4"muted loop autoplay></video> -->
    <div class="overlay"></div>
    <div class="text">
      <h2>Welcome to library </h2> 
      <h3>Here are some books</h3>
      <div class="books" id="books">
        <ul>
            <li class="book_designs"> <a href="book1.php">php</a> </li>
            <li class="book_designs"> <a href="book3.php">JAVA </a></li>
            <li class="book_designs"> <a href="book4.php">JS </a></li>
            <li class="book_designs"> <a href="book2.php">C++ </a></li>
            <li class="book_designs"> <a href="book6.php">CSS </a></li>
            <li class="book_designs"> <a href="book5.php">Python </a></li>
        </ul>

      </div>

      <!-- <p class=>logout to exit library</p>
      <a href="logout.php">log out</a> -->
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="/jayants_library/home_page.php">Home</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Destination</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <script src="front_page.js"></script>
  </div>
 </body>
 </html>
</html>


 



    