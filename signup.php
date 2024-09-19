<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup_page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
  <video src="fantasy_book.mp4" muted loop autoplay></video>
  <section class="contain">
  <form action="signup_handler.php" method="post">
      <h1>SIGN UP</h1>
      <br>
      <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="name" required>
        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <label for="password_again"><strong>Re-Enter Password</strong></label>
        <input type="password" placeholder="Enter Password Again" name="repassword" required>
      </div>
      <button type="submit"><strong>SIGN UP</strong></button>
    </form>
    </section>
  </body>
</html>


  