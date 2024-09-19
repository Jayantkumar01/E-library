<?php

    $server = "localhost";
    $username="root";
    $password="";
    $database="notes_database";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }
    //  else{
        // echo 'success';
    // }
    // echo "connection succeed";
?>
    <!-- $note = $_POST['note'];
    $sql = "INSERT INTO 'notes_table'('note','dt') VALUES 
    ('$note',current_timestamp())"; -->
