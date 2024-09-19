 <?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $server = "localhost";
        $username="root";
        $password="";
        $database="notes_database";
    
        $conn = mysqli_connect($server,$username,$password,$database);

        $note = $_POST["note"];
        // $sql = "INSERT INTO 'notes_table'('note','dt') VALUES 
        // ('$note', current_timestamp())";
        $sql = "INSERT INTO `notes_table` (`S.no`, `note`, `timestamp`) VALUES (NULL, '$note', current_timestamp());";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: home_page_2.php");
            exit();
            

        } else{
            echo "note failed";
        }

    }

?> 