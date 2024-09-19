<?php
session_start();

include 'conn.php';

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
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
  <link rel="stylesheet" href="home_page_2.css">
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
          <li class="book_designs" id="book1"> <a href="book1.php">php</a> </li>
          <li class="book_designs" id="book2"> <a href="book3.php">JAVA </a></li>
          <li class="book_designs" id="book3"> <a href="book4.php">JS </a></li>
          <li class="book_designs" id="book4"> <a href="book2.php">C++ </a></li>
          <li class="book_designs" id="book5"> <a href="book6.php">CSS </a></li>
          <li class="book_designs" id="book6"> <a href="book5.php">Python </a></li>
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
      <li>
        <form action="note_handler.php" method="post">
          <textarea name="note" id="note" cols="30" rows="10" placeholder="Enter your notes here"></textarea>
          <button class="btn">add note</button>
        </form>
      </li>
      <?php
      $sql = "SELECT * FROM `notes_table`";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
          // echo $row['S.no'];
          // echo $row['note']; 
          $num =  $row['S.no'];
          $note = $row['note'];
          $_SESSION['number'] = $num;
          echo '<form action="note_deleter.php" method="post">
          <div class="container2">
          <h4><b>'.$num.'.</b></h4>
          <p>'.$note.'</p>
          </div>
          <button class="batan">delete note</button>
          <hr> 
      </form>';
      }
      ?>

    </ul>

    <script src="front_page.js"></script>
  </div>
</body>

</html>

</html>