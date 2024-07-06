<?php include_once "./includes/connect.php"?>
<?php include "actions.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

 
    <link rel="stylesheet" href="./css/res-styles.css">
    <link rel="stylesheet" href="./css/istyle.css">
    
    <title>Reserve</title>
    
</head>
<body>
<?php include_once "nav.php"?>

    <div class="form-section">
  
    
      
    <div class="form-wrapper">
            
            <form name="reservation" id="form" method="Post" action="actions.php" >
                <div class="top">
                    <header>Reserve Your Tour </header>
                </div>

                <div class="input-box">
                    <input type="text" id="name" name="fName" placeholder="Full name">
                    <i class="bx bx-user"></i>  
                </div>

            <div class="input-box">
                <input type="text" id="address" name="Address" placeholder="Address" >
                <i class='bx bxs-home'></i>
            </div>

            <div class="input-box">
                <input type="tel" id="phone" name="mobile" placeholder="Mobile Number">
                <i class='bx bxs-phone'></i>
            </div>
            <div class="input-box">
                <input type="text" id="email" name="email" placeholder="Email" >
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
            <section>
                <select id="package" name="package" required>
                    <option value="choose">Choose a package</option>
                    <option value="yala">Yala safari trip</option>
                    <option value="wilpattu">Wilpattu safari trip</option>
                    <option value="hp">Horton plains safari trip</option>
                    <option value="singharaja">Singharaja safari trip</option>
                </select>
            
            
                <select id="days" name="days" required>
                    <option value="choose">Number of days</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>  
                </select>
            </section>
            </div>
            <div class="input-box">
            <section>
                <input type="number" min="0"id="adults" name="adults" placeholder="adults">
                <input type="number" min="0" id="children" name="children" placeholder="children">
            </section>
        </div>
        <input type="submit" id="reserve" name="submitBtn"value="Reserve">
        <a href="search-booking.php"><button type="button">Search your Booking</button></a>
        
    </div>
    </div>

    <?php include_once"includes/footer.php"?>
</body>
</html>