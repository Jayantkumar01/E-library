<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <video src="fantasy_book.mp4" muted loop autoplay></video>
    <!-- <h1>this is login page</h1> -->
    <section class="contain">
    <form action="loginhandler.php" method="post">
      <h1>LOGIN</h1>
      <br>
      <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="name" required>
        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" required>
      </div>
      <button type="submit"><strong>LOGIN</strong></button>
    </form>
    </section>
    </form>
</body>
</html>