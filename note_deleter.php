<?php 
session_start();
include 'conn.php';

$cat = $_SESSION["number"];
$sql = "DELETE FROM `notes_table` WHERE `notes_table`.`S.no` = '$cat';";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location:home_page_2.php");
            exit();
    // echo $num;
} else{
    echo "deletion failed";
}