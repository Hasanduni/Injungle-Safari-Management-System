<?php
include 'connect.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container">
    
        <button class="btn btn-primary my-5"><a href="payment.php" class="text-light">add card   details</a>
          
        </button>

        
        
        <table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">cHolder</th>
      <th scope="col">cNumber</th>
      <th scope="col">exDate</th>
      <th scope="col">cvc</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $sql= "SELECT * FROM payment";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $cHolder = $row['cHolder'];
            $cNumber = $row['cNumber'];
            $exDate = $row['exDate'];
            $cvc = $row['cvc'];
            
            echo ' <tr>
            <th scope="row"> '.$id.'</th>
            <td>'.$cHolder.'</td>
            <td>'.$cNumber.'</td>
            
            <td>'.$exDate.'</td>
            <td>'.$cvc.'</td>
            <td>
            
            <button class="btn btn-primary" name="updateBtn"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger" name="deleteBtn" ><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
        
    }



?>
   
    
  </tbody>
</table>

  
    </div>
   
 
   

   
  </body>
</html>