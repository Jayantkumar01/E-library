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
    <style> 
    .text{
  display: inline-block;
  position: absolute;
  /* display: inline; */
  /* float: left; */
  font-size: 1em;
  background: #fff;
  padding: 10px 30px;
  text-transform: uppercase;
  text-decoration: none;
  font-weight: 500;
  margin-top: 45%;
  margin-left: 88%;
  color: #111;
  letter-spacing: 2px;
  transition: 0.2s;
}
.text a:hover
{
    -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
    
    </style>
    <title>Document</title>
</head>
<body>
<form action="home_page_2.php" class="text">
            <button><h3>go back</h3></button>
            </form>
<div class="container" id="container" name="container">
        <embed src="book (6).pdf" type="application/pdf" width="100%" height="800px"> 
        
    </div>
</body>
</html>