<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from payment where id=$id";
    $result=mysqli_query($conn,$sql);
    if( $result){
        //echo "deleted successful";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>
