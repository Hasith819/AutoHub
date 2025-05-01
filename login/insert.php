<?php
include 'connection.php';
if(isset($_POST['submit'])){//data enawada null da kiyalai isset eken check kranne
$UserName = $_POST["uname"];
$Email = $_POST["email"];
$Password = $_POST["password"];

$sql="INSERT INTO register (username,email,password) VALUE ('$UserName','$Email','$Password')";

$result=mysqli_query($conn,$sql);

if($result==TRUE){
    // echo "New record create successfully";
    header("Location: login.html");
    exit;
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
}
echo "No data Retrieved";
?>