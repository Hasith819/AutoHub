<?php
include '../login/connection.php';
if(isset($_POST['submit'])){//data enawada null da kiyalai isset eken check kranne
$vehicleBrand = $_POST["vehicle-brand"];
$vehicleModel = $_POST["vehicle-model"];
$vehicleName = $_POST["vehicle-name"];
$YOM = $_POST["year-of-manufacture"];
$telephoneNumber = $_POST["telephone-number"];
$engineCapacity = $_POST["engine-capacity"];
$vehicleMileage = $_POST["mileage"];

echo "lknvkj";

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