<?php 

include "connection.php";

    if (isset($_POST['update'])) {

        $email = $_POST['email'];

        $password = $_POST['password']; 

        $sql = "UPDATE register SET password='$password' WHERE email='$email'"; 

        $result = $conn->query($sql); 

        if ($result === TRUE && $conn->affected_rows > 0) {

            header('Location: login.html');
            exit(); 
        } else {
         
            if ($conn->affected_rows === 0) {
              
                echo "Error: Email not found.";
            } else {
                
                echo "Error:" . $sql . "<br>" . $conn->error;
            }

    } 
}

?> 