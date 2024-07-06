


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/res-styles.css">
    <link rel="stylesheet" href="./css/istyle.css">

    <title>Search-Booking</title>
</head>
<body>
<?php include_once "nav.php"?>

<div class="search-section">  
        <div class="search-wrapper">

            <div class="top">
                <header>Search your Booking </header>
            </div>
            <form name="reservation" id="form" method="get" action="search-booking.php" >
            <div class="input-box">
                <input type="text"  name="email-search" id="email-search" placeholder="email" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">
                <i class='bx bx-search-alt-2'></i>
            </div>
                <input type="submit" id="searchBtn" name="search" value="Search">   
            </form>
            <?php
                        include "./includes/connect.php";

                        if(isset($_GET['search'])){
                            $emailRetrieve = $_GET['email-search'];

                            $query = "SELECT * FROM reservation WHERE email ='$emailRetrieve'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run )> 0 )
                            {

                                foreach($query_run as $row)
                                {
                                
                                    ?>
                                    <form name="reservation" action="actions.php
                                    "  >
                                    
                                        <div class="input-box">
                                            <label for="fName">Name</label>
                                            <input type="text" id="name" name="fName" value="<?= $row['customer_name'] ?>">
                                            <i class="bx bx-user"></i>  
                                        </div>

                                        <div class="input-box">
                                            <label for="email">E-mail</label>
                                            <input type="text" id="email" name="email" value="<?= $row['email'] ?>">
                                            <i class="bx bx-user"></i>  
                                        </div>

                                        <div class="input-box">
                                            <label for="Address">Address</label>
                                            <input type="text" id="address" name="Address" value="<?= $row['address'] ?>"  >
                                            <i class='bx bxs-home'></i>
                                        </div>
                                    
                                        <div class="input-box">
                                            <label for="mobile">Mobile Number</label>
                                            <input type="tel" id="phone" name="mobile" value="<?= $row['mobile'] ?>">
                                            <i class='bx bxs-phone'></i>
                                        </div>


                                        <div class="input-box">

                                                <select id="days" name="days" required>
                                                    <option > <?= $row['package'] ?></option>                                             
                                                </select>
                                            </section>
                                        </div>

                                        <div class="input-box">
                                            <section>
                                                
                                                <select id="days" name="days" required>
                                                    <option> <?= $row['num_of_days'] ?> </option>
                                                </select>
            
            
                                                <select id="days" name="days" required>
                                                <option> <?= $row['num_participants'] ?> </option> 
                                                </select>
                                            </section>
                                        </div>
                                        <div class="button-box">
                                                <input type="submit" id="reserve" name="updateBtn"value="Update" >
                                                <input type="submit" id="reserve" name="deleteBtn"value="Delete">
                                        </div>

                                    <?php

                                }

                            }
                            else
                            {
                                echo "<script>alert('no data found')</script>";
                                header( "refresh:1; url=search-booking.php" );
                            }
                        }

                        
                    ?>
            </div>
            
            
        </form> 
        </div>
    </div>

  <?php include_once"includes/footer.php"?>

</body>
</html>