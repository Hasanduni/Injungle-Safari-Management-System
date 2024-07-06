<?php

session_start();
 include_once "./includes/connect.php";
 include "actions.php" ;

global $finalPrice;
global $fName;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pay-styles.css">
    

    <title>PayAmount</title>
</head>
<body>


<div class="body">

  <div class="container">
    
    <div class="centre-content">
      <h1 class="price">Dear <?php echo $_SESSION['user'] ?>, <br>
      Your total payment for a  <?php echo $_SESSION['days'] ?> day journey to <?php echo $_SESSION['package'] ?> 
      for the group of <?php echo $_SESSION['totalPeople'] ?> people is LKR <?php echo $_SESSION['price'] ?><span>/-</span></h1>
      
    </div>
    
    <div class="last-content">
      <a href="payment.php"><input type="submit" class="pay-now-btn" value="Proceed to pay"></a>
      
      
    </div>
  </div>
</div>    


</body>
</html>