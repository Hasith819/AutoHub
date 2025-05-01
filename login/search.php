<?php
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $Email = $_POST["eml"];
        $Password = $_POST['pass'];

        $sql = "select * from register where email = '$Email' and password = '$Password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location:../logged.html");
            exit;
        }  
        else{ 
            header("Location: login.html"); 
            exit;
        }     
    }
    ?>