<?php

include("./includes/connect.php");

//------------------insert 
if (isset($_POST['submitBtn'])) {

    session_start();

    $fName = $_POST['fName'];
    $Address = $_POST['Address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $package = $_POST['package'];
    $days = $_POST['days'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

    $totalPeople = $adults + $children;

    $sql = "INSERT INTO reservation (customer_name, address, mobile, email, package, num_of_days, num_participants) VALUES ('$fName', '$Address', '$mobile', '$email', '$package', '$days', $totalPeople)";
    
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Reservation Completed')</script>";
        switch($days){

            case'1':  $priceAdults= $adults*2500;
                    $childPrice = $children*1500;
                    $finalPrice= ($priceAdults+$childPrice)*1;
                    break;

            case'2':  $priceAdults= $adults*2500;
                    $childPrice = $children*1500;
                    $finalPrice= ($priceAdults+$childPrice)*2;
                    break;
            
            case'3':  $priceAdults= $adults*2500;
                    $childPrice = $children*1500;
                    $finalPrice= ($priceAdults+$childPrice)*3;
                    break;

        }
       

        $_SESSION['price']= $finalPrice;
        $_SESSION['user']= $fName;
        $_SESSION['days']= $days;
        $_SESSION['package']= $package;
        $_SESSION['totalPeople']= $totalPeople;
        
        header('Location: pay-index.php');
        
    } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }

}

//---------------update
if (isset($_GET['updateBtn'])) {

    $email = $_GET['email'];

    $fName = $_GET['fName'];
    $Address = $_GET['Address'];
    $mobile = $_GET['mobile'];


    $sql = "UPDATE `reservation` SET `customer_name` = '$fName', `address` = '$Address', `mobile` = '$mobile' WHERE `reservation`.`email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Reservation Updated')</script>";
        header( "refresh:1; url=reservation.php" );
    }else{
        echo "<script>alert('error')</script>";
    }

    

 }

//------------delete
 if (isset($_GET['deleteBtn'])) {
    $email = $_GET['email'];

    $sql= "DELETE FROM `reservation` WHERE `reservation`.`email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Reservation Deleted')</script>";
        header( "refresh:1; url=reservation.php" );
    }else{
        echo "<script>alert('error')</script>";
    }
 }

 

?>

