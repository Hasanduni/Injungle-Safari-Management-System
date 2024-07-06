<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "injungle_safari";

    //Create connection
    $conn = mysqli_connect($servername,$username,$password,$database);

    //Check connection
    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $inquiry=mysqli_real_escape_string($conn,$_POST['inquiry']);

    $sql="INSERT INTO comments(Fullname,Email,Comment) Values('$name','$email','$inquiry')";

    if(mysqli_query($conn,$sql) === TRUE){
        echo "<script>alert('Comment submitted successfully');window.location.herf='newcont.php';</script>";
    }
    else{
        echo "Error: ". $sql2 . "<br>". mysqli_error($conn);
    }

?>