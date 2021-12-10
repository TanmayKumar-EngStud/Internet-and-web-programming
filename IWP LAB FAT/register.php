<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registered!!</title>
</head>

<body>
  <?php
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  echo "Your email is: " . $email . "<br>";
  echo "Your username is: " . $username . "<br>";
  echo "Your password is: " .$password. " <br>";
  echo "Your phone number is: " . $phone . "<br>";
  echo "Your address is: " . $address . "<br>";
  $conn = mysqli_connect("localhost", "tanmay", "tanmayDB", "IWP_LAB_FAT");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "INSERT INTO users (email, username, password, phone, address) VALUES ('$email', '$username', '$password', '$phone', '$address')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  ?>
  <form action="login.php">
    <input type="submit" value="Login">
  </form>

  <hr>
  <p>This page is only to ensure that the validation is working correctly or not!!</p>
</body>

</html>