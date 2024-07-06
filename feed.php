<?php
include_once './includes/connect.php';

$sql = mysqli_query($conn, "SELECT * FROM feedback");
$row = mysqli_fetch_array($sql);
if (is_array($row)) {

  $id = $row["id"];
  $name = $row["name"];
  $email = $row["email"];
  $phone = $row["phone"];
  $feedback = $row["feedback"];
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $feedback = $_POST['additionalFeedback'];

  $stmt = $conn->prepare("INSERT INTO feedback (name, email, phone, feedback) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $phone, $feedback);

  if ($stmt->execute()) {
    echo "<script>alert('Feedback added successfully')</script>";
    echo "<script>setTimeout(\"location.href = 'feed.php';\",500);</script>";
    exit();
  } else {
    echo "SQL Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}

if (isset($_POST['update'])) {

  $sql = "UPDATE feedback SET name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "' , feedback='" . $_POST['additionalFeedback'] . "' WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Feedback edited successfully')</script>";
    echo "<script>setTimeout(\"location.href = 'feed.php';\",500);</script>";
    exit();
  } else {
    echo "<script>alert('Error updating feedback')</script>";
    echo "<script>setTimeout(\"location.href = 'feed.php';\",500);</script>";
  }
}

if(isset($_POST['delete'])) {

  $sql = mysqli_query($conn, "DELETE FROM feedback WHERE id='$id'");
  if ($sql) {
    echo "<script>alert('Feedback deleted successfully')</script>";
    echo "<script>setTimeout(\"location.href = 'feed.php';\",500);</script>";
    exit();
  } else {
    echo "<script>alert('Error deleting feedback')</script>";
    echo "<script>setTimeout(\"location.href = 'feed.php';\",500);</script>";
    exit();
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="./css/feed.css">
</head>

<body>



  
  <h1>Submit Form</h1>
  <form method="POST">
    <label for="name">Name:</label>
    <?php
    if (isset($id)) { ?>
      <input type="text" id="name" name="name" value="<?php echo $name ?>" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="<?php echo $email ?>" required>

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" value="<?php echo $phone ?>" maxlength="10" required>

      <label for="additionalFeedback">Additional Feedback:</label>
      <textarea id="additionalFeedback" name="additionalFeedback" rows="20" cols="10"
        required><?php echo $feedback ?></textarea>
      <?php
    } else { ?>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" maxlength="10" required>

      <label for="additionalFeedback">Additional Feedback:</label>
      <textarea id="additionalFeedback" name="additionalFeedback" rows="20" cols="10" required></textarea>
    <?php }
    ?>

    <div class="buttons">
      <?php
      if (isset($id)) {
        echo "<input type='submit' name='submit' value='Submit' disabled>&nbsp;&nbsp;";
      } else {
        echo "<input type='submit' name='submit' value='Submit'>&nbsp;&nbsp;";
      }

      if (isset($id)) {
        echo "<input type='submit' name='update' value='Update'>&nbsp;&nbsp;";
      } else {
        echo "<input type='submit' name='update' value='Update' disabled>&nbsp;&nbsp;";
      }

      if (isset($id)) {
        echo "<input type='submit' name='delete' value='Delete'>";
      } else {
        echo "<input type='submit' name='delete' value='Delete' disabled>";
      }
      ?>
      <div class="back">
        <a href="index.php"><button type="button">Back</button></a>
      </div>
    </div>
  </form>

  
</body>

</html>