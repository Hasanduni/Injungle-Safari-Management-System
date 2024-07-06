<?php 
    include ("connect.php");
    ///------------------insert
    $id=$_GET['updateid'];

if (isset($_POST['submit'])) {

    session_start();

    $cHolder = $_POST['cHolder'];
    $cNumber = $_POST['cNumber'];
    $exDate = $_POST['exDate'];
    $cvc = $_POST['cvc'];
    
    $sql="update payment set id=$id,cNumber=$cNumber,cHolder= '$cHolder',exDate='$exDate',cvc=$cvc
    where id=$id";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        //echo "updated successfully";
        header('location:display.php');
        
    } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }

}
?>

<?php include_once "connect.php"?>

<!DOCTYPE html>

<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <div class="wrapper">
        <div class="payment">
            <h1>Payment Gateway</h1>
            <div class="form">
                <form name="payment" id="form" method="post" >

                <div class="card space icone-relative">
                    <label class="label">Card holder:</label>
                    <input type="text" class="input" name="cHolder" required="required" autocomplete="off" placeholder="Name">
                    <i class='bx bxs-user'></i>
                </div>

                <div class="card space icone-relative">
                    <label class="label">Card Number:</label>
                    <input type="text" class="input" name="cNumber" required="required" autocomplete="off" placeholder="Card Number">
                    <i class='bx bx-credit-card'></i>
                </div>

                <div class="card-grp space">
                    <div class="card-item icone-relative">
                        <label class="label">Expiry Date:</label>
                        
                        <input type="date" class="input" name="exDate" required="required" autocomplete="off" placeholder="00 / 00"> 
                        <i class='bx bxs-calendar'></i>
                    </div>
                    <div class="card-item icone-relative">
                        <label class="label">CVC:</label>
                        <input type="text" class="input" name="cvc" required="required" autocomplete="off" placeholder="000">
                        <i class='bx bxs-lock-alt'></i> 
                    </div>

                
                </div>
                <div class="button">
                    <button id="send" name="submit">Update</button>
                </div>

</form>

            </div>
        </div>
    </div>

</body>
</html>