<?php 
    include ("./includes/connect.php");
    ///------------------insert

    if (isset($_POST['submitPayment'])) 
    {

        
    
        $cHolder = $_POST['cHolder'];
        $cNumber = $_POST['cNumber'];
        $exDate = $_POST['exDate'];
        $cvc = $_POST['cvc'];
        
        $sql = "INSERT INTO payment(cHolder, cNumber, exDate, cvc) VALUES ('$cHolder', '$cNumber', '$exDate', ' $cvc')";
        
        
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            echo "<script>alert('payment Completed')</script>";
            header( 'location:display.php' );
            
            
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    }
    
//---------------update

?>

