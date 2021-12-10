<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Movie Buzz</title>
</head>
<style>
body {
  background-image: url("https://wallpapercave.com/wp/wp2751453.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  color: white;
}

form {
  display: flex;
  margin: 0 auto;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
  padding: 20px;
  width: 100%;

}

div {
  background-color: rgba(1, 1, 1, 0.5);
  color: white;
  padding: 20px;
  border-radius: 10px;
}
</style>

<body>
  <?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli("localhost", "tanmay", "tanmayDB", "LABFAT");
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if($result->num_rows > 0) {
      $gmail = $row1['email'];
      $firstname = $row1['firstname'];
      $lastname = $row1['lastname'];
      echo "Welcome To Movie BUZZ!!$firstname $lastname" . "<br>";
    } else {
      echo "Invalid username or password";
      // we have to redirect the user to the login page
      // header("Location: login.php");
    }
  ?>
  <h1>Movies Available:</h1>
  <form action="book.php" method="post">
    <?php
    $query = "SELECT * FROM Movie";
    $result = $conn->query($query);
    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $movieName = $row['name'];
        $length = $row['length'];
        $rating = $row['rating'];
        $theaterName = $row['theaterName'];
        $showtime = $row['showtime'];
        $hallnames = $row['hallnames'];
        $language = $row['language'];
        $showDate = $row['showDate'];
        echo "<div class=\"MovieBox\">";
        echo "<input type= \"Checkbox\" name = \"movie\"><h2>$movieName</h2>";
        echo "<p>Length : $length</p>";
        echo "<p>Rating : $rating</p>";
        $theaters = explode(",", $theaterName);
        $showtimes = explode(",", $showtime);
        $hallnames = explode(",", $hallnames);
        $languages = explode(",", $language);
        $showDates = explode(",", $showDate);
        echo "<select>";
        for($i = 0; $i < count($theaters); $i++) {
          echo "<p>Theater : $theaters[$i]</p>";
          echo "<p>Showtime : $showtimes[$i]</p>";
          echo "<p>Hall Name : $hallnames[$i]</p>";
          echo "<p>Language : $languages[$i]</p>";
          echo "<p>Show Date : $showDates[$i]</p>";
        }
        echo "</select>";
        echo "</div>";
      } 
    }
    else {
      echo " : ( No movies available";
    }
  ?>
  </form>
</body>

</html>