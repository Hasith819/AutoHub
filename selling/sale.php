<?php
include './login/connection.php';
// session_start();
// $loggedUserID = $_SESSION['loggedUserID'];

if(isset($_POST['submit'])) {

    $vehicleBrand = $_POST["vehicle-brand"];
    $vehicleModel = $_POST["vehicle-model"];
    $vehicleName = $_POST["vehicle-name"];
    $YOM = $_POST["year-of-manufacture"];
    $telephoneNumber = $_POST["telephone-number"];
    $engineCapacity = $_POST["engine-capacity"];
    $vehicleMileage = $_POST["mileage"];

    $allowTypes = array('jpg', 'png', 'jpeg', 'webp');

    $imgContents = array();

    foreach($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
        $fileName = basename($_FILES['photos']['name'][$key]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if(in_array($fileType, $allowTypes)) {
            $imgContents[] = addslashes(file_get_contents($tmp_name));
        }
    }

    while(count($imgContents) < 4) {
        $imgContents[] = null;
    }

    $sql = "INSERT INTO vehiclemarket (userID, vBrand, vModel, vName, yearM, tel, eCapacity, mileage, img1, img2, img3, img4) VALUES ('$loggedUserID', '$vehicleBrand', '$vehicleModel', '$vehicleName', '$YOM', '$telephoneNumber', '$engineCapacity', '$vehicleMileage', ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, 'ssss', $imgContents[0], $imgContents[1], $imgContents[2], $imgContents[3]);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>//AUTOHUB// Home</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./validation.css">
    

  </head>
  <body>

    <header>
      <span class="logo" style="font-family: poppins;  font-size: 2rem">//AUTOHUB//</span>
      <nav>
        <ul>
          <li><a id="" href="../logged.html"  >HOME</a></li>
          <li><a id="" href="#">SERVICES</a></li>
          <li><a id="contactBTN" href="#">CONTACTS</a></li>
          <li><a id="" href="#">ABOUT</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle"><ion-icon name="person-circle-outline" style="font-size: 2em;"></ion-icon></a></li>
          <ul><li><a href="./index.html">Sign-out</a></li></ul>
        
        </ul>
      </nav>
    </header>

     <div class="container">

        <video id="video-background" autoplay muted loop>
            <source src="video.mp4" type="video/mp4">
        </video>
          
        <form id="form1" action="sale.php" method="POST" onsubmit="return validateLogin">
           
            <h1 style="color: white;">Sell Your Vehicle</h1>
            <div class="input-control">
                <label for="vehicle-model" >Vehicle Brand</label>
                <select id="vehicle-brand" name="vehicle-brand">
                    <option value="" disabled selected>Select vehicle brand</option>
                    <option value="model1">TOYOTA</option>
                    <option value="model2">MITSUBISHI</option>
                    <option value="model3">NISSAN</option>
                    <option value="model4">AUDI</option>
                    <option value="model5">MAZDA</option>
                    <option value="model6">BENZ</option>
                    <option value="model7">BMW</option>
                    <option value="model8">NISSAN</option>
                   
                </select>
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="vehicle-model">Vehicle model</label>
                <select id="vehicle-model" name="vehicle-model">
                    <option value="" disabled selected>Select vehicle model</option>
                    <option value="model1">CAR</option>
                    <option value="model2">SUV</option>
                    <option value="model3">LORRY</option>
                  
                </select>
                <div class="error"></div>
            </div>
            
            <div class="input-control">
                <label for="vehicle-name">Vehicle name</label>
                <input id="vehicle-name" name="vehicle-name" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="year-of-manufacture">Year of Manufacture</label>
                <input id="year-of-manufacture" name="year-of-manufacture" type="text">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="telephone-number">Telephone number</label>
                <input id="telephone-number" name="telephone-number" type="text">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="engine-capacity">Engine Capacity(cc)</label>
                <input id="engine-capacity" name="engine-capacity" type="text">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="mileage">Mileage(Km)</label>
                <input id="mileage" name="mileage" type="text">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="photos">Photos</label>
                <input id="photos" name="photos" type="file" multiple>
                <div class="error"></div>
            </div>
          
            <button name='submit'>Post Add</button>

      
        </form>
   
        <script>
            document.getElementById('photos').addEventListener('change', function() {
                var files = this.files;
                var maxFiles = 4;

                if (files.length > maxFiles) {
                    alert('You can only select a maximum of ' + maxFiles + ' images.');
                    this.value = '';
                }
            });
        </script>
    </div>



    <div class="main">

      <footer>
        
          <div class="zoom">
              <ul class="social_icon">
                  <li><a href="https://www.facebook.com/index.php/"><ion-icon name="logo-facebook"></ion-icon>
                      </a></li>

                  <li><a href="https://twitter.com/?lang=en"><ion-icon name="logo-twitter"></ion-icon>
                      </a></li>

                  <li><a href="https://www.youtube.com/"><ion-icon name="logo-youtube"></ion-icon>
                      </a></li>

                  <li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon>
                      </a></li>
              </ul>

          </div>

          <ul class="menu" id="contactScroll">
            <li>+94 23 (555) 5858</li>
            <li>autohub@gmail.com</li>
            <li>Kamburupitiya, Matara.</li>
          </ul>

          <p> //AUTOHUB// Pvt.Ltd | All right reserved</p>


      </footer>


  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="indexVal.js"></script>
  <script src="../contactscroll.js"></script>


  </body>
</html>